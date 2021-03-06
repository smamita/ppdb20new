<div class="col-lg-6">
    <div class="well scroll">
        <form class="form-horizontal" id="form1" action="modul/aksipendaftar.php" method="post" s enctype="multipart/form-data">
            <fieldset>
                <legend>FORMULIR PENDAFTARAN CALON PESERTA DIDIK </legend>
                <ul class="breadcrumb">
                    <span class="label label-warning">A. DATA DIRI CALON PESERTA DIDIK BARU</span>
                </ul>
                <div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">No Peserta</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="id_sekolah" id="id_sekolah" value="<?php echo $a['nopendaftaran']; ?>"
                            placeholder="Nomor Pendaftar">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">Password</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="password" id="password" value="<?php echo $x['password']; ?>"
                            placeholder="Nomor Pendaftar">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">NISN</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="nisn" id="nisn" value="<?php echo $a['nisn']; ?>"
                            placeholder="NISN">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">Nama</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $a['nama']; ?>"
                            placeholder="Nama Calon Pendaftar">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">Nama Alias</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="nama_alias" id="nama_alias" value="<?php echo $x['nama_alias']; ?>"
                            placeholder="Nama Calon Pendaftar">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-4 control-label">Jenis Kelamin</label>
                    <div class="col-lg-8">
                        <?php
if ($a['kelamin'] == "Laki-laki") {
    echo "<td><input type='radio' name='kelamin' value='Laki-laki' id='kelamin' checked> Laki-laki <input type='radio' name='kelamin' value='Perempuan' id='Kelamin'> Perempuan </td>";
} else {
    echo "<td><input type='radio' name='kelamin' value='Laki-laki' id='kelamin'> Laki-laki <input type='radio' name='kelamin' value='Perempuan' id='kelamin' checked> Perempuan </td>";
}
?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputsekolah" class="col-lg-4 control-label">Asal Sekolah</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" value="<?php echo $a['asal_sekolah']; ?>"
                            placeholder="Asal Sekolah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-4 control-label">Peminatan</label>
                    <div class="col-lg-8">
                        <?php
if ($a['peminatan'] == "Matematika dan Ilmu Pengetahuan Alam (MIPA)") {
    echo "<td><input type='radio' name='peminatan' value='Matematika dan Ilmu Pengetahuan Alam (MIPA)' id='peminatan' checked> Matematika dan Ilmu Pengetahuan Alam (MIPA) <input type='radio' name='peminatan' value='Ilmu Pengetahuan Sosial (IPS)' id='peminatan'> Ilmu Pengetahuan Sosial (IPS) </td>";
} else {
    echo "<td><input type='radio' name='peminatan' value='Matematika dan Ilmu Pengetahuan Alam (MIPA)' id='peminatan'> Matematika dan Ilmu Pengetahuan Alam (MIPA) <input type='radio' name='peminatan' value='Ilmu Pengetahuan Sosial (IPS)' id='peminatan' checked> Ilmu Pengetahuan Sosial (IPS) </td>";
}
?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputsekolah" class="col-lg-4 control-label">Tempat, Tgl Lahir</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="tmplahir" id="tmplahir" placeholder="Tempat Lahir"
                            value="<?php echo $a['tmplahir']; ?>">
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control datepicker" name="tgllahir" id="tgllahir" value="<?php echo $a['tgllahir']; ?>"
                            placeholder="contoh : 1990-04-13">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-4 control-label">Alamat</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $a['alamat']; ?>"
                            placeholder="Alamat Jalan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-4 control-label">Email</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="email" id="inputEmail" value="<?php echo $a['email']; ?>"
                            placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtlp" class="col-lg-4 control-label">HP / Nomor WA</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="telepon" id="telepon" value="<?php echo $a['telepon']; ?>"
                            placeholder="Nomor Telepon / HP yang bisa dihubungi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtlp" class="col-lg-4 control-label">Anak ke</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="anakke" id="anakke" value="<?php echo $a['anakke']; ?>"
                            placeholder="Anak ke">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">Keberadaan Anak</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="select" value="<?php echo $a['keberadaan_anak']; ?>" name="keberadaan_anak">
                            <?php
if ($a['kerjaayah'] == "") {
    echo "<option value=''>-- Pilih Keberadaan Anak --</option>
                                 <option value='Bersama Orang Tua'>Bersama Orang Tua</option>
                                 <option value='Wali'>Wali</option>
                                 <option value='Kost'>Kost</option>
                                 <option value='Asrama'>Asrama</option>
                                 <option value='Panti Asuhan'>Panti Asuhan</option>
                                 <option value='Pesantren'>Pesantren</option>
                                 <option value='Lainnya'>Lainnya</option>";
} else {
    echo "<option value='$a[keberadaan_anak]'>$a[keberadaan_anak]</option>
                                    <option value=''>-- Pilih Keberadaan Anak --</option>
                                   <option value='Bersama Orang Tua'>Bersama Orang Tua</option>
                                   <option value='Wali'>Wali</option>
                                   <option value='Kost'>Kost</option>
                                   <option value='Asrama'>Asrama</option>
                                   <option value='Panti Asuhan'>Panti Asuhan</option>
                                   <option value='Pesantren'>Pesantren</option>
                                   <option value='Lainnya'>Lainnya</option>";
}
?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtlp" class="col-lg-4 control-label">Saudara</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="saudara" id="saudara" value="<?php echo $a['saudara']; ?>"
                            placeholder="Jumlah Saudara Kandung">
                    </div>
                </div>
                <ul class="breadcrumb">
                    <span class="label label-warning">B. DATA DIRI ORANG TUA PESERTA DIDIK BARU</span>
                </ul>
                <div class="form-group">
                    <label for="inputtlp" class="col-lg-4 control-label">Nama Ayah</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="namaayah" id="namaayah" value="<?php echo $a['namaayah']; ?>"
                            placeholder="Nama Ayah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtlp" class="col-lg-4 control-label">Nama Ibu</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="namaibu" id="namaibu" value="<?php echo $a['namaibu']; ?>"
                            placeholder="Nama Ibu">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-4 control-label">Alamat</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="alamatortu" id="alamatortu" value="<?php echo $a['alamatortu']; ?>"
                            placeholder="Alamat Jalan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtlp" class="col-lg-4 control-label">Telp Ayah</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="teleponayah" id="teleponayah" value="<?php echo $a['teleponayah']; ?>"
                            placeholder="Nomor HP yang bisa dihubungi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtlp" class="col-lg-4 control-label">Telp Ibu</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="teleponibu" id="teleponibu" value="<?php echo $a['teleponibu']; ?>"
                            placeholder="Nomor HP yang bisa dihubungi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-4 control-label">Pekerjaan Ayah</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="select" value="<?php echo $a['kerjaayah']; ?>" name="kerjaayah">
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
                <div class="form-group">
                    <label for="select" class="col-lg-4 control-label">Pekerjaan Ibu</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="select" value="<?php echo $a['kerjaibu']; ?>" name="kerjaibu">
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
                <div class="form-group">
                    <label for="select" class="col-lg-4 control-label">Penghasilan Ayah</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="select" value="<?php echo $a['gajiayah']; ?>" name="gajiayah">
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
                <div class="form-group">
                    <label for="select" class="col-lg-4 control-label">Penghasilan Ibu</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="select" value="<?php echo $a['gajiibu']; ?>" name="gajiibu">
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

                <div class="form-group">
                    <label for="select" class="col-lg-4 control-label">Pendidikan Ayah</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="select" value="<?php echo $a['pendidikanayah']; ?>" name="pendidikanayah">
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
                <div class="form-group">
                    <label for="select" class="col-lg-4 control-label">Pendidikan Ibu</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="select" value="<?php echo $a['pendidikanibu']; ?>" name="pendidikanibu">
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

                <div class="form-group">
                    <label for="inputtlp" class="col-lg-4 control-label">Tahun Lahir Ayah</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="thlahirayah" id="thlahirayah" value="<?php echo $a['thlahirayah']; ?>"
                            placeholder="Tahun Lahir Ayah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputtlp" class="col-lg-4 control-label">Tahun Lahir Ibu</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="thlahiribu" id="thlahiribu" value="<?php echo $a['thlahiribu']; ?>"
                            placeholder="Tahun Lahir Ibu">
                    </div>
                </div>
                <ul class="breadcrumb">
                    <span class="label label-warning">D. Data Nilai Raport dan Hasil UN SMP/MTs</span>
                </ul>
                <div class="col-lg-12">
                    <?php include 'nilai.php';?>
                </div>

                <ul class="breadcrumb">
                    <span class="label label-warning">E. Jadwal Tes Peminatan</span>
                </ul>

                <div class="form-group">
                    <label for="select" class="col-lg-4 control-label">Jadwal Tes Peminatan</label>
                    <div class="col-lg-8">
                        <select class="form-control" id="select" name="id_jadwal">
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

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary" onclick="javascript: return confirm ('Pastikan data yang anda masukkan benar dan valid,')"
                            name="simpan" id="simpan">SIMPAN</button>
                        <!--<button type="submit" class="btn btn-primary" name="simpan" id="simpan">SIMPAN</button>-->
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<!--Cetak-->