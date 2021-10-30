<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote | Elco</title>

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
<h1 class="h3 mb-4 text-gray-800">Vote</h1>

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


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pemilihan Calon Ketua Gamapi 2022</h6>
    </div>

    <!-- Input Vote -->
    <form action="/admin/result/save" method="post">

        <?= csrf_field(); ?>

        <div class="card-body text-center">

            <div class="form-group text-justify col-md-6">
                <label for="kode_unik">Kode Unik *</label>
                <input type="text" name="kode_unik" id="kode_unik" class="form-control" maxlength="5" minlength="5" value="<?= old('kode_unik');?>" placeholder="kode unik berisikan 5 karakter (KAPITAL)" autofocus>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4">
                
                <div class="col">
                    <div class="card">
                        <label for="vote">
                            <div class="card-body">
                                <h4 class="card-title">Nomor Urut 1</h4>
                                <img src="<?= base_url(); ?>/img/paslon.png" class="card-img-top" alt="Paslon Nomor Urut 1">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><b>Prisnu Fachrial I. - Alifian Arrazi</b></h5>
                                <p class="card-text">Calon Ketua - Calon Wakil Ketua</p>
                            </div>
                        </label>
                            <div class="card-body">
                                <input class="" type="radio" value="1" name="vote" id="vote" style="border: 0px; width: 100%; height: 2em;">
                            </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card">
                        <label for="vote">
                            <div class="card-body">
                                <h4 class="card-title">Kotak Kosong</h4>
                                <img src="<?= base_url(); ?>/img/undraw_profile.svg" class="card-img-top" alt="Blank Card">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><b>Kotak Kosong</b></h5>
                                <p class="card-text">Silahkan memilih ini, jika anda tidak punya pilihan</p>
                            </div>
                        </label>
                            <div class="card-body">
                                <input class="" type="radio" value="blank" name="vote" id="vote" style="border: 0px; width: 100%; height: 2em;">
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body text-center">
            <button type="submit" value="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Vote</button>
            <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
        </div>
    </form>
</div>


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