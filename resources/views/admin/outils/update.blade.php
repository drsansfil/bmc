@extends('layouts.back')
@section('title', 'Modifier un outils')

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
                            <h1 class="page-title">Modifier l'outil</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        <a href="/admin/outils"><button class="btn btn-red"><i
                                                                    class="bi bi-arrow-return-left"></i>
                                                                retour</button></a>
                                                        Modifier l'outil
                                                    </div>
                                                </div>
                                                <form action="/admin/update_outils" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-8 mx-auto">
                                                            <div class="modal-body">
                                                                <div class="mb-5">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlInput1">
                                                                        <strong>Titre </strong>
                                                                    </label>
                                                                    <input class="form-control" name="titre"
                                                                        id="name" type="text"
                                                                        value="{{ $outils->titre }}" required>
                                                                </div>
                                                                Choisir une nouvelle image
                                                                <textarea name="description" class="form-control" rows="3" required style="width: 100%">
                                                                    {{ $outils->description }}
                                                                </textarea>

                                                                <input type="hidden" name="id"
                                                                    value="{{ $outils->id }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="/uploads/{{ $outils->image }}"
                                                            alt="{{ $outils->created_at }}" style="width: 100%;"
                                                            srcset="">
                                                            <hr>
                                                            selectionner une image
                                                            <input class="form-control form-control-sm" name="image"
                                                            id="customFileSm" type="file" >
                                                            <hr>
                                                            <img src="/uploads/{{ $outils->icone }}"
                                                            alt="{{ $outils->created_at }}" style="width: 50px"
                                                            srcset="">
                                                            <hr>
                                                            selectionner une icone (SVG uniquement)
                                                            <input class="form-control form-control-sm" name="icone"
                                                            id="customFileSm" type="file" >
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-red" type="submit">Modifier</button>
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
    @section('js')
        <script src={{ asset('ckeditor/ckeditor.js') }}></script>

        <script>
            ClassicEditor
                .create(document.querySelector('#exampleTextarea'))
                .catch(error => {
                    console.error(error);
                });
        </script>

    @endsection
