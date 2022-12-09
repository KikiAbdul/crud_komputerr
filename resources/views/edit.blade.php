@extends('layout')

@section('content')
    <div class="mt-5 col-6 m-auto">
        <div class="card p-5">
            <div class="mt-2">
                <h2>Edit Ruang Penempatan Komputer</h2>
            </div>
            <div class="my-3">
                <a class="btn btn-primary" href="{{ route('komputer') }}">Back</a>
            </div>
            <form action="/update/{{ $komputers->id }}" method="post">
                @method('PATCH')
                @csrf
                <div class="mb-3">
                    <label for="name">Nomor Komputer</label>
                    <input type="text" class="form-control" id="name" name="no_komputer" required
                        value="{{ $komputers->no_komputer }}">
                </div>
                <div class="mb-3">
                    <label for="merk">Merk Komputer</label>
                    <input type="text" class="form-control" id="merk" name="merk_komputer" required
                        value="{{ $komputers->merk_komputer }}">
                </div>
                <select class="form-select" aria-label="Default select example" name="ruang_penempatan">
                    <option hidden>Pilih Ruangan</option>
                    <option value="206">206</option>
                    <option value="207">207</option>
                    <option value="210">210</option>
                    <option value="202">202</option>
                    <option value="321">321</option>
                </select>
                <select class="form-select mt-3" aria-label="Default select example" name="kondisi_komputer">
                    <option hidden>Kondisi Komputer</option>
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                </select>
                {{-- <div class="mb-3">
                    <label for="ruang">Ruang Penempatan</label>
                    <input type="text" class="form-control" id="ruang" name="ruang_penempatan" required
                        value="{{ $komputers->ruang_penempatan }}">
                </div> --}}
                <button class="btn btn-primary mt-2" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
