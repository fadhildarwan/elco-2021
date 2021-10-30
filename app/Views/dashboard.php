<?= $this->extend('templates_voters/index');?>

<?= $this->section('title');?>
<title>Dashboard | Elco</title>
<?= $this->endSection();?>

<?= $this->section('page-content');?>

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                               Candidate</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                        </div>
                   </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Voters</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $voters_list; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Vote Progress
                                </div>
                                <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php $vote = $result_id/$voters_list*$persen; $output = number_format($vote, 2, '.', ''); echo $output; ?>%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php $vote = $result_id/$voters_list*$persen; $output = number_format($vote, 2, '.', ''); echo $output; ?>%" aria-valuenow="<?php $vote = $result_id/$voters_list*$persen; $output = number_format($vote, 2, '.', ''); echo $output; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-spinner fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Elco Committee</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">22</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Candidate</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <a href="<?= base_url('candidate'); ?>">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url(); ?>/img/paslon.png" alt="Pasangan Calon Gamapi 2022">
                </a>
            </div>
            <div class="text-center">
                <h2><b>Prisnu Fachrial I. - Alifian Arrazi</b></h2>
                <h4>Calon Ketua - Calon Wakil Ketua</h4>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ketentuan Pemilihan</h6>
        </div>
        <div class="card-body">
            <p><b>Ketentuan dan Cara Pemilihan Calon Ketua dan Wakil Ketua Gamapi 2022</b></p>
            <ol>
                <li>Pemilih terdaftar ke dalam daftar pemilih calon Ketua dan Wakil Ketua Gamapi 2022 yang telah ditetapkan oleh Elco</li>
                <li>Pemilih dapat memilih menu <a href="<?= base_url('vote'); ?>"><b>vote</b></a> pada sisi kiri</li>
                <li>Pemilih memasukkan <b>"Kode Unik"</b> yang telah dikirimkan oleh Elco</li>
                <li>Dikarenakan tahun ini hanya terdapat 1 (satu) pasang calon, maka pemilih dapat memilih pasangan calon tersebut atau memilih kotak kosong</li>
                <li>Pemilih hanya dapat memilih 1 (satu) kali pada waktu yang telah ditetapkan oleh Elco</li>
                <li>Pemilih yang melakukan pemilihan sebanyak 2 (dua) kali dianggap tidak memiliki suara</li>
                <li>Pemilih dilarang melakukan tindakan terlarang yang mengganggu pemilihan Elco</li>
            </ol>
        </div>
    </div>

</div>

<?= $this->endSection();?>