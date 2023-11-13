@extends('layouts.back')
@section('title', 'Ajouter_newslettre')
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
                            <h1 class="page-title">
                                ajouter newslettre</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        <a href="/index_newslettre"><button class="btn btn-red"><i class="bi bi-arrow-return-left"></i> retour</button></a>
                                                        Ajouter un nouveau newslettre
                                                    </div>
                                                </div>
                                                <form action="/store_newslettres" method="post">
                                                    @csrf
                                                    <div class="modal-body">

                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>Nom</strong>
                                                                </label>
                                                            <input class="form-control" name="nom" id="nom"
                                                                type="text" required>
                                                        </div>

                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1">
                                                                <strong>email</strong> </label>
                                                            <input class="form-control" name="email" id="email"
                                                                type="email" required>
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
