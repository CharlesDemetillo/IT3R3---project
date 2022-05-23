@extends('layouts.app')
@section('title','Account Created')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="pub/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">OCAE APP</span>
                </a>
              </div><!-- End Logo -->
              <div class="card mb-3">
                <div class="card-body">                  
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Account Successfully Created!</h5>
                    <p class="text-center small">Please add more details to finish setting up your account.</p>
                  </div>
                  <form class="row g-3" enctype="multipart/form-data" id="image-upload">
                    <input type="hidden" class="form-control" id="id">
                    <div class="col-6">
                      <label for="age" class="form-label">Age*</label>
                      <input type="number" name="age" class="form-control" id="age">
                    </div>
                    <div class="col-6">
                      <label for="contact_no" class="form-label">Contact Number*</label>
                      <input type="number" name="contact_no" class="form-control" id="contact_no">
                    </div>
                    <div class="col-12">
                      <label for="address" class="form-label">Address*</label>
                      <input type="text" name="address" class="form-control" id="address">
                    </div>
                    <div class="col-12">
                      <label for="profile_picture">Profile Picture</label>
                      <input name="profile_picture" type="file" class="form-control" id="profile_picture">
                    </div>
                    <input type="hidden" class="form-control" id="contact-id">
                    <!--<div class="col-12">
                      <label for="contact_name" class="form-label">Emergency Contact Name*</label>
                      <input type="text" name="contact_name" class="form-control" id="contact_name">
                    </div>
                     <div class="col-6">
                      <label for="contact">Contact Number*</label>
                      <input name="contact" type="number" class="form-control" id="contact">
                    </div>
                    <div class="col-6">
                      <label for="relationship_to_user">Relationship*</label>
                      <input name="relationship_to_user" type="text" class="form-control" id="relationship_to_user">
                    </div>-->
                    <div class="col-12">
                      <button id="submit" class="btn btn-primary w-100" type="submit">Continue</button>
                    </div> 
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection
@section('scripts')
    <script>
        $(document).ready(
            function (e) {
                // Add/Create Data
                $(document).on('submit','#image-upload', function(e) {
                    e.preventDefault();
                    let addformData = new FormData($('#image-upload')[0]);
                        $.ajax(
                            {
                                type:'POST',
                                url: "{{ url('/api/account/create') }}",
                                data: addformData,
                                cache: false,
                                dataType: 'json',
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    var dialog = bootbox.dialog({
                                        centerVertical: true,
                                        title: 'Saving Information',
                                        message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>'
                                    });
                                    dialog.init(function(){
                                        setTimeout(function(){
                                            dialog.find('.bootbox-body').html('Information Successfully saved!');
                                            window.location.reload();
                                        }, 3000);
                                    });
                                },
                                error: function(data){
                                console.log(data);
                                }
                            }
                        );
                    }
                );
               
            } 
        );

    </script>
@endsection

