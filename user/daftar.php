<!DOCTYPE html>
<html lang="en">

<head>

    <title>Pengajuan Permintaan Duplikat Buku Nikah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="container">
        <div class="main-body">
            <div class="page-wrapper pt-2">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card" style="min-height: 600px;">
                            <div class="card-header">
                                <h2 class="text-center">Form Pengajuan Permintaan Duplikat Buku
                                    Nikah</h2>
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="floating-label"><b>Periksa NIK anda</b></label>
                                                <input type="number" name="nik" id="nik" class="form-control"
                                                    placeholder="Masukkan NIK anda">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
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
</body>

<!-- Required Js -->
<script src="assets/js/plugins/jquery.min.js"></script>
<script src="assets/js/plugins/jquery-ui.min.js"></script>
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>

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
                if (!data.desa) $('#not-found').removeAttr('hidden');
                else $('#not-found').attr('hidden', '');
                $.each(data, function(key, val) {
                    $('#' + key).text(val);
                });
            }
        });
    });
});
</script>

</body>

</html>

</html>