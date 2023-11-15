@extends('layouts.public')

@section('content')
    <div class="container">
        <h1>{{ $apartments->name }}</h1>

        <img style="width: 310px" src=" {{ asset('/storage/' . $apartments->images) }}" alt="">

        <p><strong>Description:</strong> {{ $apartments->description }}</p>
        <p><strong>Address:</strong> {{ $apartments->address }}</p>
        <div class="">
            <p><strong>services:</strong></p>
            @foreach ($apartments->services as $service)
                <div class="d-flex align-items-center">
                    <i class="fa-solid {{ $service->icon }}"></i>
                    <p>{{ $service->name }}</p>
                </div>
            @endforeach
        </div>

        <p><strong>Rooms:</strong> {{ $apartments->room }}</p>
        <p><strong>Beds:</strong> {{ $apartments->bed }}</p>

        <div class="d-flex">
            <a href="{{ route('admin.apartments.index') }}" class="btn btn-sm m-2 btn-primary">Back to List</a>
            <a href="{{ route('admin.apartments.edit', $apartments->id) }}"><button class="btn btn-sm m-2 btn-primary">Modifica</button></a>

            {{-- <button class="btn btn-warning"><a class="tip" href="{{ route('api.sponsors.index', ['apartment' => $apartments]) }}">Sponsorizza</a></button> --}}
            <form action="{{ route('admin.apartments.destroy', $apartments->id) }}" method="POST">
                @csrf()
                @method('DELETE')
                <button class="btn btn-sm m-2 btn-danger" type="submit" name="name">Elimina</button>
            </form>
        </div>

    </div>
@endsection
