<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('_partials/head'); ?>
</head>

<body>

  <main>
    <div class="container-xxl">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="app-brand justify-content-center d-flex py-3">
                    <img src="<?= base_url(); ?>/assets/img/logo.png" height="100" alt="View Badge User" data-app-dark-img="logo.png" data-app-light-img="logo.png">
                  </div>

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-left pb-0 fs-4">Selamat Datang! 👋</h5>
                    <p class="text-left small">Masukan Data Diri Anda Di Bawah Ini</p>
                  </div>
                  <?= form_open('login/auth_user') ?>
                  <div class="row g-3 needs-validation" novalidate>
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter your email or username" autofocus required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="..........." autofocus required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    </form>
                  </div>

                </div>
              </div>


            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php $this->load->view('_partials/script'); ?>

</body>

</html>