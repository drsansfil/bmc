@extends('layouts.back')
@section('title', 'Modifier une analyse')

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
                            <h1 class="page-title">Modifier une analyse</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        <a href="/admin/analyse"><button class="btn btn-red"><i
                                                                    class="bi bi-arrow-return-left"></i>
                                                                retour</button></a>
                                                        Modifier une analyse
                                                    </div>
                                                </div>
                                                <form action="/admin/update_analyse" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="modal-body">
                                                                @include('admin.composants.alert_success')
                                                                <div class="mb-5">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlInput1">
                                                                        <strong>Titre ( Fr )</strong>
                                                                    </label>
                                                                    <input class="form-control" name="titre"
                                                                        id="name" type="text"
                                                                        value="{{ $analyse->titre }}" required>
                                                                </div>
                                                                <div class="mb-5">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlInput1">
                                                                        <strong>Titre ( En )</strong>
                                                                    </label>
                                                                    <input class="form-control" name="titre_en"
                                                                        id="name" type="text"
                                                                        value="{{ $analyse->titre_en }}" required>
                                                                </div>
                                                                Choisir une nouvelle image
                                                                <input class="form-control" name="image" type="file"
                                                                accept="image/*">

                                                                <input type="hidden" name="id"
                                                                    value="{{ $analyse->id }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <img src="{{ asset('uploads') }}/{{ $analyse->image }}"
                                                                style="width: 100%;">

                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
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
