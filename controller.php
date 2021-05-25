<?php 
require('config.php');
header('Content-type: application/json');

if (isset($_POST['submit_daftar'])) {
	// data pendaftaran
	$desa_id = $_POST['desa_id'];
	$tggl_akad = $_POST['tggl_akad'];
	$waktu_akad = $_POST['waktu_akad'];
	$lokasi_nikah = $_POST['lokasi_nikah'];

	// data suami
	$warga_negara_sm = $_POST['warga_negara_sm'];
	$nik_suami = $_POST['nik_suami'];
	$nama_suami = $_POST['nama_suami'];
	$tempat_lahir_sm = $_POST['tempat_lahir_sm'];
	$tggl_lahir_sm = $_POST['tggl_lahir_sm'];
	$umur_suami = $_POST['umur_suami'];
	$alamat_suami = $_POST['alamat_suami'];
	$status_suami = $_POST['status_suami'];
	$agama_suami = $_POST['agama_suami'];
	$pekerjaan_suami = $_POST['pekerjaan_suami'];
	// $pas_foto_sm = $_POST['pas_foto_sm'];

	// data istri
	$warga_negara_is = $_POST['warga_negara_is'];
	$nik_istri = $_POST['nik_istri'];
	$nama_istri = $_POST['nama_istri'];
	$tempat_lahir_is = $_POST['tempat_lahir_is'];
	$tggl_lahir_is = $_POST['tggl_lahir_is'];
	$umur_istri = $_POST['umur_istri'];
	$alamat_istri = $_POST['alamat_istri'];
	$status_istri = $_POST['status_istri'];
	$agama_istri = $_POST['agama_istri'];
	$pekerjaan_istri = $_POST['pekerjaan_istri'];
	// $pas_foto_is = $_POST['pas_foto_is'];

	// data wali
	$nik_wali = $_POST['nik_wali'];
	$no_kk = $_POST['no_kk'];
	$nama_wali = $_POST['nama_wali'];
	$status_wali = $_POST['status_wali'];
	$agama_wali = $_POST['agama_wali'];
	$hubungan_wali = $_POST['hubungan_wali'];
	$tempat_lahir_wl = $_POST['tempat_lahir_wl'];
	$tggl_lahir_wl = $_POST['tggl_lahir_wl'];
	$umur_wali = $_POST['umur_wali'];
	$alamat_wali = $_POST['alamat_wali'];
	$no_telepon = $_POST['no_telepon'];
	$pekerjaan_wali = $_POST['pekerjaan_wali'];
	$bin = $_POST['bin'];

	setcookie('data_old', serialize($_POST), time()+(86400*30));
	echo json_encode($_POST);
}
?>