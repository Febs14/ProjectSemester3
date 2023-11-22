<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <img src="https://seeklogo.com/images/P/pdi-love-logo-C8738BCFAD-seeklogo.com.png?v=638198273740000000"
                        alt="logo" width="150">
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                        <div class="card-body">
                            <form class="user" method="POST" action="<?= base_url('Auth/register'); ?>">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="nama">Nama </label>
                                    <input id="nama" type="text" class="form-control" name="nama"
                                        value="<?= set_value('nama'); ?>" class="form-control form-control-user"
                                        id="nama" placeholder="Masukkan Nama">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="<?= set_value('email'); ?>" class="form-control form-control-user"
                                        id="nama" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password"
                                        class="form-control form-control-user" id="nama"
                                        value="<?= set_value('password1'); ?>" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Re-Password</label>
                                    <input id="password" type="password" class="form-control" name="password2" value=""
                                        class="form-control form-control-user" id="nama" placeholder="Re-Password">
                                </div>
                                <div class="align-items-center d-flex">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Register
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Already have an account? <a href="<?= base_url('Auth') ?>" class="text-dark">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>