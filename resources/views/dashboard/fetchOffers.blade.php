@extends('dashboard.layout')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-white">
                <h3>All Offers</h3>
                <a href="{{ route('offers.create') }}" class="btn btn-success">Add New Offer</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offers as $offer)
                        <tr>
                            <td>{{ $offer->title }}</td>
                            <td>{{ $offer->description }}</td>
                            <td>
                                <a href="{{ route('offers.edit', $offer->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('offers.destroy', $offer->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
