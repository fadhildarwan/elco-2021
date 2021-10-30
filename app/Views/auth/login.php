<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="login-brand">
                                        <img src="<?= base_url(); ?>/img/elco.png" alt="logo Elco" width="100" class="shadow-light img-fluid rounded mx-auto d-block">
                                    </div><br><br>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>Elco 2021</b></h1>
                                    </div>

                                    <div class="card-header">
                                        <?php if(session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <div class="alert-body">
                                                <button type="button" class="close" data-dismiss="alert">
                                                    x
                                                </button>
                                                <b>error</b>
                                                <?= session()->getFlashdata('error'); ?>
                                            </div>    
                                        <?php endif; ?>
                                    </div>
                                    
                                    <form action="<?= base_url('Auth/loginProcess');?>" class="user" method="post" >
                                    <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="username" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type='submit' class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<?= $this->endSection(); ?>