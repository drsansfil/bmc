@extends('layouts.back')
@section('title', 'Secteur activité')
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
                            <a class="btn btn-xs btn-red" href="{{ route('admin.project_category.create') }}">
                                Ajouter Secteur d'activité
                            </a>
                        </div>

                        <div class="container">
                            <div class="row">

                                <table id="example" class="table table-striped " style="width:100%">
                                    <thead class="table-danger">
                                        <tr>
                                            <th></th>
                                            <th>Secteur d'activité</th>
                                            <th>description</th>
                                            <th>date</th>
                                            <th>Satuts</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        @foreach ($categories as $index => $category)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('uploads') }}/{{ $category->image }}" style="max-width: 100px;">
                                                </td>
                                                <td>{{ $category->nom }}</td>
                                                <td>
                                                    <div class="text-preview">
                                                        {!! strlen($category->description) > 200 ? substr($category->description, 0, 200) . '...' : $category->description !!}
                                                    </div>
                                                    <div class="text-full" style="display: none;">
                                                        {!! $category->description !!}</div>
                                                    <button class="show-more-button">Voir plus</button>
                                                </td>
                                                <td>{{ $category->created_at }}</td>
                                                <td>{{ $category->status }}</td>

                                                <td>
                                                    <!--button modifier-->
                                                    <a href="{{route('admin.project_category.edit',[$category] )}}" type="button"
                                                        class="btn btn-icon  btn-info"><i class="fa fa-pencil-square-o"></i>
                                                    </a>

                                                    <!--button supprimer-->
                                                    <a href="{{route('admin.project_category.delete', [$category->id] )}}"
                                                        onclick="return confirm('voulez-vous vraiment supprimer cette ')"
                                                        type="button" class="btn btn-icon  btn-danger"
                                                        class="card-body text-center"> <i class="fe fe-trash"></i>
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
@endsection
