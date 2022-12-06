@extends('layout')

@section('content')
    <div class="container py-5">
        <div class="card p-5">
            <div class="img">
                <img class="rounded float-end" src="assets/img/imgSMK.png" alt="logoSMk" width="50px">
            </div>
            <div class="image" style="">
                <img class="rounded mx-auto d-block" src="assets/img/logoRPL.png" alt="Logo RPL" width="150px">
                <h5 class="text-center">Daftar Penempatan Komputer PPLG</h5>
                <hr style="width: 300px" class="rounded mx-auto d-block">
            </div>
            <a class="btn btn-light mt-3 bi bi-arrow-left" style="width: 100px" href="/komputer">Back</a>
            <div class="row mt-5">
                @foreach ($komputers as $item)
                    <div class="col-4">
                        <div class="card shadow p-0 mb-5 bg-body rounded" style="width: 18rem;">
                            <img src="assets/img/komputer.jpg" class="card-img-top" alt="komputer">
                            <div class="card-body">
                                <h5 class="card-title">Merk Komputer: {{ $item->merk_komputer }}</h5>
                                <div class="class">
                                    <a>Nomor Komputer: {{ $item->no_komputer }}</a><br>
                                    <a>Ruang Penempatan: {{ $item->ruang_penempatan }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
