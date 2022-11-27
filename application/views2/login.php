<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head'); ?>
</head>

<body class="account-page">

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <div class="account-content">
            <div class="container">
                <div class="account-box">
                    <div class="account-wrapper">

                        <!-- Account Logo -->
                        <div class="account-logo">
                            <a href="index.html"><img src="assets/img/logo.png" alt="Dreamguy's Technologies"></a>
                        </div>
                        <!-- /Account Logo -->

                        <h5 class="card-title text-left pb-0 fs-4">Selamat Datang! 👋</h5>
                        <p class="text-left medium">Masukan Data Diri Anda Di Bawah Ini</p>

                        <!-- Account Form -->
                        <?= form_open('login/auth_user') ?>
                            <div class="form-group">
                                <label>Username</label>
                                <input id="username" name="username"class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-auto">
                                        <a class="text-muted" href="forgot-password.html">
                                            Forgot password?
                                        </a>
                                    </div>
                                </div>
                                <input id="password" name="password" class="form-control" type="password">
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-primary account-btn" type="submit" value="Login">
                            </div>
                        </form>
                        <!-- /Account Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <?php $this->load->view('_partials/script'); ?>

</body>

</html>