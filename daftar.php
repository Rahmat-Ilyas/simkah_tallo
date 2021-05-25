<?php  
require('layout/header.php');
?>  


<div style="padding-top: 70px">
    <div class="container panel" id="myWizard" style="">
        <div class="row" style="padding-top: 15px">
            <div class="pull-left">
                <img src="img/logo.png" alt="" height="100">
            </div>
            <div class="pull-left" style="padding-top: 25px">
                <h4>DIREKTORAT JENDERAL BIMBINGAN MASYARAKAT ISLAM</h4><h5>KEMENTERIAN AGAMA REPUBLIK INDONESIA</h5>
            </div>
            <!-- <div class="pull-right">
                <img src="img/logo.png" alt="" height="100">
            </div>
            <div class="pull-right" style="padding-top: 30px">
                <h4>DIREKTORAT JENDERAL BIMBINGAN MASYARAKAT ISLAM<br>KEMENTERIAN AGAMA REPUBLIK INDONESIA</h4>
            </div> -->
        </div>
        <hr>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 35%;">
                Step 1 of 3
            </div>
        </div>
        <div class="navbar">
            <div class="navbar-inner">
                <ul class="nav nav-pills nav-wizard">
                    <li class="active">
                        <a class="tab-head-this hidden-xs tab-click" style="cursor: not-allowed;" href="#" data-toggle="tab" data-step="1" disabled>1. Pilih Kelurahan/Desa dan Jadwal Akad</a>
                        <a class="tab-head-this visible-xs" href="#step1" data-toggle="tab" data-step="1">1.</a>
                        <div class="nav-arrow"></div>
                    </li>
                    <li class="">
                        <div class="nav-wedge"></div>
                        <a class="tab-head-this hidden-xs tab-click" style="cursor: not-allowed;" href="#" data-toggle="tab" data-step="2">2. Isi Form Pendaftaran</a>
                        <a class="tab-head-this visible-xs" href="#step2" data-toggle="tab" data-step="2">2.</a>
                        <div class="nav-arrow"></div>
                    </li>
                    <li class="">
                        <div class="nav-wedge"></div>
                        <a class="tab-head-this hidden-xs tab-click" style="cursor: not-allowed;" href="#" data-toggle="tab" data-step="3">3. Bukti Pendaftaran</a>
                        <a class="tab-head-this visible-xs" href="#step3" data-toggle="tab" data-step="3">3.</a>
                    </li>
                </ul>
            </div>
        </div>
        <form id="formDaftar">
            <div class="tab-content">
                <!-- step 1 -->
                <div class="tab-pane fade in active" id="step1">
                    <h3>1. Pilih KUA tempat dimana akan dilaksanakannya Akad Nikah :</h3><br>
                    <div class="well">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label>Kelurahan/Desa</label>
                                    <select class="form-control  input-lg validate-select required-entry" id="desa_id" name="desa_id">
                                        <option value="">--Pilih Desa/Kelurahan--</option>
                                        <?php 
                                        $desa = mysqli_query($conn, "SELECT * FROM tb_desa");
                                        foreach ($desa as $dsa) { ?>
                                            <option value="<?= $dsa['id'] ?>"><?= $dsa['nama_desa'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label>Nikah di</label>
                                    <select class="form-control  input-lg validate-select required-entry" id="tempat_nikah" name="tempat_nikah">
                                        <option value="Di KUA">Di KUA</option>
                                        <option value="Di KUA">Di Luar KUA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Akad Nikah</label>   
                                    <input class="form-control input-lg" type="date" id="tggl_akad" name="tggl_akad">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Waktu Akad Nikah</label>
                                    <input class="form-control input-lg" type="time" id="waktu_akad" name="waktu_akad">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-13">
                                <div class="form-group">
                                    <label>Alamat Lokasi Akad Nikah</label>
                                    <textarea class="form-control" rows="3" placeholder="Alamat Lokasi Akad Nikah" name="lokasi_nikah" id="lokasi_nikah"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-xs-12 col-md-13">
                                <div class="form-group">
                                    <label>Email Pendaftaran</label>
                                    <input class="form-control input-lg" type="email" placeholder="Email Pendaftaran" id="email_pendaftar" name="email_pendaftar">
                                </div>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block next" type="submit">Selanjutnya&nbsp;<i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end step 1 -->

                <!-- step 2 -->
                <div class="tab-pane fade" id="step2">
                    <h3>2. Isi Form Pendaftaran</h3><br>
                    <div class="well">
                        <div>
                            <div class="show-on-scroll">
                                <h4>Isi Data</h4>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#suami" aria-controls="suami" role="tab" data-toggle="tab">Calon Suami</a></li>
                                    <li role="presentation"><a href="#istri" aria-controls="istri" role="tab" data-toggle="tab">Calon Istri</a></li>
                                    <li role="presentation"><a href="#wali" aria-controls="wali" role="tab" data-toggle="tab">Wali Nikah</a></li>
                                    <li role="presentation"><a href="#dokument" aria-controls="dokument" role="tab" data-toggle="tab">Checklist Dokument</a></li>
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab-content"><br>
                                <!-- data suami -->
                                <div role="tabpanel" class="tab-pane active" id="suami">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label>Warganegara</label>
                                                <select name="warga_negara_sm" class="form-control  input-lg validate-select required-entry" id="warga_negara_sm">
                                                    <option value="0" style="display: none;">Pilih Warganegara</option>
                                                    <option value="WNI">WNI</option>
                                                    <option value="WNA">WNA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Nik Calon Suami</label>
                                                <input class="form-control input-lg" id="nik_suami" name="nik_suami" type="text" placeholder="Nik Calon Suami">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Nama Calon Suami</label>
                                                <input class="form-control input-lg" type="text" placeholder="Nama Calon Suami" name="nama_suami" id="nama_suami">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input class="form-control input-lg" type="text" placeholder="Tempat Lahir" id="tempat_lahir_sm" name="tempat_lahir_sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13 find-umur">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input class="form-control input-lg umur" type="date" name="tggl_lahir_sm" id="tggl_lahir_sm">
                                            </div>
                                            <div class="form-group">
                                                <label>Umur</label>
                                                <input type="text" id="umur_suami" class="text-primary form-control input-lg result" placeholder="Umur" name="umur_suami" id="umur_suami">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat_suami" id="alamat_suami"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
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
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input class="form-control input-lg" id="agama_suami" type="text" placeholder="Agama" value="Islam" readonly="" name="agama_suami">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input class="form-control input-lg" type="text" placeholder="Pekerjaan" id="pekerjaan_suami" name="pekerjaan_suami">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <td colspan="3">
                                            <div style="margin-bottom: 8px;">
                                                <img src="img/avatar.png" style="border: dashed 2px; width: 300px;" class="thumn-sm">
                                            </div>
                                            <input type="file" name="pas_foto_sm" style="display: none;" id="pas_foto_sm">
                                            <label class="btn btn-primary" for="pas_foto_sm"><i class="fa fa-upload"></i> Upload Foto</label>
                                            <h6><i>* Silahkan Upload Pas Foto Ukuran 2x3 Dengan Latar Belakang Warna Biru</i></h6>
                                        </td>
                                    </div>
                                </div>

                                <!-- data istri -->
                                <div role="tabpanel" class="tab-pane" id="istri">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label>Warganegara</label>
                                                <select name="warga_negara_is" class="form-control  input-lg validate-select required-entry" id="warga_negara_is">
                                                    <option value="0" style="display: none;">Pilih Warganegara</option>
                                                    <option value="WNI">WNI</option>
                                                    <option value="WNA">WNA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Nik Calon Istri</label>
                                                <input class="form-control input-lg" type="text" placeholder="Nik Calon Istri" name="nik_istri" id="nik_istri">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Nama Calon Istri</label>
                                                <input class="form-control input-lg" type="text" placeholder="Nama Calon Istri" name="nama_istri" id="nama_istri">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input class="form-control input-lg" type="text" placeholder="Tempat Lahir" name="tempat_lahir_is" id="tempat_lahir_is">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13 find-umur">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input class="form-control input-lg umur" type="date" name="tggl_lahir_is" id="tggl_lahir_is">
                                                <!-- <button class="btn btn-primary" onclick="getAge();">Hitung</button> -->
                                                <!-- <h4>Umur: <span id="result" class="text-primary form-control input-lg"></span></h4> -->
                                            </div>
                                            <div class="form-group">
                                                <label>Umur</label>
                                                <input type="text" class="text-primary form-control input-lg result" placeholder="Umur" name="umur_istri" id="umur_istri">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat_istri" id="alamat_istri"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control  input-lg validate-select required-entry" defaultvalue="" name="status_istri" id="status_istri">
                                                    <option value="" style="display: none;">Pilih Status</option>
                                                    <option value="Perawan">Perawan</option>
                                                    <option value="Cerai Mati">Cerai Mati</option>
                                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input class="form-control input-lg" id="agama_istri" type="text" placeholder="Agama" value="Islam" readonly="" name="agama_istri">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input class="form-control input-lg" type="text" placeholder="Pekerjaan" id="pekerjaan_istri" name="pekerjaan_istri">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <td colspan="3">
                                            <div style="margin-bottom: 8px;">
                                                <img src="img/avatar.png" style="border: dashed 2px; width: 300px;" class="thumn-is">
                                            </div>
                                            <input type="file" name="pas_foto_is" style="display: none;" id="pas_foto_is">
                                            <label class="btn btn-primary" for="pas_foto_is"><i class="fa fa-upload"></i> Upload Foto</label>
                                            <h6><i>* Silahkan Upload Pas Foto Ukuran 2x3 Dengan Latar Belakang Warna Biru</i></h6>
                                        </td>
                                    </div>
                                </div>

                                <!-- data wali -->
                                <div role="tabpanel" class="tab-pane" id="wali">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Nik Wali</label>
                                                <input class="form-control input-lg" type="text" placeholder="Nik Wali" name="nik_wali" id="nik_wali">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Nomor Kartu Keluarga</label>
                                                <input class="form-control input-lg" type="text" placeholder="Nomor Kartu Keluarga" name="no_kk" id="no_kk">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Nama Wali</label>
                                                <input class="form-control input-lg" type="text" placeholder="Nama Wali" name="nama_wali" id="nama_wali">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label>Status Wali</label>
                                                <select name="status_wali" class="form-control  input-lg validate-select required-entry" id="status_wali">
                                                    <option value="" style="display: none;">Pilih Satatus</option>
                                                    <option value="Nasabah">Nasabah</option>
                                                    <option value="Hakim">Hakim</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input class="form-control input-lg" id="agama_wali" type="text" placeholder="Agama" name="agama_wali" readonly="" value="Islam">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Hubungan Wali</label>
                                                <input class="form-control input-lg" type="text" placeholder="Hubungan Wali" name="hubungan_wali" id="hubungan_wali">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input class="form-control input-lg" type="text" placeholder="Tempat Lahir" id="tempat_lahir_wl" name="tempat_lahir_wl">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13 find-umur">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input class="form-control input-lg umur" type="date" name="tggl_lahir_wl" id="tggl_lahir_wl">
                                                <!-- <button class="btn btn-primary" onclick="getAge();">Hitung</button> -->
                                                <!-- <h4>Umur: <span id="result" class="text-primary form-control input-lg"></span></h4> -->
                                            </div>
                                            <div class="form-group">
                                                <label>Umur</label>
                                                <input type="text" id="umur_wali" class="text-primary form-control input-lg result" name="umur_wali" placeholder="Umur">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat_wali" id="alamat_wali"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <input class="form-control input-lg" type="number" placeholder="Nomor Telepon" id="no_telepon" name="no_telepon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <label>Pekerjaan</label>
                                                <input type="text" id="pekerjaan_wali" class="form-control input-lg" name="pekerjaan_wali" placeholder="Pekerjaan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label>Bin</label>
                                                <input class="form-control input-lg" type="text" placeholder="Bin" name="bin" id="bin">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- checklist Dokument -->
                                <div role="tabpanel" class="tab-pane" id="dokument">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-13">
                                            <div class="form-group">
                                                <label for=""><strong>Dokumen Yang Harus Dibawa</strong></label>
                                                <br><br>
                                                <!-- dokumen suami -->
                                                <div class="row col-xs-11 col-md-12" style="margin-bottom: 15px;">
                                                    <div class="col-md-6">
                                                        <b><u>Persyaratan Dokumen Suami</u></b>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Keterangan Untuk Nikah (Didapat dari Kelurahan)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Izin Orang Tua (Jika calon pengantin umumnya dibawah 21 tahun)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Dispensasi Pengadilan Agama Bagi Catin Berusia dibawah 19 tahun</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Akta Cerai (Jika calon pengantin sudah cerai)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Izin Komandan (Jika calon pengantin TNI atau POLRI)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Akta Kematian (Jika calon pengantin duda/janda ditinggal mati)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Izin Kedutaan Bagi WNA</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div><br>
                                                <!-- dokumen istri -->
                                                <div class="row col-xs-11 col-md-12" style="margin-bottom: 12px; margin-top: 15px;">
                                                    <div class="col-md-6">
                                                        <b><u>Persyaratan Dokumen Istri</u></b>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Keterangan Untuk Nikah (Didapat dari Kelurahan)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Izin Orang Tua (Jika calon pengantin umumnya dibawah 21 tahun)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Dispensasi Pengadilan Agama Bagi Catin Berusia dibawah 19 tahun</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Akta Cerai (Jika calon pengantin sudah cerai)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Izin Komandan (Jika calon pengantin TNI atau POLRI)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Akta Kematian (Jika calon pengantin duda/janda ditinggal mati)</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="col-md-6">
                                                        <p>Surat Izin Kedutaan Bagi WNA</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="checkbox" disabled checked name="" class="pull-right" value="ya" onclick="">
                                                    </div>
                                                </div><br>
                                                <div class="row col-xs-11 col-md-12">
                                                    <div class="checkbox col-md-12" disabled checked>
                                                        <label>
                                                            <b><input type="checkbox" id="cek-dokumen">  Apakah anda yakin data yang diisikan Benar dan Valid ?</b>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="btn-group btn-group-justified" role="group" aria-label="">
                                <div class="btn-group btn-group-lg" role="group" aria-label="">
                                    <button class="btn btn-default back" type="button"><i class="fa fa-arrow-left"></i>&nbsp;Kembali</span></button>
                                </div>
                                <div class="btn-group btn-group-lg" role="group" aria-label="">
                                    <input type="hidden"name="submit_daftar" value="true">
                                    <button class="btn btn-success btn-lg btn-block next" type="submit">Mendaftar&nbsp;<i class="fa fa-save"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end step 2 -->

                <!-- step 3 -->
                <div class="tab-pane fade" id="step3">
                    <div class="row">
                        <div class="panel panel-default credit-card-box">
                            <div class="panel-heading display-table">
                                <div class="row display-tr">
                                    <h3 class="panel-title display-td">Payment Details</h3>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="btn-group btn-group-justified" role="group" aria-label="">
                                    <div class="btn-group btn-group-lg" role="group" aria-label="">
                                        <a href="index.php" class="btn btn-default" role="button"><i class="fa fa-home"></i>&nbsp; Beranda</a>
                                    </div>
                                    <div class="btn-group btn-group-lg" role="group" aria-label="">
                                        <button class="btn btn-primary btn-lg btn-success next" type="button">Cetak Bukti Pendaftaran &nbsp;<i class="fa fa-print"></i></button>
                                    </div>
                                </div>
                                <div class="row" style="display:none;">
                                    <div class="col-xs-12">
                                        <p class="payment-errors"></p>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                    </div>
                </div>
                <!-- end step 3 -->
            </div>
        </form>
    </div>
</div>

<div id="push"></div>

<div id="loading" hidden="">
    <span class="loader" hidden=""></span>
    <div class="textLoader">
        <center>
            <b>Sedang Diprose... </b>
        </center>
    </div>
</div>

<?php
require('layout/footer.php');

// var_dump(unserialize($_COOKIE['data_old']));
?> 
<script>
    $(document).ready(function() {
        $('#info_daftar').children('a').attr('href', 'index.php#info_pendaftaran');
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

        $(window).scroll(function(e) {
            var winscroll = $(this).scrollTop();
            if (winscroll >= 420) $('.show-on-scroll').addClass('well style-on-scroll');
            else $('.show-on-scroll').removeClass('well style-on-scroll');
        });

        $('.show-on-scroll').find('li').click(function(event) {
            var winscroll = $(window).scrollTop();
            if (winscroll >= 420) $(window).scrollTop(364);
        });
    })
</script>                      