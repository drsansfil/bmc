@extends('layouts.back')
@section('title', 'Nos chiffre')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <div class="page">
        <div class="page-main">
        </div>
        <div class="main-content app-content mt-0">
            <div class="side-app">
                <!-- CONTAINER -->
                <div class="main-container container-fluid">
                    <!-- PAGE-HEADER -->
                    <div class="page-header ">

                    </div>

                    {{-- composant qui sera charger d'afficher les messages d'erreur et de success --}}
                    @include('admin.composants.alert_success')
                    <!-- PAGE-HEADER END -->
                    <div class="card">
                        <!-- PAGE-HEADER END -->
                        <div class="card-header">
                            <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                <a href="/index_information">
                                    <button class="btn btn-red" type="button">
                                        <i class="bi bi-arrow-return-left"></i> Retour
                                    </button>
                                </a>
                                Nos chiffres
                            </div>
                        </div>

                        <div class="card">
                            <div class="container">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-sm-12">
                                        <br>
                                        <div class="alert alert-default">
                                            <i class="bi bi-exclamation-triangle"></i>
                                            Vous etes sur le point de configurer les chiffres qui seront afficher a la page
                                            d'acceuil.
                                        </div>
                                        @if ($informations)
                                            <div>

                                            </div>
                                            <form action="/update_chiffres" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="mb-3"><label class="form-label"
                                                                    for="exampleFormControlInput1">Nos clients
                                                                </label>
                                                                <input class="form-control" name="client"
                                                                    value="{{ $informations->client }}" type="number">
                                                            </div>
                                                            <div class="mb-3"><label class="form-label"
                                                                    for="exampleFormControlInput1">Nos partenaires
                                                                </label>
                                                                <input class="form-control" name="partenaire"
                                                                    value="{{ $informations->partenaire }}" type="number">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-3"><label class="form-label"
                                                                    for="exampleFormControlInput1">Nos projets
                                                                </label>
                                                                <input class="form-control" name="projet"
                                                                    value="{{ $informations->projet }}" type="number">
                                                            </div>
                                                            <div class="mb-3"><label class="form-label"
                                                                    for="exampleFormControlInput1">Nos secteurs
                                                                </label>
                                                                <input class="form-control" name="secteur"
                                                                    value="{{ $informations->secteur }}" type="number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-red" type="submit">Mettre a jour</button>

                                                </div>
                                            </form>
                                        @else
                                            <p class="p-5">
                                                Veuillez cliquer sur le bouton ci-dessous pour demarrer la configuration.
                                                <br>
                                            <div class="text-center">
                                                <form action="/start_informations" method="post">
                                                    @csrf
                                                    <button class="btn btn-red" type="submit"><i
                                                            class="bi bi-play-circle"></i> Demarrer la
                                                        configuration.</button>
                                                </form>
                                            </div>
                                            </p>
                                        @endif
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- ROW-2 -->
                </div>
            </div>
        </div>
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    @endsection
