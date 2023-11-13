@extends('layouts.back')
@section('title', 'Configuration de la page accueil')
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

                    @if ($message = Session::get('mesage'))
                        <div class="col-xl-3 col-sm-6">
                            <div class="card border p-0 pb-3">
                                <div class="card-header border-0 pt-3">
                                    <div class="card-options">
                                        <a href="javascript:void(0)" class="card-options-remove"
                                            data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60"
                                            width="60" viewBox="0 0 24 24">
                                            <path fill="#13bfa6"
                                                d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                opacity=".99" />
                                            <path fill="#71d8c9"
                                                d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                        </svg></span>
                                    <h4 class="h4 mb-0 mt-3">Success</h4>
                                    <p class="card-text">Sent successfully</p>
                                </div>
                                <div class="card-footer text-center border-0 pt-0">
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
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
                                Configuration de la page d'accueil
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
                                        <div class="alert alert-default">
                                            <i class="bi bi-exclamation-triangle"></i>
                                            Vous etes sur le point de configurer la vidéo et le texte qui seront afficher
                                            sur la page d'accueil du site.
                                        </div>
                                        @if ($informations)
                                            <div>

                                            </div>
                                            <form action="/config_accueil" method="post" enctype="multipart/form-data"
                                                id="uploadForm">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3"><label class="form-label"
                                                            for="exampleFormControlInput1"><strong>Message
                                                                d'accueil</strong></label>
                                                        <textarea name="home_message" class="form-control" id=""rows="3">{{ $informations->home_message }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="customFileSm"> <strong>Video /
                                                                Image</strong>
                                                        </label>
                                                        <input class="form-control form-control-sm" name="media"
                                                            id="customFileSm" type="file" accept="image/*, video/*">
                                                        <progress id="uploadProgress" value="0" max="100"
                                                            style="width: 100%;"></progress>
                                                        <span class="text-danger small">(50 Mo Maximun)</span>
                                                    </div>
                                                </div>
                                                <div id="errorContainer" style="color: red;"></div>
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
                                        <div class="p-3 alert" style="background-color: #1a64a8;color: white">
                                            <div class="text-center p-2">
                                                <h5><b>INFORMATIONS</b></h5>
                                            </div>
                                            @if ($informations)
                                                <div>
                                                    <b>Message :</b> {{ $informations->home_message }} <br><br>
                                                    @if ($informations->video != '')
                                                        @php
                                                            $mediaUrl = asset('uploads/' . $informations->video);
                                                        @endphp
                                                        @if (pathinfo($informations->video, PATHINFO_EXTENSION) === 'mp4' ||
                                                                pathinfo($informations->video, PATHINFO_EXTENSION) === 'avi' ||
                                                                pathinfo($informations->video, PATHINFO_EXTENSION) === 'flv' ||
                                                                pathinfo($informations->video, PATHINFO_EXTENSION) === 'webm' ||
                                                                pathinfo($informations->video, PATHINFO_EXTENSION) === 'mkv' ||
                                                                pathinfo($informations->video, PATHINFO_EXTENSION) === 'ogg')
                                                            <video style="width: 100%" controls>
                                                                <source src="{{ $mediaUrl }}" type="video/mp4">
                                                                Votre navigateur ne prend pas en charge la vidéo.
                                                            </video>
                                                        @else
                                                            <img src="{{ $mediaUrl }}" alt="Image">
                                                        @endif
                                                    @endif
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
        <script>
            document.getElementById('uploadForm').addEventListener('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                axios.post('/config_accueil', formData, {
                    onUploadProgress: function(progressEvent) {
                        var percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent
                            .total);
                        document.getElementById('uploadProgress').value = percentCompleted;
                    }
                }).then(function(response) {
                    console.log('Mise à jour réussie. Réponse du serveur : ' + response.data.message);
                    if (response.data.message === 'OK') {
                        location.reload();
                    }
                }).catch(function(error) {
                    if (error.response && error.response.status === 422) {
                        var errors = error.response.data.errors;
                        var errorContainer = document.getElementById('errorContainer');
                        errorContainer.innerHTML = ''; // Efface les erreurs précédentes

                        for (var field in errors) {
                            if (errors.hasOwnProperty(field)) {
                                var errorMessages = errors[field];
                                for (var i = 0; i < errorMessages.length; i++) {
                                    var errorMessage = errorMessages[i];
                                    errorContainer.innerHTML += errorMessage + '<br>';
                                }
                            }
                        }
                    } else {
                        console.log('Erreur inattendue : ' + error.message);
                    }
                });
            });
        </script>



    @endsection
