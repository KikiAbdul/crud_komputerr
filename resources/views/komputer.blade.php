@extends('layout')

@section('content')
    <div class="container">
        <div class="card p-5 mt-5">
            <div class="image" style="">
                <img class="rounded mx-auto d-block" src="assets/img/logoRPL.png" alt="Logo RPL" width="150px">
                <h5 class="text-center">Daftar Komputer Kejuruan PPLG</h5>
                <hr style="width: 300px" class="rounded mx-auto d-block">
            </div>
            <nav class="navbar navbar-expand-lg rounded mx-auto d-block">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                            <a class="nav-link" href="#">Features</a>
                        </div>
                    </div>
                </div>
            </nav>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('successUpdate'))
                <div class="alert alert-success">
                    {{ session('successUpdate') }}
                </div>
            @endif
            @if (session('delete'))
                <div class="alert alert-danger">
                    {{ session('delete') }}
                </div>
            @endif
            <div class="row" style="margin-top: 90px">
                <div class="col">
                    <h2>CRUD Komputer</h2>
                    <div class="my-3">
                        <a href="{{ route('create') }}" class="btn btn-success">Create</a>
                    </div>
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">No Komputer</th>
                                <th scope="col">Merk Komputer</th>
                                <th scope="col">Ruang Penempatan Komputer</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @foreach ($komputers as $item)
                            <tbody>

                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->no_komputer }}</td>
                                    <td>{{ $item->merk_komputer }}</td>
                                    <td>{{ $item->ruang_penempatan }}</td>
                                    <td>
                                        <form action="{{ route('edit', $item->id) }}">
                                            <button class="bi bi-eye btn" type="submit"></button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('delete', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="bi bi-trash btn" type="submit"></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
