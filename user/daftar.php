<!DOCTYPE html>
<html lang="en">

<head>

    <title>Pengajuan Permintaan Duplikat Buku Nikah</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">




</head>

<body>
    <div class="container">
        <div class="main-body">
            <div class="page-wrapper pt-5">
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
                                                <label class="floating-label">Periksa NIK anda</label>
                                                <input type="number" class="form-control"
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
                                    </div>
                                    <hr>
                                    <div class="text-center mt-4">
                                        <h4><i>Silahkan periksa NIK anda terlebih dahulu</i></h4>
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
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>

<script>
$(document).ready(function() {
    $('#cek-nik').click(function(e) {
        e.preventDefault();


    });
});
</script>

</body>

</html>