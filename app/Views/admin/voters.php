<?= $this->extend('templates_admin/index');?>

<?= $this->section('title');?>
<title>Voters List | Elco</title>
<?= $this->endSection();?>

<?= $this->section('page-content');?>

<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Voters List</h1>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pemilih Calon Ketua Gamapi 2022</h6>
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
                        <th>Kode Unik</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Tahun</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($voters as $r) : ?>
                    <tr>
                        <td><?=$nomor++; ?></td>
                        <td><?=$r->kode_unik?></td>
                        <td><?=$r->nim_voters?></td>
                        <td><?=$r->name_voters?></td>
                        <td><?=$r->tahun_voters?></td>
                        <td class="text-center" style="width: 15%">
                            <a><input type="checkbox" class="btn btn-success btn-sm"></a>
                            <!-- <a href="" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> -->
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('tb_voters', 'voters_pagination') ?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection();?>