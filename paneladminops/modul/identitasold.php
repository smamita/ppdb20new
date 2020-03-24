<?php
session_start();
include "koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PPDB SMAM1TA 2020/2021</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include SmartWizard CSS -->
    <link href="dist/css/smart_wizard.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/pastel-stream.css" />

    <!-- Optional SmartWizard theme -->
    <link href="dist/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="container">
	<div class="row">
            <div class="col-lg-12">
                <div class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">PPDB SMAM1TA 2018/2019</a>
                    </div>
										<div class="navbar-collapse collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="pendaftaran.html">Beranda</a></li>
                            <li><a href="#">Alur Pendaftaran</a></li>
                            <li><a href="#">Panduan</a></li>
                            <li><a href="login-melengkapi-identitas.html">Login</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <br />
        <form action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
        <!-- SmartWizard html -->
        <div id="smartwizard" >
            <ul>
                <li><a href="#step-1">Langkah 1<br /><small>DATA DIRI CALON SISWA</small></a></li>
                <li><a href="#step-2">Langkah 2<br /><small>DATA DIRI ORANG TUA</small></a></li>
								<li><a href="#step-3">Langkah 3<br /><small>DATA DIRI WALI</small></a></li>
								<li><a href="#step-4">Langkah 4<br /><small>DATA NILAI RAPORT DAN HASIL UN SMP/MTs </small></a></li>
                <li><a href="#step-5">Langkah 5<br /><small>JADWAL TES AKADEMIK </small></a></li>
                <li><a href="#step-6">Langkah 6<br /><small>PERNYATAAN dan JADWAL TES AKADEMIK </small></a></li>
            </ul>

            <div>
                <div id="step-1">
                    <h2>DATA DIRI CALON SISWA</h2>
                    <div id="form-step-0" role="form" data-toggle="validator" >
												<div class="form-group" class="col-lg-4">
														<div>
																<input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor Pendaftar" required >
																<div class="help-block with-errors"></div>
														</div>
												</div>
												<div class="form-group" class="col-lg-4">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                            <div class="help-block with-errors"></div>
                        </div>
												<div class="form-group" class="col-lg-4">
															<div>
																<span class="help-block">Pilih Jenis Kelamin :</span>
																	<select class="form-control" name="jk" id="jk" required>
																			<option>-- Pilih Jenis Kelamin --</option>
																			<option>Laki - Laki</option>
																			<option>Perempuan</option>
																	</select>
																	<div class="help-block with-errors"></div>
															</div>
												</div>
												<div class="form-group" class="col-lg-4">
														<div>
																<input type="text" class="form-control" name="asal" id="email" placeholder="Asal Sekolah" required>
																<div class="help-block with-errors"></div>
														</div>
												</div>

                    </div>
										<div class="form-group" class="col-lg-4">
												<div>
													<span class="help-block">Peminatan yang Anda piih :</span>
														<select class="form-control" name="minat" id="minat" required>
																<option>-- Pilih Peminatan --</option>
																<option>Matematika dan Ilmu Pengetahuan Alam (MIPA)</option>
																<option>Ilmu Pengetahuan Sosial (IPS)</option>
														</select>
														<div class="help-block with-errors"></div>
												</div>
										</div>
										<div class="form-group" class="col-lg-4">
												<div>
														<select class="form-control" id="daftar" name="daftar" required>
																<option>-- Pilih Jalur Pendaftaran --</option>
																<option>Bidik Misi</option>
																<option>Prestasi</option>
																<option>Kerjasama Lembaga</option>
																<option>Reguler</option>
														</select>
												</div>
										</div>
										<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
														<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="tgllahir" id="email" placeholder="Tanggal Lahir" required>
														<div class="help-block with-errors"></div>
												</div>
										</div>
										<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="alamat" id="email" placeholder="Alamat Jalan" required>
														<div class="help-block with-errors"></div>
												</div>
										</div>
										<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="rt" id="email" placeholder="RT" required>
														<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="rw" id="email" placeholder="RW" required>
														<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="kode" id="email" placeholder="Kodepos" required>
														<div class="help-block with-errors"></div>
												</div>
										</div>
										<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="rt" id="email" placeholder="Dusun" required>
														<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="rw" id="email" placeholder="Desa / Kelurahan" required>
														<div class="help-block with-errors"></div>
												</div>
										</div>
										<div class="form-group" class="col-lg-4">
												<input type="email" class="form-control" name="email" id="email" placeholder="Alamat Email" required>
												<div class="help-block with-errors"></div>
										</div>
										<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="hptlp" id="email" placeholder="Nomor Telepon / HP yang bisa dihubungi" required>
														<div class="help-block with-errors"></div>
												</div>
										</div>
										<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="hptlp" id="email" placeholder="Anak ke" required>
														<div class="help-block with-errors"></div>
												</div>
										</div>
										<div class="form-group" class="col-lg-4">
												<div>
														<input type="text" class="form-control" name="hptlp" id="hptlp" placeholder="Jumlah Saudara Kandung" required>
														<div class="help-block with-errors"></div>
												</div>
										</div>

                </div>
                <div id="step-2">
                    <h2>Your Name</h2>
                    <div id="form-step-1" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div id="step-3">
                    <h2>Your Address</h2>
                    <div id="form-step-2" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Write your address..." required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
								<div id="step-4">
                    <h2>Your Name</h2>
                    <div id="form-step-3" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
								<div id="step-5">
                    <h2>Your Name</h2>
                    <div id="form-step-4" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" id="email" placeholder="Write your name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div id="step-6" class="">
                    <h2>Terms and Conditions</h2>
                    <p>
                        Terms and conditions: Keep your smile :)
                    </p>
                    <div id="form-step-5" role="form" data-toggle="validator">
                        <div class="form-group">
                            <label for="terms">I agree with the T&C</label>
                            <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </form>

    </div>

    <!-- Include jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Include jQuery Validator plugin -->
    <script type="text/javascript" src="js/validator.min.js"></script>


    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="dist/js/jquery.smartWizard.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Selesai')
                                             .addClass('btn btn-info')
                                             .on('click', function(){
                                                    if( !$(this).hasClass('disabled')){
                                                        var elmForm = $("#myForm");
                                                        if(elmForm){
                                                            elmForm.validator('validate');
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                alert('Maaf, masih ada data yang belum terisi');
                                                                return false;
                                                            }else{
                                                                alert('Selamat Data berhasil disimpan');
                                                                elmForm.submit();
                                                                return false;
                                                            }
                                                        }
                                                    }
                                                });
            var btnCancel = $('<button></button>').text('Batal')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){
                                                    $('#smartwizard').smartWizard("reset");
                                                    $('#myForm').find("input, textarea").val("");
                                                });
            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'dots',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });

            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);
                // stepDirection === 'forward' :- this condition allows to do the form validation
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                    }
                }
                return true;
            });

            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 5){
                    $('.btn-finish').removeClass('disabled');
                }else{
                    $('.btn-finish').addClass('disabled');
                }
            });

        });
    </script>
</body>
</html>
