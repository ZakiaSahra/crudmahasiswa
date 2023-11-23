<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Create Account</h3>
                            </div>
                            <div class="card-body">
                                <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>" 
                                        type="text" placeholder="Nama Lengkap" />
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <label for="nama">Nama Lengkap</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" 
                                        type="email" placeholder="name@example.com" />
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="password1" value="<?= set_value('password1'); ?>"
                                                type="password" placeholder="Create a password" />
                                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                <label for="password1">Password</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" name="inputPasswordConfirm" type="password" 
                                                placeholder="Confirm password" />
                                                <label for="inputPasswordConfirm">Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">
                                            Create Account</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="<?= base_url('Auth'); ?>">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>