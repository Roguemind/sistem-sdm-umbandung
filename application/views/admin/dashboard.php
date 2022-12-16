<!-- #main -->
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url(); ?>dashboard_admin">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari Ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Kinerja <span>| Hari ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-book"></i>
                  </div>
                  <div class="ps-3">
                    <h6>40%</h6>
                    <span class="text-danger small pt-1 fw-bold">60%</span> <span class="text-muted small pt-2 ps-1">Belum Bekerja</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Presensi <span>| Bulan Ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-emoji-smile"></i>
                  </div>
                  <div class="ps-3">
                    <h6>85%</h6>
                    <span class="text-danger small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">Tidak Masuk</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Hari ini</a></li>
                  <li><a class="dropdown-item" href="#">Bulan Ini</a></li>
                  <li><a class="dropdown-item" href="#">Tahun Ini</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">JAD <span>| Bulan Ini</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-folder2-open"></i>
                  </div>
                  <div class="ps-3">
                    <h6>20%</h6>
                    <span class="text-danger small pt-1 fw-bold">80%</span> <span class="text-muted small pt-2 ps-1">Belum Mengajukan</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <!-- End Customers Card -->

          <!-- Reports -->
          <!-- <div class="col-12">
            <div class="card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Kinerja <span>/Hari Ini</span></h5> -->

          <!-- Line Chart -->
          <!-- <div id="reportsChart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#reportsChart"), {
                      series: [{
                        name: 'Pengajaran',
                        data: [31, 40, 28, 51, 42, 82, 56],
                      }, {
                        name: 'Penelitian',
                        data: [11, 32, 45, 32, 34, 52, 41]
                      }, {
                        name: 'Pengabdian',
                        data: [15, 11, 32, 18, 9, 24, 11]
                      }],
                      chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                          show: false
                        },
                      },
                      markers: {
                        size: 4
                      },
                      colors: ['#4154f1', '#2eca6a', '#ff771d'],
                      fill: {
                        type: "gradient",
                        gradient: {
                          shadeIntensity: 1,
                          opacityFrom: 0.3,
                          opacityTo: 0.4,
                          stops: [0, 90, 100]
                        }
                      },
                      dataLabels: {
                        enabled: false
                      },
                      stroke: {
                        curve: 'smooth',
                        width: 2
                      },
                      xaxis: {
                        type: 'datetime',
                        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                      },
                      tooltip: {
                        x: {
                          format: 'dd/MM/yy HH:mm'
                        },
                      }
                    }).render();
                  });
                </script> -->
          <!-- End Line Chart -->

          <!-- </div>

            </div>
          </div> -->
          <!-- End Reports -->
          <!-- Bar Chart -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Grafik Jumlah Pegawai</h5>
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Dosen</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Tendik</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#barChart'), {
                          type: 'bar',
                          data: {
                            labels: ['FST', 'FEB', 'FAI', 'FSH'],
                            datasets: [{
                              label: 'Dosen',
                              data: [43, 149, 106, 87],
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

                  <div class="tab-pane fade show profile-edit" id="profile-edit">
                    <canvas id="barChart1" style="max-height: 400px;"></canvas>
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new Chart(document.querySelector('#barChart1'), {
                          type: 'bar',
                          data: {
                            labels: ['FST', 'FEB2', 'FAI', 'FSH', 'LPnlLMyrt', 'LPnkLAik', 'LPej', 'Pimpinan'],
                            datasets: [{
                              label: '',
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
                </div>
              </div>
            </div>
          </div>
          <!-- End Bar CHart -->
          <!-- Recent Sales -->
          <!-- End Recent Sales -->

          <!-- Top Selling -->
          <div class="col-12">
            <div class="card top-selling overflow-auto">

              <div class="card-body pb-5">
                <h5 class="card-title">Aktivitas</h5>

                <div class="activity">

                  <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                      Voluptatem blanditiis blanditiis eveniet
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                      Voluptates corrupti molestias voluptatem
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                      Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">2 days</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                      Est sit eum reiciendis exercitationem
                    </div>
                  </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">4 weeks</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                      Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                    </div>
                  </div><!-- End activity item-->

                </div>

              </div>

            </div>
          </div><!-- End Top Selling -->
        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Recent Activity -->
        <!-- End Recent Activity -->

        <!-- Budget Report -->
        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body pb-0">
            <h5 class="card-title">Presensi</h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'Hadir'
                      },
                      {
                        value: 735,
                        name: 'Cuti'
                      },
                      {
                        value: 580,
                        name: 'Lembur'
                      }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div><!-- End Budget Report -->

        <!-- Website Traffic -->
        <!-- End Website Traffic -->

        <!-- News & Updates Traffic -->
        <!-- End News & Updates -->

      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->