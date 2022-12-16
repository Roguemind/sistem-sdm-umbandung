<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('_partials/head'); ?>
</head>

<body>

  <main>
    <div class="container-fluid">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <!-- End Logo -->

              <div class="card overflow-hidden z-index-1 mb-3" style="width: 800px">

                <div class="row">
                  <div class="col-5 bg-primary">
                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
                      <!--/.bg-holder-->
                      <div class="z-index-1 position-relative">
                        <h4 class="text-white mb-4 font-sans-serif text-center fw-bolder" href="../../../index.html">PENGUMUMAN</h4>
                        <p class="opacity-75 text-white">With the power of Falcon, you can now f
                          ocus only on functionaries for your digital products, while leaving the UI design on us!</p>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="row g-0 h-100">
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="card-body p-0">
                      <div class="row m-4 h-100">
                        <div class="app-brand justify-content-center d-flex py-3">
                          <img src="<?= base_url(); ?>/assets/img/logo.png" height="100" alt="View Badge User" data-app-dark-img="logo.png" data-app-light-img="logo.png">
                        </div>

                        <div class="pt-0 pb-0">
                          <h5 class="card-title text-center pb-0 fs-4">Selamat Datang! 👋</h5>
                          <p class="text-center small">Masukan Data Diri Anda Di Bawah Ini</p>
                        </div>
                        <?= form_open('login/auth_user') ?>
                        <div class="row g-3 needs-validation" novalidate>
                          <?= $this->session->flashdata('pesan'); ?>
                          <div class="col-12 mt-0 pt-0">
                            <label for="yourUsername" class="form-label">Username</label>
                            <div class="input-group has-validation">
                              <input type="text" name="username" class="form-control" id="yourUsername" placeholder="Enter your email or username" autofocus required>
                              <div class="invalid-feedback">Please enter your username.</div>
                            </div>
                          </div>
                          <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                              <label class="form-label" for="password">Password</label>
                              <a href="auth-forgot-password-basic.html">
                                <small>Forgot Password?</small>
                              </a>
                            </div>
                            <div class="input-group input-group-merge">
                              <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                              <button type="text" class="input-group-text"><i class="bi bi-eye-slash" id="togglePassword"></i></button>
                            </div>
                            <!--<div class="col-12 input-group input-group-merge">
                            <label for="yourPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="yourPassword" placeholder="..........." autofocus required>
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            <div class="invalid-feedback">Please enter your password!</div>
                          </div>

                          

                          </div>
                            <div class="col-6 text-end">
                              <a class="fs--1 " href="../../../pages/authentication/card/forgot-password.html">Forgot Password?</a>
                            </div>-->

                            <div class="col-12 mt-3">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Ingat Saya</label>

                              </div>

                              <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary w-100" type="submit">Login</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

      </section>

    </div>
  </main><!-- End #main -->


  <!-- Vendor JS Files -->
  <?php $this->load->view('_partials/script'); ?>
  <?php $this->load->view('_partials/footer'); ?>
  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', (e) => {
      e.preventDefault();
      // toggle the type attribute
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // toggle the eye slash icon
      this.classList.toggle('bi-eye');
    });
  </script>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>