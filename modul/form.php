<div class="form-element-area">
    <div class="container">
        <form class="form-horizontal" id="form1" action="modul/aksipendaftar.php" method="post">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <ul class="breadcrumb">
                            <span class="label label-warning">A. DATA DIRI CALON PESERTA DIDIK BARU</span>
                        </ul>
                        <div class="row">


                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>NISN (digunakan untuk password)</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-star"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="nisn" placeholder="NISN" required>
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
                                        <input type="text" class="form-control" name="nama" placeholder="NAMA LENGKAP"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>ASAL SEKOLAH <a class="btn btn-primary" href="sekolah.html" role="button">Tambah SMP/MTs</a></h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <select class="selectpicker" data-live-search="true" name="asal_sekolah"
                                            placeholder="ASAL SEKOLAH">
                                            <option>---PILIH SEKOLAH---</option>
                                            <?php
                                                    include "../koneksi/koneksi.php";
                                                    $sql = mysql_query("SELECT * FROM sekolah where aktif in ('1','2') ");
                                                    if(mysql_num_rows($sql) != 0){
                                                        while($row = mysql_fetch_assoc($sql)){
                                                        echo "<option value='$row[nama_sekolah]'>$row[nama_sekolah]</option>";
                                                        }
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
                                    <h2>JENIS KELAMIN</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <label><input type="radio" value="Laki-laki" name="kelamin" class="i-checks"
                                                checked="">
                                            <i></i> Laki - Laki</label>
                                        <label><input type="radio" value="Perempuan" name="kelamin" class="i-checks">
                                            <i></i> Perempuan</label>
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
                                        <input type="text" class="form-control" name="tmplahir"
                                            placeholder="TEMPAT LAHIR" required>
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
                                            <input type="text" class="form-control" value="" name="tgllahir" required
                                                placeholder="Tanggal Lahir">
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
                                        <input type="text" class="form-control" name="alamat"
                                            placeholder="Alamat Lengkap" required>
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
                                        <input type="text" class="form-control" name="telepon"
                                            placeholder="Nomor Handphone / WA" required>
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
                                        <input type="text" class="form-control" name="email" placeholder="email"
                                            required>
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
                                        <input type="text" class="form-control" name="anakke" placeholder="anak"
                                            required>
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
                                        <input type="text" class="form-control" name="saudara" placeholder="saudara"
                                            required>
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
                                        <select class="selectpicker" name="keberadaan_anak" required>
                                            <option>-- Pilih Keberadaan Anak --</option>
                                            <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                            <option value="Wali">Wali</option>
                                            <option value="Kost">Kost</option>
                                            <option value="Asrama">Asrama</option>
                                            <option value="Panti Asuhan">Panti Asuhan</option>
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
                                        <input type="text" class="form-control" name="namaayah"
                                            placeholder="NAMA LENGKAP AYAH" required>
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
                                        <input type="text" class="form-control" name="namaibu"
                                            placeholder="NAMA LENGKAP IBU" required>
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
                                        <input type="text" class="form-control" name="alamatortu"
                                            placeholder="Alamat Lengkap" required>
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
                                        <input type="text" class="form-control" name="teleponayah"
                                            placeholder="Nomor Handphone / WA" required>
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
                                        <input type="text" class="form-control" name="teleponibu"
                                            placeholder="Nomor Handphone / WA" required>
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
                                        <input type="text" class="form-control" name="thlahirayah"
                                            placeholder="Tahun Lahir Ayah" required>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" name="thlahiribu"
                                            placeholder="Tahun Lahir Ibu" required>
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
                                        <select class="selectpicker" name="kerjaayah" required>
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
                                            <option value='Wirausaha'>Wirausaha</option>
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
                                        <select class="selectpicker" name="kerjaibu" required>
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
                                            <option value='Wirausaha'>Wirausaha</option>
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
                                        <select class="selectpicker" name="gajiayah" required>
                                            <option value=''>-- Pilih Penghasilan Ayah --</option>
                                            <option value='Kurang dari Rp 500.000'>Kurang dari Rp 500.000</option>
                                            <option value='Rp 500.000 - Rp 999.999'>Rp 500.000 - Rp 999.999</option>
                                            <option value='Rp 1000.000 - Rp 1.999.999'>Rp 1000.000 - Rp 1.999.999
                                            </option>
                                            <option value='Rp 2.000.000 - Rp 4.999.999'>Rp 2.000.000 - Rp 4.999.999
                                            </option>
                                            <option value='Rp 5.000.000 - Rp 20.000.000'>Rp 5.000.000 - Rp 20.000.000
                                            </option>
                                            <option value='Lebih dari Rp 20.000.000'>Lebih dari Rp 20.000.000</option>
                                            <option value='Tidak Berpenghasilan'>Tidak Berpenghasilan</option>
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
                                        <select class="selectpicker" name="gajiibu" required>
                                            <option value=''>-- Pilih Penghasilan Ibu --</option>
                                            <option value='Kurang dari Rp 500.000'>Kurang dari Rp 500.000</option>
                                            <option value='Rp 500.000 - Rp 999.999'>Rp 500.000 - Rp 999.999</option>
                                            <option value='Rp 1000.000 - Rp 1.999.999'>Rp 1000.000 - Rp 1.999.999
                                            </option>
                                            <option value='Rp 2.000.000 - Rp 4.999.999'>Rp 2.000.000 - Rp 4.999.999
                                            </option>
                                            <option value='Rp 5.000.000 - Rp 20.000.000'>Rp 5.000.000 - Rp 20.000.000
                                            </option>
                                            <option value='Lebih dari Rp 20.000.000'>Lebih dari Rp 20.000.000</option>
                                            <option value='Tidak Berpenghasilan'>Tidak Berpenghasilan</option>
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
                                        <select class="selectpicker" name="pendidikanayah" required>
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
                                            <option value='Lainnya'>Lainnya</option>
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
                                        <select class="selectpicker" name="pendidikanibu" required>
                                            <option value=''>-- Pilih Pendidikan Ibu --</option>
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
                                            <option value='Lainnya'>Lainnya</option>
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
                                        <label><input type="radio" value="IPA" name="peminatan" class="i-checks"
                                                checked="">
                                            <i></i>IPA</label>
                                        <label><input type="radio" value="IPS" name="peminatan" class="i-checks">
                                            <i></i>IPS</label>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk">
                                    <h2>Pilih Jadwal Tes</h2>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    
                                    
                                    <!--PASTE DISINI UNTUK JADWAL
                                    
                                    
                                </div>
                            </div>-->
                        </div>
                        <ul class="breadcrumb">
                            <p align="center">Data ini diisikan dengan benar adanya untuk keperluan Pendaftaran Calon
                                Peserta Didik Baru di SMA Muhammadiyah 1 Taman
                                Tahun Pelajaran 2020/2021</p>
                            <div class="g-recaptcha" data-sitekey="6Lc0ocUUAAAAAM7rSZi2Ww8h-8e9imwihzfp73Xr"></div>
                            <div class="form-example-int mg-t-15">
                                <button type="submit" class="btn btn-success notika-btn-success" name="simpan"
                                    id="simpan">DAFTAR</button>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>