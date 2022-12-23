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
      <div class="col-lg-6">
        <div class="card">
          <!-- End Revenue Card -->
          <!-- Bar Chart -->
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
      <div class="col-lg-6">
        <div class="card ">
          <!-- End Revenue Card -->
          <!-- Bar Chart -->
          <div class="card-body">
            <h5 class="card-title text-center">Grafik Jenis Kelamin Pegawai</h5>
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#jeniskelamindosen">Dosen</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#datatendik">Tendik</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active jeniskelamindosen" id="jeniskelamindosen">
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
            <div class="tab-content pt-2">
              <div class="tab-pane fade show datatendik" id="datatendik">
                <!-- Column Chart -->
                <div id="columnChart2"></div>
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    new ApexCharts(document.querySelector("#columnChart2"), {
                      series: [{
                        name: 'Laki-laki',
                        data: [44, 55, 57, 56, 43, 21, 54, 43]
                      }, {
                        name: 'Perempuan',
                        data: [76, 85, 101, 98, 22, 31, 11, 21]
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
                        categories: ['FST', 'FEB2', 'FAI', 'FSH', 'LPnlLMyrt', 'LPnkLAik', 'LPej', 'Pimpinan'],
                      },
                      yaxis: {
                        title: {
                          text: 'Tendik'
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
          </div>
          <!-- End Bar CHart -->

        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->