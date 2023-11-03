@extends('layouts.public')

@section('content')
    <div class="container">
        <form action="{{ route('admin.apartments.destroy', $apartment->id) }}" method="POST">
            @csrf()
            @method('DELETE')
            <button  class="btn btn-danger" type="submit" name="name">Elimina</button>
        </form>
        <h1>{{ $apartment->name }}</h1>

        <img src="{{ $apartment->image_url }}" alt="{{ $apartment->name }}" style="max-width: 100%;">


        <p><strong>Description:</strong> {{ $apartment->description }}</p>
        <p><strong>Address:</strong> {{ $apartment->address }}</p>
        <p><strong>Rooms:</strong> {{ $apartment->room }}</p>
        <p><strong>Beds:</strong> {{ $apartment->bed }}</p>

        <a href="{{ route('admin.apartments.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
