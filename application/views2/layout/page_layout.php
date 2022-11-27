<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/head'); ?>
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <?php $this->load->view('_partials/header'); ?>

        <!-- /Header -->

        <!-- Sidebar -->
        <?php $this->load->view('_partials/sidebar'); ?>
        <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->

            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- ======= Footer ======= -->
    <?php $this->load->view('_partials/footer'); ?>
    <!-- End Footer -->

    <!-- jQuery -->
    <?php $this->load->view('_partials/script'); ?>

</body>

</html>