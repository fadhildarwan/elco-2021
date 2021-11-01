<?= $this->extend('templates_admin/index');?>

<?= $this->section('result');?>
<title>Result | Elco</title>
<?= $this->endSection();?>

<?= $this->section('page-content');?>

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Result</h1>

<!-- Begin Page Content -->
<div class="container-fluid">

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
    <?php if (!empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
</div> 

<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Details</h6>
    </div>
    <div class="card-body">
        <div class="row justify-content-end">
            <div class="col-6">
                <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="search..." name="keyword">
                    <button class="btn btn-success" type="submit" name="submit">Search</button>
                </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Waktu</th>
                        <th>Kode Unik</th>
                        <th>Vote</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $r) : ?>
                    <tr>
                        <td><?=$nomor++; ?></td>
                        <td><?=$r->created_at ?></td>
                        <td><?=$r->kode_unik ?></td>
                        <td><?=$r->vote ?></td>
                        <td class="text-center display-inline" style="width: 25%;">
                        <table class="text-center">
                            <td><a><input type="checkbox" class="btn btn-success btn-sm"><br>Sah</a></td>
                            <td><a><input type="checkbox" class="btn btn-danger btn-sm"><br>Tidak</a></td>
                        </table>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('tb_vote', 'result_pagination') ?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>

<?= $this->endSection();?>