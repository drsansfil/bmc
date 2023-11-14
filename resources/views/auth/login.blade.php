

@extends('layouts.app')

@section('content')
    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">
        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{ asset('assetsadmin/images/loader.svg')}}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">

                </div>
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center">
                                <img src="{{ asset('/img/svg/consultingpress-logo-dark-green.png')}}" class="header-brand-img" alt="">
                            </div>
                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="mot de passe" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn btn-red">
                                                {{ __('Login') }}
                                            </button>


                                        </div>
                                        {{-- <label class="login-social-icon"><span>Login with Social</span></label>
                                        <div class="d-flex justify-content-center ">

                                            <a href="">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fa fa-linkedin text-danger"></i>
                                                </div>
                                            </a>
                                            <a href="">
                                                <div class="social-login me-4 text-center ">
                                                    <i class="fa fa-facebook text-danger"></i>
                                                </div>
                                            </a>

                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
@endsection
