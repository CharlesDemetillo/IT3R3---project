@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<main id="main" class="main" style="background-color:#272c4c" min-height="100%", width="100%">

<section class="section dashboard">
  <div class="row">
  <div class="card-body" style="color:#fff">
              <p style="font-size:50px">ONE CALL AWAY <br> EMERGENCY APP</p>

            </div>

            <div class="center" style="text-align:center; color:#fff";><p style="font-size:30px;">ABOUT THE APPLICATION</p><div>
<p>Disasters and other emergencies can strike anywhere without being predicted. Health related emergencies, accidents, crimes are events where help is crucially needed.
<br>
By this application, you can now easily report any accidents, emergencies and crimes by just one click and it will provide immediate emergency response with just one call away. This application also has a special feature that will notify your emergency contacts in just a few clicks incase you yourself are in an emergency situation.</p>
</div> <br> <br>
   
<div class="col-lg-8">
      <div class="row">

        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card" style="background-color:#6266f5">
            <div class="card-body">
              <h5 class="card-title" style="color:#fff"> <span style="color:#fff"> <br>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-activity" style="color:#C71585"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#C71585">Medical Emergency</h6>
  

                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card" style="background-color:#6266f5">
            <div class="card-body">
              <h5 class="card-title" style="color:#fff"> <span style="color:#fff"><br>
              
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-fingerprint"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#32CD32">Police Emergency</h6>
                  

                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card" style="background-color:#6266f5">
            <div class="card-body">
              <h5 class="card-title" style="color:#fff"><span style="color:#fff"> <br>
              
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-droplet"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#ff771d">Fire Emergency</h6>
                  

                </div>
              </div>

            </div>
          </div>

        </div>

        <div class="col-xxl-4 col-md-6">

          <div class="card info-card customers-card" style="background-color:#6266f5">
            <div class="card-body">
              <h5 class="card-title" style="color:#fff"><span style="color:#fff"> <br>
              
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6 style="color:#ff771d">Emergency Contacts</h6>
                  

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