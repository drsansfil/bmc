@extends('layouts.back')
@section('title', 'Ajouter_projet')

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
                            <h1 class="page-title">ajouter projet</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        <a href="/index_projets"><button class="btn btn-red"><i
                                                                    class="bi bi-arrow-return-left"></i> retour</button></a>
                                                        Ajouter un nouveau projet
                                                    </div>
                                                </div>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <form action="/store_projets" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="mb-5"><label class="form-label"
                                                                for="exampleFormControlInput1">
                                                                <strong>nom projet</strong>
                                                            </label>
                                                            <input class="form-control" name="nom_projet" id="name"
                                                                type="text" required>

                                                        </div>
                                                        <div class="mb-5"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>type
                                                                    projet</strong></label>
                                                            <!-- <input class="form-control" name="type_projet" id="name"
                                                                    type="text" required> -->
                                                            <select class="form-select" name="type_projet"
                                                                aria-label="Default select example" required>
                                                                <option value="">Choisir</option>
                                                                @foreach ($projectCategories as $cat)
                                                                    <option value="{{ $cat->id }}">
                                                                        {{ $cat->nom }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="mb-5 ">
                                                            <label class="form-label"
                                                                for="customFileSm"><strong>Image</strong>
                                                            </label>
                                                            <input class="form-control form-control-sm" name="image[]"
                                                                id="customFileSm" type="file" required multiple>
                                                        </div>

                                                        <div class="mb-5"><label class="form-label" for="exampleTextarea">
                                                                <strong>Description</strong> </label>
                                                            <p>
                                                                <textarea class="form-control" name="description" id="exampleTextarea" rows="3" required> </textarea>
                                                            </p>
                                                            {{ csrf_field() }}
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-red" type="submit">Ajouter</button>
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
