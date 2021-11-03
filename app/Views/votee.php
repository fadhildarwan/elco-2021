<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elco</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>

<?= $this->include('templates_voters/topbar');?>

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><b>Electoral Commission</b> Gamapi 2021</h1>

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
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url(); ?>/img/paslon.png" alt="...">
            </div>
            <div class="text-center">
                <h2><b>Prisnu Fachrial I. - Alifian Arrazi</b></h2>
                <h4>Calon Ketua - Calon Wakil Ketua</h4>
            </div>
        </div>
    </div>

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Visi dan Misi</h6>
            </div>
            <div class="card-body">
                <h3><b>Visi</b></h3>
                <p>Mewujudkan <b>GAMAPI</b> sebagai wadah untuk teman-teman MKP dalam mengaktualisasikan diri dengan menciptakan iklim suasana kerja yang nyaman berdasarkan motivasi diri sehingga dapat menghasilkan karya yang berkualitas dan memiliki dampak terhadap pribadi maupun sosial dengan menyelaraskan output yang diimbangi nilai-nilai kultural internal organisasi.</p>
                <h3><b>Misi</b></h3>
                <ol>
                    <li>Menciptakan suasana kerja yang nyaman dengan berfokus kepada hubungan di dalam internal organisasi melalui pembentukan budaya apresiatif dan egaliter.</li>
                    <li>Memberi dampak nyata secara eksternal melalui kolaborasi strategis beragam stakeholder.</li>
                    <li>Melakukan profesionalitas organisasi dengan menempatkan SDM sesuai dengan minat, kemauan, motivasi, dan kapabilitas individu didalamnya berbasis pendekatan kultural.</li>
                    <li>Memberi kebermanfaatan bagi mahasiswa/i di departemen MKP dengan mengedepankan program kerja yang inklusif, representatif, dan kolaboratif.</li>
                    <li>Mendorong transparansi, akuntabilitas, dan responsibilitas didalam organisasi <b>GAMAPI</b>.</li>
                    <li>Mendorong gamapi sebagai himpunan mahasiswa untuk turut andil dalam memberikan kerja sosial-politik yang berlandaskan posisi keilmuan manajemen dan kebijakan publik.</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Visi dan Misi</h6>
            </div>
            <div class="card-body">
                <h3><b>Program Strategis</b></h3>
                <ol>
                    <li>Peer Counseling</li>
                    <li>Internal - External Co-Creation</li>
                    <li>Pengawalan Isu Kampus, lokal, dan Nasional</li>
                    <li>Kerjasama strategis antar lembaga</li>
                    <li>Program Hulu-Hilir</li>
                    <li>Diskusi <i>Policy</i> Canda Ria (DISPORIA)</li>
                    <li>Restrukturisasi Organisasi Tata Laksana</li>
                </ol>
            </div>
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
                <li>Pemilih dapat menggeser ke bawah untuk melakukan pemilihan</li>
                <li>Pemilih memasukkan <b>"Kode Unik"</b> yang telah dikirimkan oleh Elco</li>
                <li>Dikarenakan tahun ini hanya terdapat 1 (satu) pasang calon, maka pemilih dapat memilih pasangan calon tersebut atau memilih kotak kosong</li>
                <li>Pemilih hanya dapat memilih 1 (satu) kali pada waktu yang telah ditetapkan oleh Elco</li>
                <li>Pemilih yang melakukan pemilihan sebanyak 2 (dua) kali dianggap tidak memiliki suara</li>
                <li>Pemilih dilarang melakukan tindakan terlarang yang mengganggu pemilihan Elco</li>
            </ol>
        </div>
    </div>

<div class="card-header">
    <?php if(session()->getFlashdata('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>Periksa Vote Anda</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
</div>


<h3 class="text-center">Anda tidak dapat memilih lagi, Terima Kasih atas partisipasi anda dalam mengikuti rangkaian pemungutan suara Ketua dan Wakil Ketua Gamapi 2022</h3>


</div>
    


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>
</body>
</html>