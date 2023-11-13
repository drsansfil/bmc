@extends('layouts.back')
@section('title', 'modifier_profile')
@section('content')
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Profile Admin </h1>

                        </div>
                    </div>
                </div>
                <!--app-content open-->
                <div class="">
                    <div class="">
                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Edit Profile</h1>
                                <div>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Modifier Profile</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW-1 OPEN -->
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">

                                        <div class="card-body">
                                            <div class="text-center chat-image mb-5">
                                                <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                                    <a class="" href="/admin/dashboard"><img alt="avatar"
                                                            src="{{ asset('assetsadmin/images/users/images.png') }}"
                                                            class="brround"></a>
                                                </div>
                                                <div class="main-chat-msg-name">
                                                    <a href="profile.html">
                                                        <h5 class="mb-1 text-dark fw-semibold">Administrateur</h5>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card panel-theme">
                                        <div class="card-header">
                                            <div class="float-start">
                                                <h3 class="card-title">Contact</h3>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="card-body no-padding">
                                            <ul class="list-group no-margin">
                                                <li class="list-group-item d-flex ps-3">
                                                    <div class="social social-profile-buttons me-2">
                                                        <a class="social-icon text-primary" href=""><i
                                                                class="fe fe-mail"></i></a>
                                                    </div>
                                                    <a href="javascript:void(0)" class="my-auto">contact@e-build.tn</a>
                                                </li>

                                                <li class="list-group-item d-flex ps-3">
                                                    <div class="social social-profile-buttons me-2">
                                                        <a class="social-icon text-primary" href=""><i
                                                                class="fe fe-phone"></i></a>
                                                    </div>
                                                    <a href="javascript:void(0)" class="my-auto">+216 25 892 403</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Edit Profile</h3>
                                        </div>
                                        <form action="/edite_profile" method="POST">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">

                                                    <div class="form-group">
                                                        <label for="exampleInputname">Nom</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value=" {{ auth()->user()->name }}" id="exampleInputname"
                                                            placeholder="Nom">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email </label>
                                                    <input type="email" name="email" class="form-control"
                                                        id="exampleInputEmail1" value=" {{ auth()->user()->email }}"
                                                        placeholder="Email ">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label"> Password</label>
                                                    <div class="wrap-input100 validate-input input-group"
                                                        id="Password-toggle">
                                                        <a href="javascript:void(0)"
                                                            class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 form-control" type="password" name="password"
                                                            placeholder="Nouveau Mot de passe">
                                                    </div>
                                                    <!-- <input type="password" class="form-control" value="password"> -->
                                                </div>
                                            </div>

                                            <div class="card-footer text-end">
                                                <button class="btn btn-danger" type="submit">Modifier</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--CONTAINER CLOSED -->

                    </div>
                </div>
            </div>

        @endsection
