@extends('layout.nav')

@section('feeds')
    <div class="row justify-content-center">
        @include('components.feeds')
        @include('layout.suggest')
    </div>
@endsection
