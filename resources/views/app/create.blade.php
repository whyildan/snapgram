@extends('layout.nav')

@section('feeds')
    <div class="d-flex justify-content-center align-items-center" style="height: 90vh; width: 100%;">
        <div class="row post-detail gx-0 gy-0">
            <div class="col-6 h-100 bg-body-secondary">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <h2>Buat Postingan ✨</h2>
                </div>
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
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label class="form-label" for="deskripsi">Deksripsi</label>
                                <textarea name="deskripsi" id="deksripsi" class="form-control" placeholder="Apa yang ada pikirkan..." required></textarea>
                            </div>
                            <div class="mb-2">
                                <label class="form-label" for="gambar">Gambar</label>
                                <input class="form-control" type="file" name="gambar" accept="accept="image/png, image/jpeg"" id="gambar" required>
                            </div>
                            <div class="mt-4 text-end">
                                <button class="btn btn-primary" type="submit">Bagikan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
