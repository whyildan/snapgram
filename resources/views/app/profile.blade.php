@extends('layout.nav')

@section('feeds')
    <div class="row px-5 align-items-center">
        <div class="col-3">
            <img class="img-profile img-fluid rounded-circle" src="https://via.assets.so/img.jpg?w=30&h=30&tc=black&bg=#cecece" alt="User">
        </div>
        <div class="col-9">
            <div>
                <a class="text-decoration-none fs-3 text-black fw-semibold" href="">{{$username}}</a>
            </div>
            <div class="d-flex mt-2">
                <div class="me-4">
                    <span class="fw-semibold">20</span> Kiriman
                </div>
                <div>
                    <span class="fw-semibold">200</span> Like
                </div>
            </div>
            <p class="mt-2">Penikmat alam yang selalu merindukan petualangan di setiap sudut dunia 🏞️ | Menembus hutan, menaklukkan gunung, dan menyelami lautan 🌿🏔️🌊 | Berbagi momen-momen alam yang menginspirasi dan menyentuh hati 📸✨</p>
        </div>
    </div>
    <hr class="mt-3 mb-4">
    <div class="row gx-1 gy-1">
        @for($i = 0; $i <= 100; $i++)
            <div class="col-4">
                <img
                    src="https://picsum.photos/600/600"
                    class="img-content img-fluid shadow-1-strong"
                    alt="Boat on Calm Water"
                />
            </div>
        @endfor
    </div>
@endsection
