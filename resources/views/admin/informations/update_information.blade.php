@extends('layouts.back')
@section('title', 'modifier_information')
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
                            <h1 class="page-title">Modifier information</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        Modifier information</div>
                                                </div>
                                                <form action="/edite_informations" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <img src="{{ asset('uploads') }}/{{ $informations->image }}"
                                                            width="200">
                                                        <input type="hidden" value="{{ $informations->id }}"
                                                            name="id_information">
                                                        <!--form ajout-->
                                                        <div class="mb-3">
                                                            <label class="form-label" for="customFileSm"><strong>Image</strong></label>
                                                            <input class="form-control form-control-sm" name="image"
                                                                id="customFileSm" type="file" accept="image/*">
                                                        </div>

                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>email contact</strong></label>
                                                            <input class="form-control  " name="email_contact"
                                                                id="email_contact" type="email"
                                                                value="{{ $informations->email_contact }}">
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <div class="mb-3"><label class="form-label"
                                                                        for="exampleFormControlInput1">
                                                                        <i class="bi bi-facebook"></i>
                                                                        <strong>Facebook</strong></label>
                                                                    <input class="form-control" name="facebook"
                                                                    value="{{ $informations->facebook }}"
                                                                        id="lien_social"
                                                                        placeholder="Votre url facebook" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="mb-3"><label class="form-label"
                                                                        for="exampleFormControlInput1">
                                                                        <i class="bi bi-instagram"></i>
                                                                        <strong>Instagram</strong></label>
                                                                    <input class="form-control" name="instagram"
                                                                    value="{{ $informations->instagram }}"
                                                                        id="lien_social"
                                                                        placeholder="Votre url insagram" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="mb-3"><label class="form-label"
                                                                        for="exampleFormControlInput1">
                                                                        <i class="bi bi-linkedin"></i>
                                                                        <strong>Linkedin</strong></label>
                                                                    <input class="form-control" name="linkedin"
                                                                    placeholder="Votre url Linkedin"
                                                                    value="{{ $informations->linkedin}}"
                                                                        id="lien_social" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="mb-3"><label class="form-label"
                                                                        for="exampleFormControlInput1">
                                                                        <i class="bi bi-envelope"></i>
                                                                        <strong>Email</strong></label>
                                                                    <input class="form-control" name="email_contact"
                                                                    value="{{ $informations->email_contact}}"
                                                                    placeholder="Votre adresse email"
                                                                        id="lien_social" type="text">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>chiffre happyclient</strong></label>
                                                            <input class="form-control" name="chiffre_happyclient"
                                                                id="chiffre_happyclient" type="number"
                                                                value="{{ $informations->chiffre_happyclient }}">
                                                        </div>

                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>chiffre projetencours</strong></label>
                                                            <input class="form-control" name="chiffre_projetencours"
                                                                id="chiffre_projetencours" type="number"
                                                                value="{{ $informations->chiffre_projetencours }}">
                                                        </div>



                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1">
                                                                <strong> chiffre projetterminer</strong></label>
                                                            <input class="form-control" name="chiffre_projetterminer"
                                                                id="chiffre_projetterminer" type="number"
                                                                value="{{ $informations->chiffre_projetterminer }}">
                                                        </div>

                                                    </div>
                                                    <!-- pour id de information -->


                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger" type="submit">Modifier</button>

                                                    </div>
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
