@extends('layouts.front')
@section('title', __('message.404_2'))
@section('content')
    <div class="wrapper">

        <div class="container">
            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <div class="text-center">
                        <br><br><br><br><br><br><br><br>
                        {!! __('message.404') !!}
                        <br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
