@extends('layouts.back')
@section('title', 'Information du directeur')
@section('content')
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        {{-- composant qui sera charger d'afficher les messages d'erreur et de success --}}
                    @include('admin.composants.alert_success')
                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Modifier les informations du directeur</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        Modifier les informations du directeur</div>
                                                </div>
                                                <form action="/edite_directeur" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <input class="form-control" name="nom"
                                                                            placeholder="Nom du directeur"
                                                                            value="{{ $informations->nom }}" type="text">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input class="form-control" name="poste"
                                                                            placeholder="Intitule du poste"
                                                                            value="{{ $informations->poste }}" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3"><label class="form-label"
                                                                        for="exampleFormControlInput1"><strong>
                                                                            Mot du directeur</strong></label>
                                                                    <textarea name="description" class="form-control" id=""rows="3">{{ $informations->description }}</textarea>
                                                                </div>
                                                                <div class="mb-3"><label class="form-label"
                                                                        for="exampleFormControlInput1"><strong>
                                                                            Photo du directeur</strong></label>
                                                                    <input class="form-control" name="photo" placeholder="Photo"
                                                                        value="{{ $informations->image }}" type="file">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3"><label class="form-label"
                                                                                for="exampleFormControlInput1">
                                                                                <i class="bi bi-facebook"></i>
                                                                                <strong>Facebook</strong></label>
                                                                            <input class="form-control" name="facebook"
                                                                                id="lien_social" placeholder="Votre url facebook"
                                                                                value="{{ $informations->facebook }}"
                                                                                type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3"><label class="form-label"
                                                                                for="exampleFormControlInput1">
                                                                                <i class="bi bi-instagram"></i>
                                                                                <strong>Instagram</strong></label>
                                                                            <input class="form-control" name="instagram"
                                                                                id="lien_social" placeholder="Votre url insagram"
                                                                                value="{{ $informations->instagram }}"
                                                                                type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3"><label class="form-label"
                                                                                for="exampleFormControlInput1">
                                                                                <i class="bi bi-linkedin"></i>
                                                                                <strong>Linkedin</strong></label>
                                                                            <input class="form-control" name="linkedin"
                                                                                placeholder="Votre url Linkedin" id="lien_social"
                                                                                value="{{ $informations->linkedin }}"
                                                                                type="text">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3"><label class="form-label"
                                                                                for="exampleFormControlInput1">
                                                                                <i class="bi bi-envelope"></i>
                                                                                <strong>Email</strong></label>
                                                                            <input class="form-control" name="email"
                                                                                placeholder="Votre adresse email" id="lien_social"
                                                                                value="{{ $informations->email }}" type="text">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 p-2">
                                                                @if ($informations->image == "")
<img src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png" alt="" srcset="">
                                                                @else
                                                                <img src="{{ asset('uploads/' . $informations->image) }}" style="max-width: 100%" alt="photo" srcset="">
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- pour id de information -->


                                                    <div class="modal-footer">
                                                        <button class="btn btn-red" type="submit">Modifier</button>

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
