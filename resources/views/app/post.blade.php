@extends('layout.nav')

@section('feeds')
    <div class="d-flex justify-content-center align-items-center" style="height: 90vh; width: 100%;">
        <div class="row post-detail gx-0 gy-0">
            <div class="col-6 h-100">
            <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                    class="post-image shadow-1-strong mb-4"
                    alt="Boat on Calm Water"
                />
            </div>
            <div class="col-6 mh-100">
                <div class="card rounded-0 h-100">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div>
                                <img class="img-user img-fluid rounded-circle" src="https://via.assets.so/img.jpg?w=30&h=30&tc=black&bg=#cecece" alt="User">
                            </div>
                            <div class="ms-2">
                                <a class="text-decoration-none text-black fw-semibold" href="">Username</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body overflow-auto">
                        <div class="d-flex align-items-start mb-1">
                            <div class="me-2 w-auto">
                                <img class="img-user img-fluid rounded-circle" src="https://via.assets.so/img.jpg?w=30&h=30&tc=black&bg=#cecece" alt="Post foto">
                            </div>
                            <div class="w-75">
                                <a href="#" class="text-black text-decoration-none fw-semibold">
                                    <small>Username</small>
                                </a>
                                <p>
                                    <small>
                                        Ini adalah contoh tulisan dari post yang mungkin menggambarkan apa yang sedang dipikirkan oleh pengguna ya?
                                    </small>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-1">
                            <div class="me-2 w-auto">
                                <img class="img-user img-fluid rounded-circle" src="https://via.assets.so/img.jpg?w=30&h=30&tc=black&bg=#cecece" alt="Post foto">
                            </div>
                            <div class="w-75">
                                <a href="#" class="text-black text-decoration-none fw-semibold">
                                    <small>Komentar</small>
                                </a>
                                <p>
                                    <small>
                                        Aku tau kamu pasti lagi bingung kan sama dong hehe..
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                        <div class="card-footer">
                        <div class="d-flex text-start mt-1">
                            <div>
                                <a class="post-interaction text-black" href=""><i class="bi bi-heart"></i></a>
                            </div>
                            <div>
                                <a class="post-interaction text-black ms-2" href=""><i class="bi bi-chat"></i></a>
                            </div>
                        </div>
                        <div class="text-start fs-6 fw-medium">
                            <small>1.000 suka</small>
                        </div>
                        <div class="fs-6 text-secondary text-start ms-auto">
                            <small>23 Februari 2024</small>
                        </div>
                        <form action="" method="post">
                            @csrf
                            <div class="mt-2 d-flex">
                                <textarea class="form-control" name="comment" id="comment" rows="1" required></textarea>
                                <button class="btn btn-sm btn-primary" type="submit">
                                    <i class="bi bi-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
