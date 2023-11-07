@extends('layouts.public')

@section('content')
    <div class="container">
        <form action="{{ route('admin.apartments.destroy', $apartments->id) }}" method="POST">
            @csrf()
            @method('DELETE')
            <button class="btn btn-danger" type="submit" name="name">Elimina</button>
        </form>
        <h1>{{ $apartments->name }}</h1>

        <img src="{{ asset('./sorage/posts') }}" alt="{{ $apartments->name }}" style="max-width: 100%;">


        <p><strong>Description:</strong> {{ $apartments->description }}</p>
        <p><strong>Address:</strong> {{ $apartments->address }}</p>
        <div class="">
            <p><strong>services:</strong></p>
            @foreach ($apartments->services as $service)
                <div class="d-flex align-items-center">
                    <i class="p-2 fa-solid {{ $service->icon }}"></i>
                    <p>{{ $service->name }}</p>
                </div>
            @endforeach
        </div>

        <p><strong>Rooms:</strong> {{ $apartments->room }}</p>
        <p><strong>Beds:</strong> {{ $apartments->bed }}</p>

        <a href="{{ route('admin.apartments.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
