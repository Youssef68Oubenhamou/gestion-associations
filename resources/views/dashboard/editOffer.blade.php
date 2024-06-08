@extends('dashboard.layout')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-white">
                <h3>Edit Car Information</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('offers.update', $offer->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $offer->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Matricule</label>
                        <input type="text" class="form-control" name="description" value="{{ $offer->description }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Car</button>
                </form>
            </div>
        </div>
    </div>
@endsection
