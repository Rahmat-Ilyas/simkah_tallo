<?php
require('template/header.php');
?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper container">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Pengajuan Baru</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-file-text"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Panel</a></li>
                                            <li class="breadcrumb-item"><a href="#!">Pengajuan Baru</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Pengajuan Baru</h5>
                                        <div class="card-header-right">
                                            <div class="btn-group card-option">
                                                <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="feather icon-more-horizontal"></i>
                                                </button>
                                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i>
                                                                maximize</span><span style="display:none"><i class="feather icon-minimize"></i>
                                                                Restore</span></a>
                                                    </li>
                                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i>
                                                                expand</span></a></li>
                                                    <!-- <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-info mb-3" role="alert">
                                            <p class="mb-0">Note: Silahkan lakukan pengajuan baru apabila pengajuan sebelumnya di tolak.</p>
                                        </div>
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="form-group">
                                                        <label class="floating-label"><b>Periksa NIK anda (NIK Suami/Istri)</b></label>
                                                        <input type="number" name="nik" id="nik" class="form-control" placeholder="Masukkan NIK" require="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="form-group">
                                                        <label class="floating-label"></label>
                                                        <div class="mt-2">
                                                            <button type="button" class="btn btn-primary" id="cek-nik">Cek
                                                                NIK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mb-3" id="not-found" style="margin-top: -10px;" hidden="">
                                                    <span class="text-danger"><i>NIK tidak ditemukan, periksa kembali NIK
                                                            anda</i></span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td width="100"><b>Kelurahan/Desa</b></td>
                                                            <td width="10">:</td>
                                                            <td id="desa" class="dtl">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Nikah di</b></td>
                                                            <td>:</td>
                                                            <td id="tempat_nikah" class="dtl">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Tanggal Akad</b></td>
                                                            <td>:</td>
                                                            <td id="tggl_akad" class="dtl">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>NIK Suami</b></td>
                                                            <td>:</td>
                                                            <td id="nik_sm" class="dtl">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Nama Suami</b></td>
                                                            <td>:</td>
                                                            <td id="nama_sm" class="dtl">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Pekerjaan Suami</b></td>
                                                            <td>:</td>
                                                            <td id="pekerjaan_sm" class="dtl">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>NIK Istri</b></td>
                                                            <td>:</td>
                                                            <td id="nik_is" class="dtl">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Nama Istri</b></td>
                                                            <td>:</td>
                                                            <td id="nama_is" class="dtl">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Pekerjaan Istri</b></td>
                                                            <td>:</td>
                                                            <td id="pekerjaan_is" class="dtl">-</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-sm-7 px-3">
                                                    <b>Lengkapi data</b><br>
                                                    <span>Silahkan lengkapi form berikut dan mengupload dokumen yang diminta
                                                        untuk melanjutkan pengajuan permintaan
                                                        duplikat buku nikah!</span>
                                                    <hr>
                                                    <form>
                                                        <h4>Berkas Pengajuan</h4>
                                                        <div class="form-group row">
                                                            <label class="col-3">Surat Keterangan Hilang</label>
                                                            <div class="col-9">
                                                                <input type="file" class="form-control" require="" name="ket_hilang">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3">Scan Kartu Keluarga</label>
                                                            <div class="col-9">
                                                                <input type="file" class="form-control" require="" name="scan_kk">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3">Scan KTP</label>
                                                            <div class="col-9">
                                                                <input type="file" class="form-control" require="" name="scan_ktp">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3">Swafoto Suami</label>
                                                            <div class="col-9">
                                                                <input type="file" class="form-control" require="" name="swafoto_suami">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-3">Swafoto Istri</label>
                                                            <div class="col-9">
                                                                <input type="file" class="form-control" require="" name="swafoto_istri">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-3"></div>
                                                            <div class="col-9">
                                                                <button type="submit" name="kirim" class="btn  btn-primary">Kirim Pengajuan Baru</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
<?php
require('template/footer.php');
?>

<script>
    $(document).ready(function() {
        $('#cek-nik').click(function(e) {
            e.preventDefault();

            $('.dtl').text('-')
            var nik = $('#nik').val();
            $.ajax({
                type: "POST",
                url: "controller.php",
                dataType: 'json',
                data: {
                    req: 'cek_nik',
                    nik: nik,
                },
                success: function(data) {
                    if (!data.desa) {
                        $('#not-found').removeAttr('hidden');
                        $('#nik').val('');
                    } else $('#not-found').attr('hidden', '');
                    $.each(data, function(key, val) {
                        $('#' + key).text(val);
                    });
                }
            });
        });
    });
</script>