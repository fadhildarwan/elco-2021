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
        <h6 class="m-0 font-weight-bold text-primary">Hasil Pemilihan Calon Ketua dan Wakil Ketua Gamapi 2022</h6>
    </div>
    <div class="card-body">
        <div class="chart-bar"><div class="chartjs-size-monitor">
            <div class="chartjs-size-monitor-expand">
                <div class="">
                    <h1></h1>
                </div>
            </div>
            <div class="chartjs-size-monitor-shrink">
                <div class="">
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
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php $vote=$result_paslon/$voters_list*$persen; $output = number_format($vote, 2, '.', ''); echo $output; ?>%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?php $vote=$result_paslon/$voters_list*$persen; $output = number_format($vote, 2, '.', ''); echo $output; ?>" aria-valuenow="<?php $vote=$result_paslon/$voters_list*$persen; $output = number_format($vote, 2, '.', ''); echo $output; ?>" aria-valuemin="0" aria-valuemax="100"></div>
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
        </div>
        <hr> <b>Vote Progress :</b> <?php $vote = $result_id/$voters_list*$persen; $output = number_format($vote, 2, '.', ''); echo $output; ?> % atau <?= $result_id; ?> voters dari <?= $voters_list; ?> voters<br>
        <b>Keterangan :</b><br>
            Data dihitung dalam persen (%)
            <li><?php foreach($result_paslon->getResult() as $value): ?>
                Total Paslon 1 (<?php $vote=$value->jumlah/$voters_list*$persen; $output = number_format($vote, 2, '.', ''); echo $output; ?>); %
            <?php endforeach ?></li>
            <li><?php foreach($result_blank->getResult() as $value): ?>
                Total Kotak Kosong (<?= $voter=$value->jumlah/$voters_list*$persen; ?>); %
            <?php endforeach ?></li>
            <!-- <li>Pada data di bawah untuk sebelah kiri Paslon 1 dan sebelah kanan Kotak Kosong</li> -->
            Data dihitung berdasarkan total tanpa persen
            <li><?php foreach($result_paslon->getResult() as $value): ?>
                Total Paslon 1 (<?= $value->jumlah; ?>);
            <?php endforeach ?></li>
            <li><?php foreach($result_blank->getResult() as $value): ?>
                Total Kotak Kosong (<?= $value->jumlah; ?>);
            <?php endforeach ?></li>
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