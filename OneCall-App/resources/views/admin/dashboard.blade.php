@extends('layouts.app')
@section('title','Dashboard')


@section('content')
<main id="main" class="main" style="background-color:#272c4c">

<div class="pagetitle">
  <h1 style="color:#fff">Admin Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html" style="color:#fff">Home</a></li>
      <li class="breadcrumb-item active" style="color:#fff">Admin Dashboard</li>

    </ol>
  </nav>
</div>

<section class="section dashboard">
  <div class="row">

    <div class="col-lg-8">
      <div class="row">

        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card" style="background-color:#6266f5">
            <div class="card-body">
              <h5 class="card-title" style="color:#fff">Police Department <span style="color:#fff">|
               <span class="badge bg-primary badge-number"style="color:#fff" >4</span> </span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-fingerprint" style="color:#C71585"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#C71585">Today: 15</h6>
  

                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card" style="background-color:#6266f5">

            <div class="card-body">
              <h5 class="card-title" style="color:#fff">Fire Department <span style="color:#fff">| 
              <span class="badge bg-primary badge-number"style="color:#fff" >4</span> </span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-droplet"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#32CD32">Today: 5</h6>
                  

                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card" style="background-color:#6266f5">
            <div class="card-body">
              <h5 class="card-title" style="color:#fff">Medical Department<span style="color:#fff">|
              <span class="badge bg-primary badge-number"style="color:#fff" >4</span> </span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-activity"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#ff771d">Today: 7</h6>
                  

                </div>
              </div>

            </div>
          </div>

        </div>

        <!-- <div class="col-12">
          <div class="card" style="background-color:#343965">

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
              <h5 class="card-title" style="color:#fff">Reports <span style="color:#fff">/Today</span></h5>


              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Total Reports', 
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }, {
                      name: 'Total Downloads',
                      data: [11, 32, 45, 32, 34, 52, 41]
                    }, {
                      name: 'Total Users',
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
                    colors: ['#C71585', '#32CD32', '#ff771d'], 
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
              </script>


            </div>

          </div>
        </div> -->

        <div class="col-12">
          <div class="card recent-sales overflow-auto" style="background-color:#343965">

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

            <div class="card-body" style="color:#fff">
              <h5 class="card-title" style="color:#fff">Recent Reports <span>| Today</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Emergency Type</th>
                    <th scope="col">Location</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#" style="color:#fff">#2457</a></th>
                    <td style="color:#fff">Samantha123@gmail.com</td>
                    <td><a href="#" style="color:#fff">Fire Emergency</a></td>
                    <td style="color:#fff">Kauswagan Cagayan De Oro City</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">

      <div class="card" style="background-color:#663399">
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
          <h5 class="card-title" style="color:#fff">Recent Activity <span style="color:#fff">| Today</span></h5>

          <div class="activity">

            <div class="activity-item d-flex">
              <div class="activite-label" style="color:#fff">30 mins</div>
              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
              <div class="activity-content" style="color:#fff">
                Fire Emergency
              </div>
            </div>

            <div class="activity-item d-flex">
              <div class="activite-label" style="color:#fff">1 hr</div>
              <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
              <div class="activity-content" style="color:#fff">
                Car Accident
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card" style="background-color:#4B0082">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"></a>
        </div>

        <div class="card-body pb-0">
          <h5 class="card-title" style="color:#fff">News &amp; Updates <span style="color:#fff">| Today</span></h5>
          <div class="news">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</main>
@endsection