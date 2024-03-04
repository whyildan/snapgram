@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="bg-body-tertiary col-2 px-4 pt-5 sticky-top" style="height: 100vh">
                <div class="d-grid">
                    <h3 class="mb-4">Snapgram</h3>

                    <a class="navbar-link mb-1 text-black text-decoration-none {{ Route::currentRouteName() == 'home' ? 'fw-semibold' : '' }}" style="font-size: 1.2rem;" href="/"><i class="bi bi-house-door-fill me-2"></i> Beranda</a>
                    <a class="navbar-link mb-1 text-black text-decoration-none {{ Route::currentRouteName() == 'explore' ? 'fw-semibold' : '' }} fw-light" style="font-size: 1.2rem;" href="/explore"><i class="bi bi-compass me-2"></i> Jelajahi</a>
                    <a class="navbar-link mb-1 text-black text-decoration-none {{ Route::currentRouteName() == 'create' ? 'fw-semibold' : '' }} fw-light" style="font-size: 1.2rem;" href="/create"><i class="bi bi-plus-square me-2"></i> Buat</a>
                    <a class="navbar-link mb-1 text-black text-decoration-none {{ Route::currentRouteName() == 'profile' ? 'fw-semibold' : '' }} fw-light" style="font-size: 1.2rem;" href="/u/whyildanprtama"><i class="bi bi-person-fill me-2"></i> Profil</a>
                </div>
            </div>
            <div class="col-10 px-5 mt-5 justify-content-center">
                @yield('feeds')
            </div>
        </div>
    </div>
@endsection
