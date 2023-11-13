@extends('layouts.back')
@section('title', 'modifier_client')
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
                            <h1 class="page-title">Modifier le Partenaires</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        Modifier le Partenaires</div>
                                                </div>
                                                <div class="row p-5">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                                        <div class="container bootstrap snippet  ">
                                                            <div class="row justify-content-center">
                                                                <div class="col-lg-12">
                                                                    <div class="card p-5">
                                                                        <div class="card-header">
                                                                            <div class="card-title" _msthash="3392506"
                                                                                _msttexthash="591578">
                                                                                Modifier le Partenaires</div>
                                                                        </div>

                                                                        <form action="/edite_clients" method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="modal-body">
                                                                                <img src="{{ asset('uploads') }}/{{ $clients->logo }}"
                                                                                    width="150">
                                                                                <input type="hidden"
                                                                                    value="{{ $clients->id }}"
                                                                                    name="id_client">
                                                                                <!--form ajout-->
                                                                                <div class="mb-3">
                                                                                    <label class="form-label"
                                                                                        for="customFileSm"><strong>logo</strong></label>
                                                                                    <input
                                                                                        class="form-control form-control-sm"
                                                                                        name="logo" id="customFileSm"
                                                                                        type="file" accept="image/*" >
                                                                                </div>

                                                                                <div class="mb-3"><label
                                                                                        class="form-label"
                                                                                        for="exampleFormControlInput1"><strong>Nom du Partenaires</strong></label>
                                                                                    <input class="form-control"
                                                                                        name="nom_client" id="nom_client"
                                                                                        type="text"
                                                                                        value="{{ $clients->nom_client }}" required>
                                                                                </div>

                                                                                <div class="mb-3"><label
                                                                                        class="form-label"
                                                                                        for="exampleFormControlInput1"><strong>Email</strong></label>
                                                                                    <input class="form-control"
                                                                                        name="email" id="email"
                                                                                        type="email"
                                                                                        value="{{ $clients->email }}"   required>
                                                                                </div>


                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button class="btn btn-red"
                                                                                    type="submit">Modifier</button>

                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endsection
                            <?php Session::forget('success_message'); ?>
