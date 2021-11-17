<?php  
require('template/header.php');

$pendaftar = mysqli_query($conn, "SELECT * FROM tb_pendaftar ORDER BY id DESC");
?>
<link rel="stylesheet" href="dist/css/wizard.css">

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Admin SIMKAH Tallo</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="index.php">Admin</a></li>
						<li class="breadcrumb-item active">Input & Data Nikah</li>
						<li class="breadcrumb-item active">Tambah Data Nikah</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="card card-solid">
			<div class="card-body pb-0">
				<div class="row m-b-30">
					<div class="col-12">
						<div class="card">
							<div class="card-header row justify-content-center">
								<h3 class="col-sm-10">Tambah Data Nikah</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<div class="row justify-content-center">
									<div class="col-md-10">
										<form action="" method="post" class="f1">
											<div class="f1-steps">
												<div class="f1-progress">
													<div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 25%;"></div>
												</div>
												<div class="f1-step active text-center">
													<div class="f1-step-icon"><i class="fa fa-home"></i></div>
													<p>Tempat Nikah</p>
												</div>
												<div class="f1-step text-center">
													<div class="f1-step-icon"><i class="fa fa-male fa-lg"></i></div>
													<p>Data Suami</p>
												</div>
												<div class="f1-step text-center">
													<div class="f1-step-icon"><i class="fa fa-female fa-lg"></i></div>
													<p>Data Istri</p>
												</div>
												<div class="f1-step text-center">
													<div class="f1-step-icon"><i class="fa fa-user"></i></div>
													<p>Data Wali</p>
												</div>
											</div>
											<!-- step 1 -->
											<fieldset>
												<h4>Tempat Nikah</h4>
												<div class="form-group">
													<label>Kelurahan/Desa</label>
													<select class="form-control" id="desa_id" name="desa_id">
														<option value="">--Pilih Desa/Kelurahan--</option>
														<?php 
														$desa = mysqli_query($conn, "SELECT * FROM tb_desa");
														foreach ($desa as $dsa) { ?>
															<option value="<?= $dsa['id'] ?>"><?= $dsa['nama_desa'] ?></option>
														<?php } ?>
													</select>
												</div>
												<div class="form-group">
													<label>Nikah di</label>
													<select class="form-control" id="tempat_nikah" name="tempat_nikah">
														<option value="Di KUA">Di KUA</option>
														<option value="Di KUA">Di Luar KUA</option>
													</select>
												</div>
												<div class="form-group">
													<label>Tanggal Akad Nikah</label>   
													<input class="form-control" type="date" id="tggl_akad" name="tggl_akad">
												</div>
												<div class="form-group">
													<label>Alamat Lokasi Akad Nikah</label>
													<textarea class="form-control" rows="3" placeholder="Alamat Lokasi Akad Nikah" name="lokasi_nikah"></textarea>
												</div>
												<div class="f1-buttons">
													<button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
												</div>
											</fieldset>
											<!-- step 2 -->
											<fieldset>
												<h4>Data Suami</h4>
												<div class="form-group">
													<label>Warganegara</label>
													<select name="warga_negara_sm" class="form-control validate-select required-entry" id="warga_negara_sm">
														<option value="0" style="display: none;">Pilih Warganegara</option>
														<option value="WNI">WNI</option>
														<option value="WNA">WNA</option>
													</select>
												</div>
												<div class="form-group">
													<label>Nik Calon Suami</label>
													<input class="form-control input-lg" id="nik_suami" name="nik_suami" type="text" placeholder="Nik Calon Suami">
												</div>
												<div class="form-group">
													<label>Nama Calon Suami</label>
													<input class="form-control input-lg" type="text" placeholder="Nama Calon Suami" name="nama_suami" id="nama_suami">
												</div>
												<div class="form-group">
													<label>Tempat Lahir</label>
													<input class="form-control input-lg" type="text" placeholder="Tempat Lahir" id="tempat_lahir_sm" name="tempat_lahir_sm">
												</div>
												<div class="find-umur">
													<div class="form-group">
														<label>Tanggal Lahir</label>
														<input class="form-control input-lg umur" type="date" name="tggl_lahir_sm" id="tggl_lahir_sm">
													</div>
													<div class="form-group">
														<label>Umur</label>
														<input type="text" id="umur_suami" class="text-primary form-control input-lg result" placeholder="Umur" name="umur_suami" id="umur_suami">
													</div>
												</div>
												<div class="form-group">
													<label>Alamat</label>
													<textarea class="form-control" rows="3" placeholder="Alamat" name="alamat_suami" id="alamat_suami"></textarea>
												</div>
												<div class="form-group">
													<label>Status</label>
													<select class="form-control  input-lg validate-select required-entry" defaultvalue="" name="status_suami" id="status_suami">
														<option value="" style="display: none;">Pilih Status</option>
														<option value="Beristri">Beristri</option>
														<option value="Jejaka">Jejaka</option>
														<option value="Cerai Mati">Cerai Mati</option>
														<option value="Cerai Hidup">Cerai Hidup</option>
													</select>
												</div>
												<div class="form-group">
													<label>Agama</label>
													<input class="form-control input-lg" id="agama_suami" type="text" placeholder="Agama" value="Islam" readonly="" name="agama_suami">
												</div>
												<div class="form-group">
													<label>Pekerjaan</label>
													<input class="form-control input-lg" type="text" placeholder="Pekerjaan" id="pekerjaan_suami" name="pekerjaan_suami">
												</div>
												<!-- <div style="margin-bottom: 8px;">
													<img src="img/avatar.png" style="border: dashed 2px; width: 300px;" class="thumn-sm">
												</div>
												<input type="file" name="pas_foto_sm" style="display: none;" id="pas_foto_sm">
												<label class="btn btn-primary" for="pas_foto_sm"><i class="fa fa-upload"></i> Upload Foto</label>
												<h6><i>* Silahkan Upload Pas Foto Ukuran 2x3 Dengan Latar Belakang Warna Biru</i></h6> -->
												<br>
												<h4 class="mt-2">Data Orang Tua Suami</h4>
												<div class="form-group">
													<label>Nama Ayah Suami</label>
													<input class="form-control input-lg" type="text" placeholder="Nama Ayah Suami" id="pekerjaan_suami" name="pekerjaan_suami">
												</div>
												<div class="form-group">
													<label>Nama Ibu Suami</label>
													<input class="form-control input-lg" type="text" placeholder="Nama Ibu Suami" id="pekerjaan_suami" name="pekerjaan_suami">
												</div>
												<div class="f1-buttons">
													<button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
													<button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
												</div>
											</fieldset>
											<!-- step 3 -->
											<fieldset>
												<h4>Buat Akun</h4>
												<div class="form-group">
													<label>Warganegara</label>
													<select name="warga_negara_sm" class="form-control validate-select required-entry" id="warga_negara_sm">
														<option value="0" style="display: none;">Pilih Warganegara</option>
														<option value="WNI">WNI</option>
														<option value="WNA">WNA</option>
													</select>
												</div>
												<div class="form-group">
													<label>Password</label>
													<input type="password" name="password" placeholder="Password" class="form-control">
												</div>
												<div class="form-group">
													<div class="col-xs-12 col-md-13">
														<div class="form-group">
															<label>Nik Calon Suami</label>
															<input class="form-control" id="nik_suami" name="nik_suami" type="text" placeholder="Nik Calon Suami">
														</div>
													</div>
												</div>
												<div class="f1-buttons">
													<button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
													<button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
												</div>
											</fieldset>
											<!-- step 4 -->
											<fieldset>
												<h4>Sosial Media</h4>
												<div class="form-group">
													<label>Facebook</label>
													<input type="text" name="facebook" placeholder="Facebook" class="form-control">
												</div>
												<div class="form-group">
													<label>Twitter</label>
													<input type="text" name="twitter" placeholder="Twitter" class="form-control">
												</div>
												<div class="form-group">
													<label>Google plus</label>
													<input type="text" name="google_plus" placeholder="Google plus" class="form-control">
												</div>
												<div class="f1-buttons">
													<button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
													<button type="submit" class="btn btn-primary btn-submit"><i class="fa fa-save"></i> Submit</button>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php  
require('template/footer.php');
?>
<script src="dist/js/wizard.js"></script>
<script>
	$(document).ready(function() {
		$('#tambah-data-nikah').addClass('active');
		$('#input-data-pendaftar').addClass('active');
		$('#input-data-pendaftar').parent('.nav-item').addClass('menu-open');

		window.onload=function() {
			$('.umur').on('change', function() {
				var dob = new Date(this.value);
				var today = new Date();
				var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
            // $('.result').val(age);
            $(this).parents('.find-umur').find('.result').val(age);
         });
		}

		$('#pas_foto_sm').change(function(e) {
			var pas_foto_sm = $(this).prop('files')[0];
			var check = 0;

			var ext = ['image/jpeg', 'image/png', 'image/bmp'];

			$.each(ext, function(key, val) {
				if (pas_foto_sm.type == val) check = check + 1;
			});

			if (check == 1) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('.thumn-sm').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			} else {
				alert('Format file tidak dibolehkan, pilih file lain');
				$(this).val('');
				return;
			}
		});

		$('#pas_foto_is').change(function(e) {
			var pas_foto_is = $(this).prop('files')[0];
			var check = 0;

			var ext = ['image/jpeg', 'image/png', 'image/bmp'];

			$.each(ext, function(key, val) {
				if (pas_foto_is.type == val) check = check + 1;
			});

			if (check == 1) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('.thumn-is').attr('src', e.target.result);
				}
				reader.readAsDataURL(this.files[0]);
			} else {
				alert('Format file tidak dibolehkan, pilih file lain');
				$(this).val('');
				return;
			}
		});
	});
</script>