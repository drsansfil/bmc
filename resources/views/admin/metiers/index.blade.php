@extends('layouts.back')
@section('title', 'Gestion des Métiers')
@section('content')
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
                        <a class="btn btn-xs btn-red" href="/admin/ajouter_metier">
                            Ajouter un metier
                        </a>
                    </div>
                    <div class="card-body">

                        <div class="container">
                            <div class="row">

                                <table id="example" class="table table-striped " style="width:100%">
                                    <thead class="table-danger">
                                        <tr>
                                            <th>Icone</th>
                                            <th>Image</th>
                                            <th>titre</th>
                                            <th>description</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        @foreach ($metiers as $metier)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('uploads') }}/{{ $metier->icone }}" style="width: 50px;height: 50px;">
                                            </td>
                                            <td>
                                                <img src="{{ asset('uploads') }}/{{ $metier->image }}" style="max-width: 100px;">
                                            </td>
                                            <td>{{ $metier->titre}}</td>
                                            <td>
                                                <div class="text-preview">
                                                    {!! strlen($metier->description) > 200 ? substr($metier->description, 0, 200) . '...' : $metier->description !!}
                                                </div>
                                                <div class="text-full" style="display: none;">
                                                    {!! $metier->description !!}</div>
                                                <button class="show-more-button">Voir plus</button>
                                            </td>
                                            <td>{{ $metier->created_at }}</td>


                                            <td>
                                                <!--button modifier-->
                                                <a href="/admin/update_metier/{{ $metier->id }}" type="button" class="btn btn-icon  btn-info"><i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <!--modal modifier-->

                                                <!--button supprimer-->
                                                <a href="/admin/delete_metier/{{ $metier->id }}" onclick="return confirm('voulez-vous vraiment supprimer ce métier ?')" type="button" class="btn btn-icon  btn-danger"><i class="fe fe-trash"></i>
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
<style>
    .show-more-button{
        border: none;
        color: #1a64a8;
        font-weight: bold;
        background-color: unset;
    }
</style>
@endsection
