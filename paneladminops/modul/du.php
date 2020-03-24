<?php
session_start();
include('../koneksi/koneksi.php');



//memanggil file excel_reader
require "../koneksi/excel_reader.php";

//jika tombol import ditekan
if(isset($_POST['submit'])){

    $target = basename($_FILES['filepegawaiall']['name']) ;
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);

    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'],false);

//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);

//    jika kosongkan data dicentang jalankan kode berikut
    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;
    if($drop == 1){
//             kosongkan tabel pegawai
             $truncate ="TRUNCATE TABLE daftarulang";
             mysql_query($truncate);
    };

//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
      $nopendaftaran = $data->val($i, 1);
      $nama   = $data->val($i, 2);

//      setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "REPLACE into daftarulang (nopendaftaran,nama)values('$nopendaftaran','$nama')";
      $hasil = mysql_query($query);
    }

    if(!$hasil){
//          jika import gagal
          die(mysql_error());
      }else{
//          jika impor berhasil
          echo "Data berhasil diimpor.";
    }

//    hapus file xls yang udah dibaca
    unlink($_FILES['filepegawaiall']['name']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMAM1TA 2019/2020</title>


    <link rel="stylesheet" type="text/css" href="bootstrap/css/pastel-stream.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
<body>

    <div class="container">


        <!-- sample templates start -->

        <!-- Navbar -->
        <?php include('../menu.php'); ?>

        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Daftar Ulang</h3>
                </div>
                <div class="panel-body">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>No</th>
                          <th>Nomor Pendaftaran</th>
                          <th>Nama</th>
                      </tr>
                  </thead>
                  <!-- <tfoot>
                      <tr>
                        <th>No</th>
                          <th>Nomor Pendaftaran</th>
                          <th>Nama</th>
                      </tr>
                  </tfoot> -->
                  <tbody>
                    <?php
                    $noo=0;
                    $data=mysql_query("select * from  daftarulang where nopendaftaran");
                    while ($b=mysql_fetch_array($data)){
                            $noo++;
                    ?>

                    <tr class="odd gradeX">
                      <td><?php echo $noo; ?></td>
                      <td ><?php echo $b['nopendaftaran'];?></td>
                      <td><?php echo $b['nama'];?></td>
                    </tr>
                                <?php
                    }
                  ?>
                  </tbody>
              </table>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="well">
              <h1>Script Import File Excel</h1>
              <form name="myForm" id="myForm" onSubmit="return validateForm()" action="du.html" method="post" enctype="multipart/form-data">
                  <input type="file" id="filepegawaiall" name="filepegawaiall" />
                  <input type="submit" name="submit" value="Import" /><br/>
                  <label><input type="checkbox" name="drop" value="1" /> <u>Kosongkan tabel sql terlebih dahulu.</u> </label>
              </form>
                * file yang bisa di import adalah .xls (Excel 2003-2007).
                <script type="text/javascript">
                //    validasi form (hanya file .xls yang diijinkan)
                function validateForm()
                {
                function hasExtension(inputID, exts) {
                var fileName = document.getElementById(inputID).value;
                return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
                }

                if(!hasExtension('filepegawaiall', ['.xls'])){
                alert("Hanya file XLS (Excel 2003) yang diijinkan.");
                return false;
                }
                }
                </script>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="well">
              <h1>Rekapitulasi Data </h1>
              <?php
                $result=mysql_query("SELECT count(*) as formulir from bayar");
                $data=mysql_fetch_assoc($result);

                $du=mysql_query("SELECT count(*) as du from daftarulang");
                $datadu=mysql_fetch_assoc($du);

                $total = $data['formulir'] - $datadu['du'];
              ?>

              Jumlah Pembelian Formulir adalah = <?php echo $data['formulir']; ?><br>
              Jumlah Daftar Ulang adalah = <?php echo $datadu['du']; ?><br>
              Selisih Formulir dan daftar Ulang = <?php echo $total; ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Siswa Belum Daftar Ulang</h3>
                </div>
                <div class="panel-body">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                        <th>No</th>
                          <th>Nomor Pendaftaran</th>
                          <th>Nama</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>No</th>
                          <th>Nomor Pendaftaran</th>
                          <th>Nama</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $noo=0;
                    $data=mysql_query("select * from  bayar order by nopendaftaran asc");
                    while ($b=mysql_fetch_array($data)){
                      $buka=mysql_query("select * from  daftarulang");
          						$bk=mysql_fetch_array($buka);
                      $belum=mysql_query("select * from bayar where nopendaftaran='$b[nopendaftaran]' and nopendaftaran not in (select nopendaftaran from daftarulang where nopendaftaran='$bk[nopendaftaran]')");
                        $sisa=mysql_fetch_array($belum);
                            $noo++;
                    ?>

                    <tr class="odd gradeX">
                      <td><?php echo $noo; ?></td>
                      <td ><?php echo $sisa['nopendaftaran'];?></td>
                      <td><?php echo $sisa['nama'];?></td>
                    </tr>
                                <?php
                    }
                  ?>
                  </tbody>
              </table>
            </div>
            </div>
        </div>
    </div>
</body>

</html>
