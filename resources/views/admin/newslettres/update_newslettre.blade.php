@extends('layouts.back')
@section('title', 'modifier_newslettre')
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
                                <a href="/index_newslettre"><button class="btn btn-red"><i class="bi bi-arrow-return-left"></i> retour</button></a>
                                Modifier newslettre
                            </h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        Modifier newslettre</div>
                                                </div>
                                                <form action="/edite_newslettres" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <input type="hidden" value="{{ $newslettres->id }}"
                                                            name="id_newslettre">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>Nom</strong></label>
                                                            <input class="form-control" name="nom" id="nom"
                                                                type="text" value="{{ $newslettres->nom }}" required>
                                                        </div>

                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"> <strong>email</strong></label>
                                                            <input class="form-control" name="email" id="email"
                                                                type="email" value="{{ $newslettres->email }}" required>
                                                        </div>

                                                    </div>
                                                    <!-- pour id de newslettre -->

                                                    <div class="modal-footer">
                                                        <button class="btn btn-danger" type="submit">Modifier</button>

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
