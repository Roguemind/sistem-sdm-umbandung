<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Grafik</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/pegawai">Data Pegawai</a></li>
                <li class="breadcrumb-item active">Grafik Data Dosen</li>
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
                        <h5 class="card-title text-center">Grafik Jumlah Pegawai</h5>
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fst">Fakultas Saintek dan Teknologi</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#feb">Fakultas Ekonomi dan Bisnis</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fai">Fakultas Agama Islam </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fsh">Fakultas Sosial dan Humaniora</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="fst">
                                <canvas id="barChart1" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#barChart1'), {
                                            type: 'bar',
                                            data: {
                                                labels: ['Teknik Informatika', 'Teknik Elektro', 'Teknik Indrustri', 'Tendik Pangan', 'Bioteknologi', 'Farmasi', 'Agribisnis'],
                                                datasets: [{
                                                    label: 'Dosen',
                                                    data: [43, 149, 106, 87, 34, 12, 77],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 205, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(201, 203, 207, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(153, 102, 255)',
                                                        'rgb(201, 203, 207)'
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
                        </div>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show profile-edit" id="feb">
                                <canvas id="barChart2" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#barChart2'), {
                                            type: 'bar',
                                            data: {
                                                labels: ['Akutansi', 'Manajemen'],
                                                datasets: [{
                                                    label: 'Tendik',
                                                    data: [16, 20],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)'
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
                        </div>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show profile-edit" id="fai">
                                <canvas id="barChart3" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#barChart3'), {
                                            type: 'bar',
                                            data: {
                                                labels: ['Pendidikan Agama Islam', 'Pendidikan Islam Anak Usia Dini', 'Ekonomi Syariah', 'Komunikasi Penyiaran Islam', 'Hukum Keluarga Islam'],
                                                datasets: [{
                                                    label: 'Tendik',
                                                    data: [35, 55, 10, 20, 40, 63, 11, 45],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 205, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(54, 162, 235)'
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
                        </div>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show profile-edit" id="fsh">
                                <canvas id="barChart4" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#barChart4'), {
                                            type: 'bar',
                                            data: {
                                                labels: ['Administrasi Publik', 'Ilmu Komunikasi', 'Kriya Tekstil dan Fashion', 'Psikolog'],
                                                datasets: [{
                                                    label: 'Tendik',
                                                    data: [35, 55, 10, 20, 40, 63, 11, 45],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 205, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(75, 192, 192)'
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
                        </div>
                    </div>


                    <!-- End Bar CHart -->

                </div>
            </div>
            <div class="col-lg-6">
                <div class="card ">
                    <!-- End Revenue Card -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Grafik Dosen Berdasarkan Jabatan Akademik Dosen</h5>
                        <canvas id="jad" style="max-height: 400px;"></canvas>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new Chart(document.querySelector('#jad'), {
                                    type: 'bar',
                                    data: {
                                        labels: ['Asisten Ahli', 'Lektor', 'Lektor Kepala', 'Guru Besar', 'Tenaga Pengajar'],
                                        datasets: [{
                                            label: 'Dosen',
                                            data: [66, 49, 26, 17, 30],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(255, 159, 64, 0.2)',
                                                'rgba(255, 205, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(54, 162, 235, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(255, 159, 64)',
                                                'rgb(255, 205, 86)',
                                                'rgb(75, 192, 192)',
                                                'rgb(54, 162, 235)'
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card ">
                    <!-- End Revenue Card -->
                    <!-- Bar Chart -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Grafik Jenis Kelamin Dosen</h5>
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
        </div>
    </section>
</main><!-- End #main -->