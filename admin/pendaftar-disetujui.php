<?php  
require('template/header.php');
$response = null;
// Update Status
if (isset($_GET['proses'])) {
	$id = $_GET['id'];
	if ($_GET['proses'] == 'acc_pendaftar') $status = 'acc';
	else if ($_GET['proses'] == 'refuse_pendaftar') $status = 'refuse';

	$res = mysqli_query($conn, "UPDATE tb_pendaftar SET status='$status' WHERE id='$id'");
	if ($res) $response = 'success_accept';
	else $response = 'error';
}

$pendaftar = mysqli_query($conn, "SELECT * FROM tb_pendaftar WHERE status='acc'");
$penghulu = mysqli_query($conn, "SELECT * FROM tb_penghulu");
?>

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
						<li class="breadcrumb-item active">Input & Data Pendaftar</li>
						<li class="breadcrumb-item active">Pendaftar Disetujui</li>
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
							<div class="card-header">
								<h3>Data Pendaftar Disetujui</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
								<table id="dataTable" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="1">No</th>
											<th width="120">No Pendaftarn</th>
											<th>Tggl Pendaftaran</th>
											<th>Nama Suami</th>
											<th>Nama Istri</th>
											<th>Tggl Akad</th>
											<th width="120">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php $no=1; foreach ($pendaftar as $dta) { 
											$pendaftar_id = $dta['id'];
											$data_sm = mysqli_query($conn, "SELECT * FROM tb_data_suami WHERE pendaftar_id='$pendaftar_id'");
											$data_is = mysqli_query($conn, "SELECT * FROM tb_data_istri WHERE pendaftar_id='$pendaftar_id'");
											$dsm = mysqli_fetch_assoc($data_sm);
											$dis = mysqli_fetch_assoc($data_is);
											?>
											<tr>
												<td><?= $no ?></td>
												<td><?= $dta['no_pendaftarn'] ?></td>
												<td><?= date('d/m/Y', strtotime($dta['tanggal_daftar'])) ?></td>
												<td><?= $dsm['nama'] ?></td>
												<td><?= $dis['nama'] ?></td>
												<td><?= date('d/m/Y', strtotime($dta['tggl_akad'])).' '.$dta['waktu_akad'] ?></td>
												<td class="text-center">
													<a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-detail<?= $dta['id'] ?>" data-toggle1="tooltip" data-original-title="Detail Pendaftar"><i class="fa fa-list"></i></a>
													<a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-next<?= $dta['id'] ?>" data-toggle1="tooltip" data-original-title="Lanjutkan Pemeriksaan"><i class="fa fa-check"></i></a>
												</td>
											</tr>
											<?php $no=$no+1; 
										} ?>
									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<?php foreach ($pendaftar as $dta) { 
	$pendaftar_id = $dta['id'];
	$desa_id = $dta['desa_id'];

	$data_sm = mysqli_query($conn, "SELECT * FROM tb_data_suami WHERE pendaftar_id='$pendaftar_id'");
	$data_is = mysqli_query($conn, "SELECT * FROM tb_data_istri WHERE pendaftar_id='$pendaftar_id'");
	$data_wl = mysqli_query($conn, "SELECT * FROM tb_data_wali WHERE pendaftar_id='$pendaftar_id'");
	$data_desa = mysqli_query($conn, "SELECT * FROM tb_desa WHERE id='$desa_id'");
	$dsm = mysqli_fetch_assoc($data_sm);
	$dis = mysqli_fetch_assoc($data_is);
	$dwl = mysqli_fetch_assoc($data_wl);
	$des = mysqli_fetch_assoc($data_desa);
	?>
	<!-- MODAL DETAIL -->
	<div class="modal fade" tabindex="-1" role="dialog" id="modal-detail<?= $dta['id'] ?>">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Detail Data Pendaftar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body px-5">
					<!-- Data Pendaftar -->
					<h6><b><u>Data Pendaftaran</u></b></h6>
					<div class="row">
						<b class="col-sm-4">Nomor Pendaftaran</b>
						<span class="col-sm-8">: <?= $dta['no_pendaftarn'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Tanggal Pendaftaran</b>
						<span class="col-sm-8">: <?= date('d/m/Y', strtotime($dta['tanggal_daftar'])) ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Kelurahan/Desa</b>
						<span class="col-sm-8">: <?= $des['nama_desa'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Tempat Nikah</b>
						<span class="col-sm-8">: <?= $dta['tempat_nikah'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Tanggal Akad</b>
						<span class="col-sm-8">: <?= date('d/m/Y', strtotime($dta['tggl_akad'])).' '.$dta['waktu_akad'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Lokasi Nikah</b>
						<span class="col-sm-8">: <?= $dta['lokasi_nikah'] ?></span>
					</div>
					<hr>
					<!-- Data Calon Suami -->
					<h6 class="mt-4"><b><u>Data Calon Suami:</u></b></h6>
					<div class="row">
						<b class="col-sm-4">Warga Negara</b>
						<span class="col-sm-8">: <?= $dsm['warga_negara'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">NIK</b>
						<span class="col-sm-8">: <?= $dsm['nik'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Nama</b>
						<span class="col-sm-8">: <?= $dsm['nama'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Tempat Lahir</b>
						<span class="col-sm-8">: <?= $dsm['tempat_lahir'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Tanggal Lahir</b>
						<span class="col-sm-8">: <?= date('d/m/Y', strtotime($dsm['tggl_lahir'])) ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Umur</b>
						<span class="col-sm-8">: <?= $dsm['umur'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Alamat</b>
						<span class="col-sm-8">: <?= $dsm['alamat'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Status</b>
						<span class="col-sm-8">: <?= $dsm['status'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Agama</b>
						<span class="col-sm-8">: <?= $dsm['agama'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Pekerjaan</b>
						<span class="col-sm-8">: <?= $dsm['pekerjaan'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-12">Foto</b>
						<div class="col-sm-12">
							<img src="../img/pasfoto/suami/<?= $dsm['pas_foto'] ?>" height="100">
						</div>
					</div>
					<hr>
					<!-- Data Calon Istri -->
					<h6 class="mt-4"><b><u>Data Calon Istri:</u></b></h6>
					<div class="row">
						<b class="col-sm-4">Warga Negara</b>
						<span class="col-sm-8">: <?= $dis['warga_negara'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">NIK</b>
						<span class="col-sm-8">: <?= $dis['nik'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Nama</b>
						<span class="col-sm-8">: <?= $dis['nama'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Tempat Lahir</b>
						<span class="col-sm-8">: <?= $dis['tempat_lahir'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Tanggal Lahir</b>
						<span class="col-sm-8">: <?= date('d/m/Y', strtotime($dis['tggl_lahir'])) ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Umur</b>
						<span class="col-sm-8">: <?= $dis['umur'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Alamat</b>
						<span class="col-sm-8">: <?= $dis['alamat'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Status</b>
						<span class="col-sm-8">: <?= $dis['status'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Agama</b>
						<span class="col-sm-8">: <?= $dis['agama'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Pekerjaan</b>
						<span class="col-sm-8">: <?= $dis['pekerjaan'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-12">Foto</b>
						<div class="col-sm-12">
							<img src="../img/pasfoto/istri/<?= $dis['pas_foto'] ?>" height="100">
						</div>
					</div>
					<hr>
					<!-- Data Wali -->
					<h6 class="mt-4"><b><u>Data Wali:</u></b></h6>
					<div class="row">
						<b class="col-sm-4">NIK</b>
						<span class="col-sm-8">: <?= $dwl['nik'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">No KK</b>
						<span class="col-sm-8">: <?= $dwl['no_kk'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Nama</b>
						<span class="col-sm-8">: <?= $dwl['nama'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Status</b>
						<span class="col-sm-8">: <?= $dwl['status'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Agama</b>
						<span class="col-sm-8">: <?= $dwl['agama'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Hubungan</b>
						<span class="col-sm-8">: <?= $dwl['hubungan'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Tempat Lahir</b>
						<span class="col-sm-8">: <?= $dwl['tempat_lahir'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Tanggal Lahir</b>
						<span class="col-sm-8">: <?= date('d/m/Y', strtotime($dwl['tggl_lahir'])) ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Umur</b>
						<span class="col-sm-8">: <?= $dwl['umur'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Alamat</b>
						<span class="col-sm-8">: <?= $dwl['alamat'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">No Telepon</b>
						<span class="col-sm-8">: <?= $dwl['no_telepon'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">Pekerjaan</b>
						<span class="col-sm-8">: <?= $dwl['pekerjaan'] ?></span>
					</div>
					<div class="row">
						<b class="col-sm-4">BIN</b>
						<span class="col-sm-8">: <?= $dwl['bin'] ?></span>
					</div>
				</div>
				<div class="modal-footer bg-whitesmoke br">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL ACCEPT -->
	<div class="modal fade" tabindex="-1" role="dialog" id="modal-next<?= $dta['id'] ?>">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Lanjutkan Pemeriksaan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST">
					<div class="modal-body px-5">
						<h4>Data Orang Tua</h4>
						<ul class="nav nav-tabs tabs">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#home">Ayah Kandung</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#menu1">Ibu Kandung</a>
							</li>
						</ul>

						<div class="tab-content">
							<div id="home" class="tab-pane fade in active show pt-3">
								<div class="form-group row">
									<label class="col-sm-3">NIK Ayah</label>
									<div class="col-sm-6">
										<input type="number" class="form-control" name="nik_a" required autocomplete="off" placeholder="NIK Ayah" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Nama Ayah</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="nama_a" required autocomplete="off" placeholder="Nama Ayah" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Agama</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="agama_a" required autocomplete="off" placeholder="Agama" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Pekerjaan</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="pekerjaan_a" required autocomplete="off" placeholder="Pekerjaan" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Alamat</label>
									<div class="col-sm-6">
										<textarea type="text" class="form-control" name="alamat_a" required placeholder="Alamat"></textarea>
									</div>
								</div>
							</div>
							<div id="menu1" class="tab-pane fade">
								<div class="form-group row">
									<label class="col-sm-3">NIK Ibu</label>
									<div class="col-sm-6">
										<input type="number" class="form-control" name="nik_i" required autocomplete="off" placeholder="NIK Ibu" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Nama Ibu</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="nama_i" required autocomplete="off" placeholder="Nama Ibu" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Agama</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="agama_i" required autocomplete="off" placeholder="Agama" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Pekerjaan</label>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="pekerjaan_i" required autocomplete="off" placeholder="Pekerjaan" value="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-3">Alamat</label>
									<div class="col-sm-6">
										<textarea type="text" class="form-control" name="alamat_i" required placeholder="Alamat"></textarea>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<h4>Data Mas Kawin</h4>
						<div class="form-group row">
							<label class="col-sm-3">Jenis Mas Kawin</label>
							<div class="col-sm-6">
								<input type="number" class="form-control" name="jenis_mk" required autocomplete="off" placeholder="Jenis Mas Kawin" value="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3">Jumlah Mas Kawin</label>
							<div class="col-sm-6">
								<input type="number" class="form-control" name="jumlah_mk" required autocomplete="off" placeholder="Jumlah Mas Kawin" value="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3">Pembayaran</label>
							<div class="col-sm-6">
								<select class="form-control" name="pembayaran_mk" required>
									<option value="Tunai">Tunai</option>
									<option value="Cicil">Cicil</option>
								</select>
							</div>
						</div>
						<hr>
						<h4>PPN/Penghulu Yang Memeriksa Akad Nikah</h4>
						<div class="form-group row">
							<label class="col-sm-3">Penghulu</label>
							<div class="col-sm-6">
								<select class="form-control" name="pembayaran_mk" required>
									<option value="">--Penghulu--</option>
									<?php foreach ($penghulu as $pngh) { ?>
										<option value="<?= $pngh['id'] ?>"><?= $pngh['nama'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<hr>
						<button type="submit" name="set_pemeriksaan" class="btn btn-success mb-2">Simpan & Lanjutkan Pemeriksaan</button>
						<button type="button" class="btn btn-secondary mb-2" data-dismiss="modal">Tutup</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } 
require('template/footer.php');
?>

<script>
	$(document).ready(function() {
		$('#data-disetujui').addClass('active');
		$('#input-data-pendaftar').addClass('active');
		$('#input-data-pendaftar').parent('.nav-item').addClass('menu-open');
		<?php if ($response == 'success_accept') { ?>
			Swal.fire({
				icon: 'success',
				title: 'Proses Berhasil',
				text: 'Data pendaftar berhasil diproses',
				preConfirm: () => {
					window.location.href=window.location.href.split('?')[0];
				}
			});
		<?php } else if ($response == 'error') { ?>
			Swal.fire({
				icon: 'error',
				title: 'Terjadi Kesalahan',
				text: 'Terjadi kesalahan. Gagal memproses data',
				preConfirm: () => {
					window.location.href=window.location.href;
				}
			});
		<?php } ?>

		$('.print-surat').click(function(e) {
			e.preventDefault();
			var id = $(this).attr('data-id');
			$('#print-surat'+id).printArea();
		});
	});
</script>