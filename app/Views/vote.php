<?= $this->extend('templates_admin/index');?>

<?= $this->section('title');?>
<title>Vote | Elco</title>
<?= $this->endSection();?>

<?= $this->section('page-content');?>

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

<?= $this->endSection();?>