@extends('layout')

@section('content')
    <div class="mt-5 col-6 m-auto">
        <div class="card p-5">
            <div class="mt-2">
                <h2>Create Komputer</h2>
            </div>
            <div class="my-3">
                <a class="btn btn-light mt-3 bi bi-arrow-left" href="{{ route('komputer') }}">Back</a>
            </div>
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name">No Komputer</label>
                    <input type="text" class="form-control" id="name" name="no_komputer" required>
                </div>
                <div class="mb-3">
                    <label for="merk">Merek Komputer</label>
                    <input type="text" class="form-control" id="merk" name="merk_komputer" required>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
