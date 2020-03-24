<div class="form-element-area">
    <div class="container">
        <form class="form-horizontal" id="form1" action="modul/aksipendaftarnilai.php" name='autoSumForm' method="post">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <ul class="breadcrumb">
                            <span class="label label-warning">A. DATA DIRI CALON PESERTA DIDIK BARU</span>
                        </ul>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" hidden>
                                <div class="nk-int-mk">
                                    <h2>No Formulir</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="<?php echo $a['nopendaftaran']; ?>"
                                            name="nopendaftaran" placeholder="No Formulir" requst>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" hidden>
                                <div class="nk-int-mk">
                                    <h2>NAMA Alias</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="<?php echo $x['nama_alias']; ?>"
                                            name="nama_alias" placeholder="NAMA LENGKAP" requst>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>NISN</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="nisn" value="<?php echo $a['nisn']; ?>"
                                            placeholder="NISN" requst>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>NAMA LENGKAP</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" value="<?php echo $a['nama']; ?>" name="nama"
                                            placeholder="NAMA LENGKAP" requst>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>ASAL SEKOLAH SMP/MTs</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <!--<input type="text" class="form-control" value="<?php echo $a['asal_sekolah']; ?>"
                                            name="asal_sekolah" placeholder="ASAL SEKOLAH" requst> -->

                                            <select class="selectpicker" data-live-search="true" name="asal_sekolah"
                                            placeholder="ASAL SEKOLAH">
                                            <?php
if ($a['asal_sekolah'] == "---PILIH ASAL SEKOLAH---") {
    
                                                    echo "<option value=''>-- Pilih Sekolah SMP/MTs --</option>";
                                                    include "../koneksi/koneksi.php";
                                                    $sql = mysql_query("SELECT * FROM sekolah where aktif in ('1','2') ");
                                                    if(mysql_num_rows($sql) != 0){
                                                        while($row = mysql_fetch_assoc($sql)){
                                                        echo "<option value='$row[nama_sekolah]'>$row[nama_sekolah]</option>";
                                                        }
                                                    }
                                                    
} else {
    echo "<option value='$a[asal_sekolah]'>$a[asal_sekolah]</option>";    
    include "../koneksi/koneksi.php";
    $sql = mysql_query("SELECT * FROM sekolah where aktif in ('1','2') ");
    if(mysql_num_rows($sql) != 0){
        while($row = mysql_fetch_assoc($sql)){
        echo "<option value='$row[nama_sekolah]'>$row[nama_sekolah]</option>";
        }
    }
}?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>JENIS KELAMIN</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <?php
                                        if ($a['kelamin'] == "Laki-laki") {
                                            echo "                                        
                                        <label><input type='radio' value='Laki-laki' name='kelamin' class='i-checks' checked =''><i></i>Laki-Laki</label>
                                        <label><input type='radio' value='Perempuan' name='kelamin' class='i-checks'><i></i>Perempuan</label>";
                                        } else {
                                            echo "                                        
                                        <label><input type='radio' value='Laki-laki' name='kelamin' class='i-checks'><i></i>Laki-Laki</label>
                                        <label><input type='radio' value='Perempuan' name='kelamin' class='i-checks' checked =''><i></i>Perempuan</label>";
                                        }


                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>TEMPAT LAHIR</h2>
                                </div>
                                <div class="form-group ic-cmp-int form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="tmplahir" value="<?php echo $a['tmplahir']; ?>"
                                            placeholder="TEMPAT LAHIR" requst>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>TANGGAL LAHIR</h2>
                                </div>
                                <div class="form-group ic-cmp-int form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                    <!--<div class="nk-int-st">
                                    <input type="text" class="form-control" data-mask="9999-99-99" placeholder="Tahun-Bulan-Hari">
                                </div>-->
                                    <div class="nk-int-st">
                                        <div class="input-group date nk-int-st">
                                            <span class="input-group-addon"></span>
                                            <input type="text" class="form-control" value="<?php echo $newDate; ?>"
                                                name="tgllahir" requst placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Alamat</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="alamat" value="<?php echo $a['alamat']; ?>"
                                            placeholder="Alamat Lengkap" requst>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>No Handphone/WA</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="telepon" value="<?php echo $a['telepon']; ?>"
                                            placeholder="Nomor Handphone / WA" requst>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>EMAIL</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-mail"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="email" value="<?php echo $a['email']; ?>"
                                            placeholder="email" requst>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Anak Ke</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="anakke" value="<?php echo $a['anakke']; ?>"
                                            placeholder="anak" requst>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Jumlah Saudara</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="saudara" value="<?php echo $a['saudara']; ?>"
                                            placeholder="saudara" requst>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Keberadaan Anak</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" name="keberadaan_anak" requst>
                                            <?php
                                            if ($a['keberadaan_anak'] == "") {
                                                echo " <option>-- Pilih Keberadaan ANak --</option>
                                        <option value='Bersama Orang Tua'>Bersama Orang Tua</option>
                                        <option value='Wali'>Wali</option>
                                        <option value='Kost'>Kost</option>
                                        <option value='Asrama'>Asrama</option>
                                        <option value='Panti Asuhan'>Panti Asuhan</option>";
                                            } else {
                                                echo "<option value='$a[keberadaan_anak]'>$a[keberadaan_anak]</option>
                                            <option value=''>-- Pilih Keberadaan Anak --</option>
                                            <option value='Bersama Orang Tua'>Bersama Orang Tua</option>
                                            <option value='Wali'>Wali</option>
                                            <option value='Kost'>Kost</option>
                                            <option value='Asrama'>Asrama</option>
                                            <option value='Panti Asuhan'>Panti Asuhan</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <ul class="breadcrumb">
                            <span class="label label-warning">B. DATA DIRI ORANG TUA PESERTA DIDIK BARU</span>
                        </ul>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>NAMA Ayah</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="namaayah" value="<?php echo $a['namaayah']; ?>"
                                            placeholder="NAMA LENGKAP AYAH" requst>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>NAMA Ibu</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="namaibu" value="<?php echo $a['namaibu']; ?>"
                                            placeholder="NAMA LENGKAP IBU" requst>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Alamat</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="alamatortu" value="<?php echo $a['alamatortu']; ?>"
                                            placeholder="Alamat Lengkap" requst>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>No Handphone/WA Ayah</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="teleponayah" value="<?php echo $a['teleponayah']; ?>"
                                            placeholder="Nomor Handphone / WA" requst>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>No Handphone/WA Ibu</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-phone"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="teleponibu" value="<?php echo $a['teleponibu']; ?>"
                                            placeholder="Nomor Handphone / WA" requst>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Tahun Lahir ORTU</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="thlahirayah" value="<?php echo $a['thlahirayah']; ?>"
                                            placeholder="Tahun Lahir Ayah" requst>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="thlahiribu" value="<?php echo $a['thlahiribu']; ?>"
                                            placeholder="Tahun Lahir Ibu" requst>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Pekerjaan Ayah</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" name="kerjaayah" requst>
                                            <?php
                                            if ($a['kerjaayah'] == "") {
                                                echo "<option value=''>-- Pilih Pekerjaan Ayah --</option>
                                   <option value='Buruh'>Buruh</option>
                                   <option value='Karyawan Swasta'>Karyawan Swasta</option>
                                   <option value='Lainnya'>Lainnya</option>
                                   <option value='Nelayan'>Nelayan</option>
                                   <option value='Pedagang Besar'>Pedagang Besar</option>
                                   <option value='Pedagang Kecil'>Pedagang Kecil</option>
                                   <option value='Pensiunan'>Pensiunan</option>
                                   <option value='Petani'>Petani</option>
                                   <option value='Peternak'>Peternak</option>
                                   <option value='PNS/TNI/POLRI'>PNS/TNI/POLRI</option>
                                   <option value='Sudah Meninggal'>Sudah Meninggal</option>
                                   <option value='Tenaga Kerja Indonesia'>Tenaga Kerja Indonesia</option>
                                   <option value='Tidak Bekerja'>Tidak Bekerja</option>
                                   <option value='Tidak dapat diterapkan'>Tidak dapat diterapkan</option>
                                   <option value='Wiraswasta'>Wiraswasta</option>
                                   <option value='Wirausaha'>Wirausaha</option>";
                                            } else {
                                                echo "<option value='$a[kerjaayah]'>$a[kerjaayah]</option>
                                      <option value=''>-- Pilih Pekerjaan Ayah --</option>
                                      <option value='Buruh'>Buruh</option>
                                     <option value='Karyawan Swasta'>Karyawan Swasta</option>
                                     <option value='Lainnya'>Lainnya</option>
                                     <option value='Nelayan'>Nelayan</option>
                                     <option value='Pedagang Besar'>Pedagang Besar</option>
                                     <option value='Pedagang Kecil'>Pedagang Kecil</option>
                                     <option value='Pensiunan'>Pensiunan</option>
                                     <option value='Petani'>Petani</option>
                                     <option value='Peternak'>Peternak</option>
                                     <option value='PNS/TNI/POLRI'>PNS/TNI/POLRI</option>
                                     <option value='Sudah Meninggal'>Sudah Meninggal</option>
                                     <option value='Tenaga Kerja Indonesia'>Tenaga Kerja Indonesia</option>
                                     <option value='Tidak Bekerja'>Tidak Bekerja</option>
                                     <option value='Tidak dapat diterapkan'>Tidak dapat diterapkan</option>
                                     <option value='Wiraswasta'>Wiraswasta</option>
                                     <option value='Wirausaha'>Wirausaha</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Pekerjaan Ibu</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" name="kerjaibu" requst>
                                            <?php
                                            if ($a['kerjaibu'] == "") {
                                                echo "<option value=''>-- Pilih Pekerjaan Ibu --</option>
                                   <option value='Buruh'>Buruh</option>
                                   <option value='Karyawan Swasta'>Karyawan Swasta</option>
                                   <option value='Lainnya'>Lainnya</option>
                                   <option value='Nelayan'>Nelayan</option>
                                   <option value='Pedagang Besar'>Pedagang Besar</option>
                                   <option value='Pedagang Kecil'>Pedagang Kecil</option>
                                   <option value='Pensiunan'>Pensiunan</option>
                                   <option value='Petani'>Petani</option>
                                   <option value='Peternak'>Peternak</option>
                                   <option value='PNS/TNI/POLRI'>PNS/TNI/POLRI</option>
                                   <option value='Sudah Meninggal'>Sudah Meninggal</option>
                                   <option value='Tenaga Kerja Indonesia'>Tenaga Kerja Indonesia</option>
                                   <option value='Tidak Bekerja'>Tidak Bekerja</option>
                                   <option value='Tidak dapat diterapkan'>Tidak dapat diterapkan</option>
                                   <option value='Wiraswasta'>Wiraswasta</option>
                                   <option value='Wirausaha'>Wirausaha</option>";
                                            } else {
                                                echo "<option value='$a[kerjaibu]'>$a[kerjaibu]</option>
                                      <option value=''>-- Pilih Pekerjaan Ibu --</option>
                                      <option value='Buruh'>Buruh</option>
                                       <option value='Karyawan Swasta'>Karyawan Swasta</option>
                                       <option value='Lainnya'>Lainnya</option>
                                       <option value='Nelayan'>Nelayan</option>
                                       <option value='Pedagang Besar'>Pedagang Besar</option>
                                       <option value='Pedagang Kecil'>Pedagang Kecil</option>
                                       <option value='Pensiunan'>Pensiunan</option>
                                       <option value='Petani'>Petani</option>
                                       <option value='Peternak'>Peternak</option>
                                       <option value='PNS/TNI/POLRI'>PNS/TNI/POLRI</option>
                                       <option value='Sudah Meninggal'>Sudah Meninggal</option>
                                       <option value='Tenaga Kerja Indonesia'>Tenaga Kerja Indonesia</option>
                                       <option value='Tidak Bekerja'>Tidak Bekerja</option>
                                       <option value='Tidak dapat diterapkan'>Tidak dapat diterapkan</option>
                                       <option value='Wiraswasta'>Wiraswasta</option>
                                       <option value='Wirausaha'>Wirausaha</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Penghasilan Ayah</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" name="gajiayah" requst>
                                            <?php
                                            if ($a['gajiayah'] == "") {
                                                echo "<option value=''>-- Pilih Penghasilan Ayah --</option>
                              <option value='Kurang dari Rp 500.000'>Kurang dari Rp 500.000</option>
                              <option value='Rp 500.000 - Rp 999.999'>Rp 500.000 - Rp 999.999</option>
                              <option value='Rp 1000.000 - Rp 1.999.999'>Rp 1000.000 - Rp 1.999.999</option>
                              <option value='Rp 2.000.000 - Rp 4.999.999'>Rp 2.000.000 - Rp 4.999.999</option>
                              <option value='Rp 5.000.000 - Rp 20.000.000'>Rp 5.000.000 - Rp 20.000.000</option>
                              <option value='Lebih dari Rp 20.000.000'>Lebih dari Rp 20.000.000</option>
                              <option value='Tidak Berpenghasilan'>Tidak Berpenghasilan</option>";
                                            } else {
                                                echo "<option value='$a[gajiayah]'>$a[gajiayah]</option>
                                <option value=''>-- Pilih Penghasilan Ayah --</option>
                                <option value='Kurang dari Rp 500.000'>Kurang dari Rp 500.000</option>
                                <option value='Rp 500.000 - Rp 999.999'>Rp 500.000 - Rp 999.999</option>
                                <option value='Rp 1000.000 - Rp 1.999.999'>Rp 1000.000 - Rp 1.999.999</option>
                                <option value='Rp 2.000.000 - Rp 4.999.999'>Rp 2.000.000 - Rp 4.999.999</option>
                                <option value='Rp 5.000.000 - Rp 20.000.000'>Rp 5.000.000 - Rp 20.000.000</option>
                                <option value='Lebih dari Rp 20.000.000'>Lebih dari Rp 20.000.000</option>
                                <option value='Tidak Berpenghasilan'>Tidak Berpenghasilan</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Penghasilan Ibu</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" name="gajiibu" requst>
                                            <?php
                                            if ($a['gajiibu'] == "") {
                                                echo "<option value=''>-- Pilih Penghasilan Ibu --</option>
                              <option value='Kurang dari Rp 500.000'>Kurang dari Rp 500.000</option>
                              <option value='Rp 500.000 - Rp 999.999'>Rp 500.000 - Rp 999.999</option>
                              <option value='Rp 1000.000 - Rp 1.999.999'>Rp 1000.000 - Rp 1.999.999</option>
                              <option value='Rp 2.000.000 - Rp 4.999.999'>Rp 2.000.000 - Rp 4.999.999</option>
                              <option value='Rp 5.000.000 - Rp 20.000.000'>Rp 5.000.000 - Rp 20.000.000</option>
                              <option value='Lebih dari Rp 20.000.000'>Lebih dari Rp 20.000.000</option>
                              <option value='Tidak Berpenghasilan'>Tidak Berpenghasilan</option>";
                                            } else {
                                                echo "<option value='$a[gajiibu]'>$a[gajiibu]</option>
                                <option value=''>-- Pilih Penghasilan Ayah --</option>
                                <option value='Kurang dari Rp 500.000'>Kurang dari Rp 500.000</option>
                                <option value='Rp 500.000 - Rp 999.999'>Rp 500.000 - Rp 999.999</option>
                                <option value='Rp 1000.000 - Rp 1.999.999'>Rp 1000.000 - Rp 1.999.999</option>
                                <option value='Rp 2.000.000 - Rp 4.999.999'>Rp 2.000.000 - Rp 4.999.999</option>
                                <option value='Rp 5.000.000 - Rp 20.000.000'>Rp 5.000.000 - Rp 20.000.000</option>
                                <option value='Lebih dari Rp 20.000.000'>Lebih dari Rp 20.000.000</option>
                                <option value='Tidak Berpenghasilan'>Tidak Berpenghasilan</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Pendidikan Ayah</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" name="pendidikanayah" requst>
                                            <?php
                                            if ($a['pendidikanayah'] == "") {
                                                echo "<option value=''>-- Pilih Pendidikan Ayah --</option>
                                <option value='	Tidak sekolah'>Tidak sekolah</option>
                                <option value='PAUD'>PAUD</option>
                                <option value='TK / sederajat'>TK / sederajat</option>
                                <option value='Putus SD'>Putus SD</option>
                                <option value='SD / sederajat'>SD / sederajat</option>
                                <option value='SMP / sederajat'>SMP / sederajat</option>
                                <option value='SMA / sederajat'>SMA / sederajat</option>
                                <option value='Paket A'>Paket A</option>
                                <option value='Paket B'>Paket B</option>
                                <option value='Paket C'>Paket C</option>
                                <option value='D1'>D1</option>
                                <option value='D2'>D2</option>
                                <option value='D3'>D3</option>
                                <option value='D4'>D4</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                                <option value='Non formal'>Non formal</option>
                                <option value='Informal'>Informal</option>
                                <option value='Lainnya'>Lainnya</option>";
                                            } else {
                                                echo "<option value='$a[pendidikanayah]'>$a[pendidikanayah]</option>
                                <option value=''>-- Pilih Pendidikan Ayah --</option>
                                <option value='	Tidak sekolah'>Tidak sekolah</option>
                                <option value='PAUD'>PAUD</option>
                                <option value='TK / sederajat'>TK / sederajat</option>
                                <option value='Putus SD'>Putus SD</option>
                                <option value='SD / sederajat'>SD / sederajat</option>
                                <option value='SMP / sederajat'>SMP / sederajat</option>
                                <option value='SMA / sederajat'>SMA / sederajat</option>
                                <option value='Paket A'>Paket A</option>
                                <option value='Paket B'>Paket B</option>
                                <option value='Paket C'>Paket C</option>
                                <option value='D1'>D1</option>
                                <option value='D2'>D2</option>
                                <option value='D3'>D3</option>
                                <option value='D4'>D4</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                                <option value='Non formal'>Non formal</option>
                                <option value='Informal'>Informal</option>
                                <option value='Lainnya'>Lainnya</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Pendidikan Ibu</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" name="pendidikanibu" requst>
                                            <?php
                                            if ($a['pendidikanibu'] == "") {
                                                echo "<option value=''>-- Pilih Pendidikan Ayah --</option>
                                <option value='	Tidak sekolah'>Tidak sekolah</option>
                                <option value='PAUD'>PAUD</option>
                                <option value='TK / sederajat'>TK / sederajat</option>
                                <option value='Putus SD'>Putus SD</option>
                                <option value='SD / sederajat'>SD / sederajat</option>
                                <option value='SMP / sederajat'>SMP / sederajat</option>
                                <option value='SMA / sederajat'>SMA / sederajat</option>
                                <option value='Paket A'>Paket A</option>
                                <option value='Paket B'>Paket B</option>
                                <option value='Paket C'>Paket C</option>
                                <option value='D1'>D1</option>
                                <option value='D2'>D2</option>
                                <option value='D3'>D3</option>
                                <option value='D4'>D4</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                                <option value='Non formal'>Non formal</option>
                                <option value='Informal'>Informal</option>
                                <option value='Lainnya'>Lainnya</option>";
                                            } else {
                                                echo "<option value='$a[pendidikanibu]'>$a[pendidikanibu]</option>
                                <option value=''>-- Pilih Pendidikan Ayah --</option>
                                <option value='	Tidak sekolah'>Tidak sekolah</option>
                                <option value='PAUD'>PAUD</option>
                                <option value='TK / sederajat'>TK / sederajat</option>
                                <option value='Putus SD'>Putus SD</option>
                                <option value='SD / sederajat'>SD / sederajat</option>
                                <option value='SMP / sederajat'>SMP / sederajat</option>
                                <option value='SMA / sederajat'>SMA / sederajat</option>
                                <option value='Paket A'>Paket A</option>
                                <option value='Paket B'>Paket B</option>
                                <option value='Paket C'>Paket C</option>
                                <option value='D1'>D1</option>
                                <option value='D2'>D2</option>
                                <option value='D3'>D3</option>
                                <option value='D4'>D4</option>
                                <option value='S1'>S1</option>
                                <option value='S2'>S2</option>
                                <option value='S3'>S3</option>
                                <option value='Non formal'>Non formal</option>
                                <option value='Informal'>Informal</option>
                                <option value='Lainnya'>Lainnya</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <ul class="breadcrumb">
                            <span class="label label-warning">C. Nilai Siswa</span>
                        </ul>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php include('nilai.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <ul class="breadcrumb">
                            <span class="label label-warning">C. Jurusan Peminatan dan Jadwal Tes Peminatan</span>
                        </ul>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Jurusan Peminatan</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <?php
                                        if ($a['peminatan'] == "IPA") {
                                            echo "
                                            <label><input type='radio' value='IPA' name='peminatan' class='i-checks' checked=''><i></i>IPA</label>
                                            <label><input type='radio' value='IPS' name='peminatan' class='i-checks'><i></i>IPS</label>
                                            ";
                                        } else {
                                            echo "
                                            <label><input type='radio' value='IPA' name='peminatan' class='i-checks'><i></i>IPA</label>
                                            <label><input type='radio' value='IPS' name='peminatan' class='i-checks' checked=''><i></i>IPS</label>
                                            ";
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Pilih Jadwal Tes</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" id="select" name="id_jadwal" requst>
                                            <?php
                                            include "../koneksi/koneksi.php";
                                            $sql = mysql_query("SELECT * FROM jadwal where id_jadwal='1'");
                                            $ja = mysql_fetch_array($sql);
                                            echo "<option value='$ja[id_jadwal]'>$ja[nama_jadwal]</option>";
                                            ?>
                                            <option>---PILIH JADWAL TES---</option>
                                            <?php
                                            include "../koneksi/koneksi.php";
                                            $sql = mysql_query("SELECT * FROM jadwal ORDER BY nama_jadwal ASC");
                                            if (mysql_num_rows($sql) != 0) {
                                                while ($row = mysql_fetch_assoc($sql)) {
                                                    echo "<option value='$row[id_jadwal]'>$row[nama_jadwal]</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="breadcrumb">
                            <p align="center">Data ini diisikan dengan benar adanya untuk keperluan Pendaftaran Calon
                                Peserta Didik Baru di SMA Muhammadiyah 1 Taman
                                Tahun Pelajaran 2020/2021</p>
                            <div class="form-example-int mg-t-15">
                                <button type="submit" class="btn btn-success notika-btn-success" name="simpan" id="simpan">SIMPAN</button>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>