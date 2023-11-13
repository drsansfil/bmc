@extends('layouts.back')
@section('title', 'informations')
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
                        @if ($informations)
                            <div class="card-header">
                                <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                    <a href="/config_accueil">
                                        <button class="btn btn-red" type="button">
                                            <i class="bi bi-house"></i> Configurer l'accueil
                                        </button>
                                    </a>
                                    <a href="/config_mail">
                                        <button class="btn btn-red" type="button">
                                            <i class="bi bi-envelope"></i> Configurer le Mail
                                        </button>
                                    </a>
                                    <a href="/directeur">
                                        <button class="btn btn-red" type="button">
                                            Mot du directeur
                                        </button>
                                    </a>
                                </div>
                            </div>
                        @endif
                        <!-- PAGE-HEADER END -->
                        <div class="card-header">
                            <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                Configuration des informations.
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
                                    <div class="col-sm-8">
                                        @if ($informations)
                                            <form action="/store_informations" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    {{-- <div class="mb-3"><label class="form-label"
                                                            for="exampleFormControlInput1"><strong>email
                                                                contact</strong></label>
                                                        <input class="form-control" name="email_contact"
                                                            value="{{ $informations->email_contact }}" id="email_contact"
                                                            type="email">
                                                    </div> --}}
                                                    <div class="mb-3"><label class="form-label"
                                                            for="exampleFormControlInput1"><strong>Contact
                                                                Téléphone</strong></label>
                                                        <input class="form-control" name="phone_contact" id="phone_contact"
                                                            value="{{ $informations->contacts }}" type="text"><span
                                                            class="text-danger small">(Veuillez séparer
                                                            chaque numéro par un virgule (,))</span>
                                                    </div>



                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="mb-3"><label class="form-label"
                                                                    for="exampleFormControlInput1">
                                                                    <i class="bi bi-facebook"></i>
                                                                    <strong>Facebook</strong></label>
                                                                <input class="form-control" name="facebook"
                                                                    id="lien_social"
                                                                    placeholder="Votre url facebook"
                                                                    value="{{ $informations->facebook }}" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="mb-3"><label class="form-label"
                                                                    for="exampleFormControlInput1">
                                                                    <i class="bi bi-instagram"></i>
                                                                    <strong>Instagram</strong></label>
                                                                <input class="form-control" name="instagram"
                                                                    id="lien_social"
                                                                    placeholder="Votre url insagram"
                                                                    value="{{ $informations->instagram }}" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="mb-3"><label class="form-label"
                                                                    for="exampleFormControlInput1">
                                                                    <i class="bi bi-linkedin"></i>
                                                                    <strong>Linkedin</strong></label>
                                                                <input class="form-control" name="linkedin"
                                                                placeholder="Votre url Linkedin"
                                                                    id="lien_social"
                                                                    value="{{ $informations->linkedin }}" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="mb-3"><label class="form-label"
                                                                    for="exampleFormControlInput1">
                                                                    <i class="bi bi-envelope"></i>
                                                                    <strong>Email</strong></label>
                                                                <input class="form-control" name="email"
                                                                placeholder="Votre adresse email"
                                                                    id="lien_social"
                                                                    value="{{ $informations->email }}" type="text">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="mb-3"><label class="form-label"
                                                            for="exampleFormControlInput1"><strong>Adresse 1</strong>
                                                            Localisation</label>
                                                        <input class="form-control" name="adresse" id="adresse"
                                                            value="{{ $informations->adresse }}" type="text">
                                                    </div>
                                                    <div class="mb-3"><label class="form-label"
                                                        for="exampleFormControlInput1"><strong>Adresse 2</strong>
                                                        Localisation</label>
                                                    <input class="form-control" name="adresse2" id="adresse2"
                                                        value="{{ $informations->adresse2 }}" type="text">
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
                                    <div class="col-sm-4">
                                        <div style="background-color: #1a64a8;color: white" class="p-3 alert">
                                            <div class="text-center p-2">
                                                <h5><b>INFORMATIONS</b></h5>
                                            </div>
                                            @if ($informations)
                                                <div>
                                                    <b><i class="bi bi-envelope"></i> Email :</b>
                                                    {{ $informations->email_contact }} <br> <br>
                                                    <b><i class="bi bi-telephone"></i> Téléphone :</b> <br>
                                                    @php
                                                        $numeros = explode(',', $informations->contacts);
                                                        $n = 1;
                                                    @endphp
                                                    <div class="pl-3">
                                                        @forelse ($numeros as $item)
                                                            &nbsp;&nbsp;&nbsp;&nbsp; <i><u>Ligne {{ $n++ }}</u> :
                                                            </i> {{ $item }} <br>
                                                        @empty
                                                        @endforelse
                                                    </div>
                                                    <br>
                                                    <b><i class="bi bi-facebook"></i> </b> {{ $informations->facebook }} <br>
                                                    <b><i class="bi bi-linkedin"></i> </b> {{ $informations->linkedin }} <br>
                                                    <b><i class="bi bi-instagram"></i> </b> {{ $informations->instagram }} <br>
                                                    <b><i class="bi bi-envelope"></i> </b> {{ $informations->email }} <br>
                                                    {{ $informations->lien_social }} <br><br>
                                                    <b><i class="bi bi-geo-alt"></i> Adresse :</b>
                                                    {{ $informations->adresse }} <br>

                                                </div>
                                            @else
                                                <div class="alert alert-warning">
                                                    Veuillez demarrer la configuration pour avoir une visualisation.
                                                </div>
                                            @endif
                                        </div>
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
    @section('js')

        <script>
            $(document).ready(function() {
                $('#example').DataTable();

            });
        </script>

    @endsection
