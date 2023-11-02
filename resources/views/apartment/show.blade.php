@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $apartment->name }}</h1>

        <img src="{{ $apartment->image_url }}" alt="{{ $apartment->name }}" style="max-width: 100%;">


        <p><strong>Description:</strong> {{ $apartment->description }}</p>
        <p><strong>Address:</strong> {{ $apartment->address }}</p>
        <p><strong>Number of Rooms:</strong> {{ $apartment->room }}</p>
        <p><strong>Number of Beds:</strong> {{ $apartment->bed }}</p>

        <a href="{{ route('apartments.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
