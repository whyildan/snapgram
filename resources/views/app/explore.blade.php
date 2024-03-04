@extends('layout.nav')

@section('feeds')
    <div class="row gx-1 gy-1">
        @for($i = 0; $i <= 100; $i++)
            <div class="col-4">
                <a href="/p" target="_blank" class="text-decoration-none">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="img-content img-fluid shadow-1-strong"
                        alt="Boat on Calm Water"
                    />
                </a>
            </div>
        @endfor
    </div>
@endsection
