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
        <div class="tab-content">
            <!-- step 1 -->
            <div class="tab-pane fade in active" id="step1">
                <h3>1. Pilih KUA tempat dimana akan dilaksanakannya Akad Nikah :</h3><br>
                <div class="well">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <label>Kelurahan/Desa</label>
                                <select name="#" class="form-control  input-lg validate-select required-entry" id="desa_id" name="desa_id">
                                    <option value="">--Pilih Desa/Kelurahan--</option>
                                    <?php 
                                    $desa = mysqli_query($conn, "SELECT * FROM tb_desa");
                                    foreach ($desa as $dsa) { ?>
                                        <option value="<?= $dsa['nama_desa'] ?>"><?= $dsa['nama_desa'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <label>Nikah di</label>
                                <select name="#" class="form-control  input-lg validate-select required-entry" id="tempat_nikah" name="tempat_nikah">
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

                    <h4>Isi Data</h4>
                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#suami" aria-controls="suami" role="tab" data-toggle="tab">Calon Suami</a></li>
                            <li role="presentation"><a href="#istri" aria-controls="istri" role="tab" data-toggle="tab">Calon Istri</a></li>
                            <li role="presentation"><a href="#wali" aria-controls="wali" role="tab" data-toggle="tab">Wali Nikah</a></li>
                            <li role="presentation"><a href="#dokument" aria-controls="dokument" role="tab" data-toggle="tab">Checklist Dokument</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content"><br>

                            <!-- data suami -->
                            <div role="tabpanel" class="tab-pane active" id="suami">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label>Warganegara</label>
                                            <select name="#" class="form-control  input-lg validate-select required-entry" defaultvalue="">
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
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control input-lg umur" type="date" name="tggl_lahir_sm" id="tggl_lahir_sm">
                                        </div>
                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input type="text" id="result" class="text-primary form-control input-lg result" placeholder="Umur" name="umur_suami" id=" umur_suami">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="#" class="form-control  input-lg validate-select required-entry" defaultvalue="" name="status_suami" id="status_suami">
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
                                            <input class="form-control input-lg" id="disabledInput" type="text" placeholder="Islam" readonly="" name="agama_suami">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Nomor Hp</label>
                                            <input class="form-control input-lg" id="" type="number" placeholder="Nomor Hp" id="no_telepon_sm" name="no_telepon_sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control input-lg" id="" type="email" placeholder="Email" id="email_suami" name="email_suami">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input class="form-control input-lg" id="" type="text" placeholder="Pekerjaan" id="pekerjaan_suami" name="pekerjaan_suami">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <td colspan="3">
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
                                            <select name="#" class="form-control  input-lg validate-select required-entry" defaultvalue="">
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
                                            <input class="form-control input-lg" type="text" placeholder="Search NIk">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Nama Calon Istri</label>
                                            <input class="form-control input-lg" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control input-lg" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control input-lg umur" type="date" >
                                            <!-- <button class="btn btn-primary" onclick="getAge();">Hitung</button> -->
                                            <!-- <h4>Umur: <span id="result" class="text-primary form-control input-lg"></span></h4> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input type="text" id="result" class="text-primary form-control input-lg result">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="#" class="form-control  input-lg validate-select required-entry" defaultvalue="">
                                                <option value="0" style="display: none;">Pilih Status</option>
                                                <option value="bersuami">Bersuami</option>
                                                <option value="perewan">Perawan</option>
                                                <option value="cerai_mati">Cerai Mati</option>
                                                <option value="cerai_hidup">Cerai Hidup</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input class="form-control input-lg" id="disabledInput" type="text" placeholder="Islam" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Nomor Hp</label>
                                            <input class="form-control input-lg" id="" type="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control input-lg" id="" type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <select name="#" class="form-control  input-lg validate-select required-entry" defaultvalue="">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <td colspan="3">
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
                                            <input class="form-control input-lg" type="text" placeholder="Search NIK">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Nomor Kartu Keluarga</label>
                                            <input class="form-control input-lg" type="text" placeholder="Search KK">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label>Status Wali</label>
                                            <select name="#" class="form-control  input-lg validate-select required-entry" defaultvalue="">
                                                <option value="0" style="display: none;"></option>
                                                <option value="nasabah">Nasabah</option>
                                                <option value="hakim">Hakim</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Hubungan wali</label>
                                            <input class="form-control input-lg" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Nama Wali</label>
                                            <input class="form-control input-lg" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control input-lg" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control input-lg umur" type="date" >
                                            <!-- <button class="btn btn-primary" onclick="getAge();">Hitung</button> -->
                                            <!-- <h4>Umur: <span id="result" class="text-primary form-control input-lg"></span></h4> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input type="text" id="result" class="text-primary form-control input-lg result">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <select name="#" class="form-control  input-lg validate-select required-entry" defaultvalue="">
                                                <option value="0" style="Belum/Tidak Bekerja"></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>No HP</label>
                                            <input class="form-control input-lg" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Bin</label>
                                            <input class="form-control input-lg" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-md-13">
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input class="form-control input-lg" id="disabledInput" type="text" placeholder="Islam" disabled>
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
                                            <div>
                                                <div class="col-md-6">
                                                    <p>Persyaratan Dokumen Suami</p>
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Keterangan Untuk Nikah (Didapat dari Kelurahan)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Izin Orang Tua (Jika calon pengantin umumnya dibawah 21 tahun)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Dispensasi Pengadilan Agama Bagi Catin Berusia dibawah 19 tahun</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Akta Cerai (Jika calon pengantin sudah cerai)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Izin Komandan (Jika calon pengantin TNI atau POLRI)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Akta Kematian (Jika calon pengantin duda/janda ditinggal mati)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Izin Kedutaan Bagi WNA</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div><br>  
                                            <!-- dokumen istri -->
                                            <div>
                                                <div class="col-md-6">
                                                    <p>Persyaratan Dokumen Istri</p>
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Keterangan Untuk Nikah (Didapat dari Kelurahan)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Izin Orang Tua (Jika calon pengantin umumnya dibawah 21 tahun)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Dispensasi Pengadilan Agama Bagi Catin Berusia dibawah 19 tahun</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Akta Cerai (Jika calon pengantin sudah cerai)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Izin Komandan (Jika calon pengantin TNI atau POLRI)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Akta Kematian (Jika calon pengantin duda/janda ditinggal mati)</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="col-md-6">
                                                    <label>Surat Izin Kedutaan Bagi WNA</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" disabled checked name="" id="" class="pull-right" value="ya" onclick="">
                                                </div>
                                            </div><br>
                                            <div class="row col-xs-11 col-md-12">
                                                <div class="checkbox" disabled checked>
                                                    <label>
                                                      <b><input type="checkbox">  Apakah anda yakin data yang diisikan Benar dan Valid ?</b>
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
                        <form role="form" id="payment-form">
                                    <!-- <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="cardNumber">CARD NUMBER</label>
                                                <div class="input-group">
                                                    <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required="" autofocus="">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-credit-card"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 col-md-7">
                                            <div class="form-group">
                                                <label for="cardExpiry">
                                                    <span class="hidden-xs">EXPIRATION</span>
                                                    <span class="visible-xs-inline">EXP</span> DATE
                                                </label>
                                                <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required="">
                                            </div>
                                        </div>
                                        <div class="col-xs-5 col-md-5 pull-right">
                                            <div class="form-group">
                                                <label for="cardCVC">CV CODE</label>
                                                <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required="">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="btn-group btn-group-justified" role="group" aria-label="">
                                        <div class="btn-group btn-group-lg" role="group" aria-label="">
                                            <a href="index.php" class="btn btn-default" type="button"><i class="fa fa-home"></i>&nbsp; Beranda</a>
                                        </div>
                                        <div class="btn-group btn-group-lg" role="group" aria-label="">
                                            <button class="btn btn-primary btn-lg btn-success next" type="submit">Cetak Bukti Pendaftaran &nbsp;<i class="fa fa-print"></i></button>
                                        </div>
                                    </div>
                                    <div class="row" style="display:none;">
                                        <div class="col-xs-12">
                                            <p class="payment-errors"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                   
                    </div>
                </div>
                <!-- end step 3 -->
            </div>
        </div>
    </div>

    <div id="push"></div>


    <?php      
    require('layout/footer.php');
    ?> 
    <script>
        $(document).ready(function() {
            $('#info_daftar').children('a').attr('href', 'index.php#info_pendaftaran');
        })
    </script>                      