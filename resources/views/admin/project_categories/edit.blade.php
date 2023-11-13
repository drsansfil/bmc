@extends('layouts.back')
@section('title', 'Modifier Secteur activité')

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
                            <h1 class="page-title">Modifier le Secteur d'activité</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <a href="/admin/project_category">
                                                        <button class="btn btn-red" type="button">
                                                            <i class="bi bi-arrow-return-left"></i> Retour
                                                        </button>
                                                    </a> &nbsp; &nbsp;
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        Modifier
                                                        un Secteur d'activité</div>
                                                </div>
                                                <form
                                                    action="{{ route('admin.project_category.update', [$projectCategory->id]) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <label class="form-label" for="exampleFormControlInput1">
                                                                    <strong>Image d'illustration</strong>
                                                                </label>
                                                                <input class="form-control" name="image" type="file">
                                                                <div class="mb-5"><label class="form-label"
                                                                        for="exampleFormControlInput1">
                                                                        <strong>Nom du Secteur d'activité</strong>
                                                                    </label>
                                                                    <input class="form-control" name="nom"
                                                                        id="name" type="text"
                                                                        value="{{ old('nom', $projectCategory->nom) }}"
                                                                        required>
                                                                </div>
                                                                <div class="mb-5"><label class="form-label"
                                                                        for="exampleFormControlInput1">
                                                                        <strong>Decription</strong>
                                                                    </label>
                                                                    <p>
                                                                        <textarea class="form-control" name="description" id="exampleTextarea" rows="3" required>
                                                                        {{ old('description', $projectCategory->description) }}
                                                                    </textarea>
                                                                    </p>

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <img src="{{ asset('uploads') }}/{{ $projectCategory->image }}"
                                                                    style="width: 100%;">
                                                            </div>
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
