@extends('layouts.app')
@section('title','Dashboard')


@section('content')
<main id="main" class="main" style="background-color:#272c4c">

<div class="pagetitle">
  <h1 style="color:#fff">POLICE EMERGENCY DASHBOARD</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html" style="color:#fff">Home</a></li>
      <li class="breadcrumb-item active" style="color:#fff">Dashboard</li>

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
              <h5 class="card-title" style="color:#fff">TOTAL REPORTS <span style="color:#fff">
               <span class="badge bg-primary badge-number"style="color:#fff" ></span> </span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-lock" style="color:#C71585"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#C71585">Today: 7</h6>
  

                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card" style="background-color:#6266f5">

            <div class="card-body">
              <h5 class="card-title" style="color:#fff">TOTAL REPORTS <span style="color:#fff">
              <span class="badge bg-primary badge-number"style="color:#fff" ></span> </span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-download"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#32CD32">This Month: 31</h6>
                  

                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card" style="background-color:#6266f5">
            <div class="card-body">
              <h5 class="card-title" style="color:#fff">TOTAL RESPONDED <span style="color:#fff">
              <span class="badge bg-primary badge-number"style="color:#fff" ></span> </span></h5>
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-check"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#ff771d">This Month: 30</h6>
                  

                </div>
              </div>

            </div>
          </div>

        </div>

       
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
                    <th scope="col">Time</th>
                    <th scope="col">Name</th>
                    <th scope="col">Emergency Type</th>
                    <th scope="col">Location</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#" style="color:#fff">3:05 PM</a></th>
                    <td style="color:#fff">Samantha Nicole Perez</td>
                    <td><a href="#" style="color:#fff">Car Accident</a></td>
                    <td style="color:#fff">Kauswagan Cagayan De Oro City</td>
                    <td><span class="badge bg-success">Responded</span></td>
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