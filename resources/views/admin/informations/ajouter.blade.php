@extends('layouts.back')
@section('title', 'Ajouter des informations')
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
                            <h1 class="page-title">ajouter information</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">Ajouter
                                                        un nouveau information</div>
                                                </div>
                                                <form action="/store_informations" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">


                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>email contact</strong>email_contact</label>
                                                            <input class="form-control" name="email_contact" id="email_contact"
                                                                type="email" required>
                                                        </div>
                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>lien social</strong> lien_social</label>
                                                            <input class="form-control" name="lien_social" id="lien_social"
                                                                type="text" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="customFileSm"> <strong>Image</strong>
                                                                 </label>
                                                            <input class="form-control form-control-sm" name="image" id="customFileSm"
                                                                type="file" required>
                                                        </div>
                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"> <strong>chiffre happyclient</strong> chiffre_happyclient</label>
                                                            <input class="form-control" name="chiffre_happyclient"
                                                                id="chiffre_happyclient" type="number" required>
                                                        </div>
                                                        <div class="mb-3"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>chiffre projetencours</strong>
                                                                </label>
                                                            <input class="form-control" name="chiffre_projetencours"
                                                                id="chiffre_projetencours" type="number" required>
                                                        </div>
                                                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput1">
                                                              <strong> chiffre projetterminer</strong>  </label>
                                                            <input class="form-control" name="chiffre_projetterminer"
                                                                id="chiffre_projetterminer" type="number" required>
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
