@extends('layouts.back')
@section('title', 'Données du formulaire')
@section('content')
    <style>
        /* Cacher la div par défaut */
        #maDiv {
            display: none;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <div class="page">
        <div class="page-main">
        </div>
        <div class="main-content app-content mt-0">
            <div class="side-app">
                <!-- CONTAINER -->
                <div class="main-container container-fluid">
                    <!-- PAGE-HEADER -->
                    <div class="page-header ">

                    </div>
                    {{-- composant qui sera charger d'afficher les messages d'erreur et de success --}}
                    @include('admin.composants.alert_success')

                    <!-- PAGE-HEADER END -->
                    <div class="card">
                        <!-- PAGE-HEADER END -->
                        <div class="card-header row">
                            <div class="col-sm-6">
                                <div class="card-title" _msthash="3392506" _msttexthash="591578">
                                    Données du formulaire de contact.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <form action="/filtre-date-contact" method="post">
                                    @csrf
                                    <table style="width: 100%;">
                                        <tr>
                                            <td>
                                                <input type="date" name="date" class="form-control" id="date"
                                                    required>
                                            </td>
                                            <td>&nbsp;&nbsp;
                                                <button class="btn btn-red" type="submit">Voir</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="container">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <table id="example" class="table table-striped " style="width:100%">
                                    <thead class="table-danger">
                                        <tr>
                                            <th><i class="bi bi-person"></i> Nom</th>
                                            <th><i class="bi bi-envelope"></i> Email</th>
                                            <th><i class="bi bi-telephone"></i> Téléphone</th>
                                            <th><i class="bi bi-file-earmark-richtext"></i> Message</th>
                                            <th><i class="bi bi-chat-square-dots"></i> Motifs</th>
                                            <th><i class="bi bi-calendar3"></i> date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        @forelse ($contacts as $item)
                                            <tr data-id="{{ $item->id }}">
                                                <td>{{ $item->nom }}</td>
                                                <td>
                                                    <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                                                </td>
                                                <td>{{ $item->telephone }}</td>
                                                <td>{{ $item->message }}</td>
                                                <td>{{ $item->site_web }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y \à H:i:s') }}
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-supprimer"
                                                        data-id="{{ $item->id }}">
                                                        <i class="fe fe-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8">
                                                    <div class="alert alert-warning">
                                                        Aucun contact enregistré
                                                        @isset($filtre)
                                                            le <b>{{ $filtre }}</b>
                                                        @endisset
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>

                                </table>
                                <div>
                                    <div style="text-align: right;">
                                        {!! $contacts->links() !!}
                                    </div>
                                </div>
                                <hr>
                                <form method="post" action="/delete_all_contact">
                                    @csrf
                                    <input type="checkbox" name="" id="maCheckbox" required id="voir_option">
                                    Afficher les options
                                    avancées.
                                    <div id="maDiv">
                                        <div class="alert alert-warning text-center" style="color: black !important;">
                                            <b>Attention :</b> En cochant cette case, tous les enregistrements seront
                                            définitivement supprimés. Cette action est irréversible. Veuillez vous assurer
                                            que vous avez sauvegardé toutes les données importantes avant de procéder.
                                            <br>
                                            <input type="checkbox" name="" required id="maCheckbox2"> <b>J'ai compris
                                                . </b><br>
                                            <button class="btn btn-red btn-sm" type="submit" id="monBouton" disabled>
                                                <i class="fe fe-trash"></i>
                                                Supprimer tous les enregistrements..
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- ROW-2 -->
                </div>
            </div>
        </div>
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            var maCheckbox = document.getElementById('maCheckbox');
            var maDiv = document.getElementById('maDiv');
            maCheckbox.addEventListener('change', function() {
                if (maCheckbox.checked) {
                    maDiv.style.display = 'block';
                } else {
                    maDiv.style.display = 'none';
                }
            });
        </script>
        <script>
            var maCheckbox2 = document.getElementById('maCheckbox2');
            var monBouton = document.getElementById('monBouton');
            maCheckbox2.addEventListener('change', function() {
                monBouton.disabled = !maCheckbox2.checked;
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.btn-supprimer').on('click', function() {
                    var itemId = $(this).data('id');
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/supprimer_ligne_contact/' + itemId,
                        type: 'DELETE',
                        data: {
                            _token: csrfToken
                        },
                        success: function(data) {
                            if (data.success) {
                                $('tr[data-id="' + itemId + '"]').remove();
                            } else {
                                console.error(data.error);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
            });
        </script>

    @endsection
