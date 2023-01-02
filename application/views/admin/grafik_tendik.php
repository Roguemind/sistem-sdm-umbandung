<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Grafik</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/pegawai">Data Pegawai</a></li>
                <li class="breadcrumb-item active">Grafik Data Tendik</li>
            </ol>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <!-- End Revenue Card -->
                    <!-- Bar Chart -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Grafik Jumlah Tendik</h5>

                        <canvas id="barChart1" style="max-height: 400px;"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#barChart1'), {
                                    type: 'bar',
                                    data: {
                                        labels: ['FST', 'FEB2', 'FAI', 'FSH', 'LPnlLMyrt', 'LPnkLAik', 'LPej', 'Pimpinan'],
                                        datasets: [{
                                            label: 'Tendik',
                                            data: [35, 55, 10, 20, 40, 63, 11, 45],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(255, 159, 64, 0.2)',
                                                'rgba(255, 205, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(201, 203, 207, 0.2)',
                                                'rgba(221, 213, 217, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(255, 159, 64)',
                                                'rgb(255, 205, 86)',
                                                'rgb(75, 192, 192)',
                                                'rgb(54, 162, 235)',
                                                'rgb(153, 102, 255)',
                                                'rgb(201, 203, 207)',
                                                'rgb(221, 223, 227)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                            });
                        </script>
                    </div>


                    <!-- End Bar CHart -->

                </div>
            </div>
            <div class="col-lg-6">
                <div class="card ">
                    <!-- End Revenue Card -->
                    <!-- Bar Chart -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Grafik Jenis Kelamin Tendik</h5>
                        <!-- Column Chart -->
                        <div id="columnChart1"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#columnChart1"), {
                                    series: [{
                                        name: 'Laki-laki',
                                        data: [44, 55, 57, 56]
                                    }, {
                                        name: 'Perempuan',
                                        data: [76, 85, 101, 98]
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: '55%',
                                            endingShape: 'rounded'
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        show: true,
                                        width: 2,
                                        colors: ['transparent']
                                    },
                                    xaxis: {
                                        categories: ['FST', 'FEB', 'FAI', 'FSH'],
                                    },
                                    yaxis: {
                                        title: {
                                            text: 'Dosen'
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    tooltip: {
                                        y: {
                                            formatter: function(val) {
                                                return val + " Orang"
                                            }
                                        }
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Column Chart -->
                    </div>
                </div>
                <!-- End Bar CHart -->

            </div>
        </div>
    </section>
</main><!-- End #main -->