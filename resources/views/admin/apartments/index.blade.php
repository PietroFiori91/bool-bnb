@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="row cols d-flex justify-content-center">
                @foreach ($apartments as $apartment)
                    <div class="col-3 p-2 m-3" style="border: .1px solid black">
                        <div class="card-image p-0 rounded-3">
                            {{-- <img src="{{ asset('assets/img/IMG_20230909_145053.jpg') }}" class="card-img-top rounded-0"
                                alt=""> --}}
                                {{-- <img src="{{ asset('storage/' . $image->url) }}" class="card-img-top rounded-0" alt=""> --}}
                                

                                <p>1{{ $apartment->images}}</p>
                                {{-- <img src="{{asset(storage/)}}" alt=""> --}}
                        </div>
                        <div class="card-body h-45">
                            <div class="row d-flex">
                                <a class="text-decoration-none p-2 text-center text-black"
                                    href="/admin/apartments/{{ $apartment->id }}">{{ $apartment['name'] }}</a>
                                <span class="text-decoration-none p-2 text-center">{{ $apartment->address }}</span>
                            </div>
                        </div>
                        <div class="p-2 d-flex justify-content-center">
                            <a href="{{ route('admin.apartments.edit', $apartment->id) }}">
                                <button class="btn btn-md m-2 btn-primary">Modifica</button></a>
                            <form action="{{ route('admin.apartments.destroy', $apartment->id) }}" method="POST">
                                @csrf()
                                @method('DELETE')
                                <button class="btn btn-btn-md m-2 btn-danger" type="submit" name="name">Elimina</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container py-5 mx-auto d-flex justify-content-center">
            <a href="/" class="btn btn-primary btn-lg" type="button">Torna in Home</a>
            <a href="{{ route('admin.apartments.create') }}"><button class="btn btn-primary btn-lg mx-1">Nuovo appartamento</button></a>
        </div>
    </div>
@endsection
