@extends('layouts.public')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @foreach ($services as $service)
                        <div class="mb-3 form-check-inline">
                            <label class="form-check-label" for="service_{{ $service->id }}">{{ $service->name }}</label>
                            <i class="fa-solid {{ $service->icon }}"></i>
                            <input class="form-check-input" name="services[]" type="checkbox" value="{{ $service->id }}"
                                id="flexCheckDefault">
                        </div>
                    @endforeach
                    <div class="mb-3">
                        @error('services')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

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
                        @error('images')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ old('description') }}</textarea>
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
                        <input class="form-control" type="number" id="exampleFormControlTextarea1" name="room"
                            value="{{ old('room') }}">
                        @error('room')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Numero letti:</label>
                        <input class="form-control" type="number" id="exampleFormControlTextarea1" name="bed"
                            value="{{ old('bed') }}">
                        @error('bed')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Numero bagni:</label>
                        <input class="form-control" type="number" id="exampleFormControlTextarea1" name="bathroom"
                            value="{{ old('bathroom') }}">
                        @error('bathroom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Metratura: </label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="mq"
                            value="{{ old('mq') }}">
                        @error('mq')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Latitudine:</label>
                        <input type="text" class="form-control" value="{{ old('latitude', $apartment->latitude) }}"
                            name="latitude">
                        @error('latitude')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Longitudine:</label>
                        <input type="text" class="form-control" value="{{ old('longitude', $apartment->longitude) }}"
                            name="longitude">
                        @error('longitude')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-check">

                            <input type="hidden" name="visibility" value="0">
                            <input class="form-check-input" type="checkbox" value="1" id="visibility-input"
                                name="visibility" {{ $apartment->visibility ? 'checked' : '' }}>
                            <label class="form-check-label" for="visibility-input">
                                Visibile
                            </label>
                            @error('visibility')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">

                            <input type="hidden" name="availability" value="0">
                            <input class="form-check-input" type="checkbox" value="1" id="availability-input"
                                name="availability" {{ $apartment->availability ? 'checked' : '' }}>
                            <label class="form-check-label" for="availability-input">
                                Disponibile
                            </label>
                            @error('availability')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary">Salva</button>
                    <button class="btn btn-danger"><a  class="text-decoration-none text-white" href="{{ route('admin.apartments.index') }}">Annulla</a></button>
                </form>
            </div>
        </div>
    </div>
@endsection
