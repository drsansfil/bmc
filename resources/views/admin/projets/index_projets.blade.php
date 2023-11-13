@extends('layouts.back')
@section('title', 'projets')
@section('content')
<style>
    .show-more-button{
        border: none;
        color: #1a64a8;
        font-weight: bold;
        background-color: unset;
    }
</style>
    <div class="page">
        <div class="page-main">
        </div>
        <div class="main-content app-content mt-0">
            <div class="side-app">
                <!-- CONTAINER -->
                <div class="main-container container-fluid">
                    <!-- PAGE-HEADER -->

                    <div class="page-header">

                    </div>
                    {{-- composant qui sera charger d'afficher les messages d'erreur et de success --}}
                    @include('admin.composants.alert_success')
                    <!-- PAGE-HEADER END -->
                    <div class="card">
                        <div class="card-header">
                            <!--button ajout-->
                            <a class="btn btn-xs btn-red" href="{{ route('ajout_projet') }}">
                                Ajouter projet
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="container">
                                <div class="row">

                                    <table id="example" class="table table-striped " style="width:100%">
                                        <thead class="table-danger">
                                            <tr>
                                                <th>Image</th>
                                                <th>Nom</th>
                                                <th>Type projet</th>
                                                <th>Description</th>
                                                <th>date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-bordered">
                                            @foreach ($projets as  $project)
                                                <tr>

                                                    <td><img src="{{ asset('uploads') }}/{{ $project->images->first()->url }}"
                                                        style="max-width: 100px;">
                                                    </td>
                                                    <td>{{ $project->nom_projet }}</td>
                                                    <td>{{ $project->type?->nom }}</td>
                                                    <td>
                                                        <div class="text-preview">
                                                            {!! strlen($project->description) > 200 ? substr($project->description, 0, 200) . '...' : $project->description !!}
                                                        </div>
                                                        <div class="text-full" style="display: none;">
                                                            {!! $project->description !!}</div>
                                                        <button class="show-more-button">Voir plus</button>
                                                    </td>
                                                    <td>{{ $project->created_at }}</td>
                                                    <td>
                                                        <!--button modifier-->
                                                        <a href="/edite_projets/{{ $project->id }}" type="button"
                                                            class="btn btn-icon  btn-info"><i
                                                                class="fa fa-pencil-square-o"></i>

                                                        </a>

                                                        <!--button supprimer-->
                                                        <a href="/admin/projet/{{ $project->id }}/delete"
                                                            onclick="return confirm('voulez-vous vraiment supprimer cette')"
                                                            type="button" class="btn btn-icon  btn-danger"><i
                                                                class="fe fe-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
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
<?php Session::forget('success_message'); ?>
@section('js')

    <script>
        $(document).ready(function() {
            $('#example').DataTable();

        });
    </script>
     <script>
        $(document).ready(function () {
            $(".show-more-button").click(function () {
                const textContainer = $(this).parent();
                const textPreview = textContainer.find(".text-preview");
                const textFull = textContainer.find(".text-full");

                if (textPreview.is(":hidden")) {
                    textPreview.show();
                    textFull.hide();
                    $(this).text("Voir plus");
                } else {
                    textPreview.hide();
                    textFull.show();
                    $(this).text("Réduire");
                }
            });
        });
    </script>
@endsection
