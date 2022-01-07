<?php
require('template/header.php');

$user_id = $usr['id'];
$get_data = mysqli_query($conn, "SELECT * FROM tb_pengajuan WHERE user_id='$user_id'");
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
                                            <h5 class="m-b-10">Data Pengajuan</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-align-justify"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Panel</a></li>
                                            <li class="breadcrumb-item"><a href="#!">Data Pengajuan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Data Pengajuan</h5>
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
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Tggl Pengajuan</th>
                                                        <th>Nama Suami</th>
                                                        <th>Nama Istri</th>
                                                        <th width="100">Status</th>
                                                        <th width="150">Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($get_data as $dta) {
                                                        $pendaftar_id = $dta['pendaftar_id'];
                                                        $data_suami = mysqli_query($conn, "SELECT * FROM tb_data_suami WHERE pendaftar_id='$pendaftar_id'");
                                                        $dsm = mysqli_fetch_assoc($data_suami);
                                                        $data_istri = mysqli_query($conn, "SELECT * FROM tb_data_istri WHERE pendaftar_id='$pendaftar_id'");
                                                        $dis = mysqli_fetch_assoc($data_istri);

                                                        $btn = '';
                                                        if ($dta['status'] == 'ditinjau') {
                                                            $warna = 'info';
                                                            $btn = 'disabled';
                                                        } else if ($dta['status'] == 'disetujui') {
                                                            $warna = 'success';
                                                        } else if ($dta['status'] == 'ditolak') {
                                                            $warna = 'danger';
                                                            $tolak = true;
                                                        }
                                                    ?>
                                                        <tr>
                                                            <td><?= date('d/m/Y', strtotime($dta['tggl_pengajuan'])) ?></td>
                                                            <td><?= $dsm['nama'] ?></td>
                                                            <td><?= $dis['nama'] ?></td>
                                                            <td>
                                                                <span class="badge badge-<?= $warna ?>"><?= strtoupper($dta['status']) ?></span>
                                                            </td>
                                                            <td class="text-center">
                                                                <?php if (isset($tolak)) { ?>
                                                                    <button class="btn btn-sm btn-info" <?= $btn ?>><i class="fa fa-info-circle"></i> Keterangan</button>
                                                                <?php } else { ?>
                                                                    <button class="btn btn-sm btn-success" <?= $btn ?>><i class="fa fa-download"></i> Download</button>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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
</div>
<!-- [ Main Content ] end -->
<?php
require('template/footer.php');
?>