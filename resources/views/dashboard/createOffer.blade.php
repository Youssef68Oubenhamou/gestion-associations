@extends('dashboard.layout')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-white">
                <h3>Add New Offer</h3>
            </div>
            <div class="card-body">

                <form action="{{ route('offers.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Offer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
