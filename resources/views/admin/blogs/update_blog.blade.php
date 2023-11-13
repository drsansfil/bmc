@extends('layouts.back')
@section('title', 'modifier une actualité')
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
                            <h1 class="page-title">Modifier une actulité</h1>
                        </div>
                        <div class="row p-5">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="container bootstrap snippet  ">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="card p-5">
                                                <div class="card-header">
                                                    <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                                        Modifier une actulité</div>
                                                </div>
                                                <form action="/edite_blogs" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <img src="{{ asset('uploads') }}/{{ $blogs->image }}" width="150">
                                                        <input type="hidden" value="{{ $blogs->id }}" name="id_blog">
                                                        <div class="mb-5"><label class="form-label"
                                                                for="exampleFormControlInput1"><strong>Nom</strong></label>
                                                            <input class="form-control" name="nom" id="nom"
                                                                type="text" value="{{ $blogs->nom }}">
                                                        </div>
                                                        <div class="mb-5 ">
                                                            <label class="form-label" for="customFileSm"><strong>Image</strong></label>
                                                            <input class="form-control form-control-sm" name="image"
                                                                id="customFileSm" type="file" >
                                                        </div>
                                                        <div class="mb-5"><label class="form-label" for="exampleTextarea">
                                                            <strong>Description</strong></label>
                                                            <p><textarea class="form-control" name="description" id="exampleTextarea" rows="5" cols = "60"> {{ $blogs->description }} </textarea> </p>
                                                            {{ csrf_field() }}
                                                        </div>

                                                    </div>
                                                    <div>
                                                        <button class="btn btn-red" type="submit">Modifer</button>
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

@section('js')
<script src={{asset('ckeditor/ckeditor.js') }}></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#exampleTextarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
