@extends('layouts.public')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @foreach ($services as $service)
                        <div class="mb-3 form-check-inline">
                            <label class="form-check-label" for="flexCheckDefault">{{ $service->name }}</label>
                            <i class="fa-solid {{ $service->icon }}"></i>
                            <input class="form-check-input" name="services[]" type="checkbox" value="{{ $service->id }}"
                                id="flexCheckDefault">
                        </div>
                    @endforeach
                    @error('services')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">Nome: </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Immagini:</label>
                        <input type="file" class="form-control" accept="image/*" name="images" multiple>
                        @foreach ($apartment->images as $image)
                            <div>
                                <img src="{{ $image->url }}" alt="{{ $image->name }}" style="max-width: 100px;">
                                <input type="checkbox" name="images" value="{{ $image->id }}"> Elimina questa immagine
                            </div>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Indirizzo:</label>
                        <input class="form-control" id="exampleFormControlTextarea1" name="address">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero camere:</label>
                        <input class="form-control" type="number" id="exampleFormControlTextarea1" name="room">
                        @error('room')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero letti:</label>
                        <input class= "form-control" type="number" id="exampleFormControlTextarea1" name="bed">
                        @error('bed')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero bagni:</label>
                        <input class="form-control" type="number" id="exampleFormControlTextarea1" name="bathroom">
                        @error('bathroom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Metratura: </label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="mq">
                        @error('mq')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Latitudine:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="latitude">
                        @error('latitude')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Longitudine:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="longitude">
                        @error('longitude')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Visibile: </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="visibility">
                        @error('visibility')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Disponibile: </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="availability">
                        @error('availability')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary">Salva</button>
                    <a href="{{ route('admin.apartments.index') }}"><button class="btn btn-danger">Annulla</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection
