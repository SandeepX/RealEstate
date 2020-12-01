<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.partials.head')

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
    <div class="dt-loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
        </svg>
    </div>
</div>
<!-- /loader -->
<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">

        <!-- Login Container -->
        <div class="dt-login--container dt-forgot-password">

            <!-- Login Content -->
            <div class="dt-login__content-wrapper">

                <!-- Login Content Section -->
                <div class="dt-login__content">

                    <!-- Login Content Inner -->
                    <div class="dt-login__content-inner">

                        <!-- Brand logo -->
                        <span class="dt-login__logo">
              <a class="dt-brand__logo-link" href="index.html">
                  <img class="dt-brand__logo-img" src="{{asset('backend/assets/images/logo-white.png')}}" alt="Drift">
              </a>
            </span>
                        <!-- /brand logo -->
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                    @endif


                        <!-- Form -->
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                            <!-- Form Group -->
                            <div class="form-group search-box right-side-icon mw-100">
                                <label class="sr-only" for="email-1">Email address</label>
                                <input type="search" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email-1" aria-describedby="email-1"
                                       placeholder="Enter email">
                                <span class="search-icon"><i class="icon icon-mail icon-lg"></i></span>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <!-- /form group -->

                            <p class="mb-8">Don't remember your email? &nbsp;
                                <a class="small" href="javascript:void(0)">Contact Support.</a>
                            </p>

                            <!-- Form Group -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary text-uppercase">Reset Password</button>
                            </div>
                            <!-- /form group -->

                        </form>
                        <!-- /form -->

                    </div>
                    <!-- /login content inner -->

                </div>
                <!-- /login content section -->

            </div>
            <!-- /login content -->

        </div>
        <!-- /login container -->

    </div>
</div>
<!-- /root -->

@include('admin.partials.scripts')

</body>
</html>