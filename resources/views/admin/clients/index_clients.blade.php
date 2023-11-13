@extends('layouts.back')
@section('title', 'clients')
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
                            <a class="btn btn-xs btn-red" href="{{ route('ajout_client') }}">
                                Ajouter un Partenaires
                            </a>
                        </div>

                        <div class="container">
                            <div class="row">

                                <table id="example" class="table table-striped " style="width:100%">
                                    <thead class="table-danger">
                                        <tr>
                                            <th>logo</th>
                                            <th>Nom du Partenaires</th>
                                            <th>email</th>
                                            <th>date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        @foreach ($clients as $index => $c)
                                            <tr>

                                                <td><img src="{{ asset('uploads') }}/{{ $c->logo }}" style="max-width: 50%;max-height: 70px;">
                                                </td>
                                                <td>{{ $c->nom_client }}</td>
                                                <td>{{ $c->email }}</td>
                                                <td>{{ $c->created_at }}</td>

                                                <td>
                                                    <!--button modifier-->
                                                    <a href="/edite_clients/{{ $c->id }}" type="button"
                                                        class="btn btn-icon  btn-info"><i class="fa fa-pencil-square-o"></i>
                                                    </a>

                                                    <!--button supprimer-->
                                                    <a href="/admin/client/{{ $c->id }}/delete"
                                                        onclick="return confirm('voulez-vous vraiment supprimer ce Partenaires ')"
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
@endsection
