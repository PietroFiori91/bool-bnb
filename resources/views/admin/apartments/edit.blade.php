@extends('layouts.public')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.apartments.update', $apartments->id) }}" method="POST">
                    @csrf()
                    @method("put")
                    <div class="mb-3">
                        <label class="form-label">Name: </label>
                        <input type="text" class="form-control" value="{{$apartments->name}}" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{$apartments->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Indirizzo:</label>
                        <input class="form-control" value="{{$apartments->address}}" name="address">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero camere:</label>
                        <input class="form-control" type="number" value="{{$apartments->room}}" name="room">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero letti:</label>
                        <input class="form-control" type="number" value="{{$apartments->bed}}" name="bed">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero bagni</label>
                        <input class="form-control" type="number" value="{{$apartments->bathroom}}" name="bathroom">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Metratura: </label>
                        <input type="number" class="form-control" value="{{$apartments->mq}}" name="mq">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Latitudine:</label>
                        <input type="text" class="form-control" value="{{$apartments->latitude}}" name="latitude">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Longitudine:</label>
                        <input type="text" class="form-control" value="{{$apartments->longitude}}" name="longitude">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Visibile: </label>
                        <input type="text" class="form-control" value="{{$apartments->visibility}}" name="visibility">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Disponibile: </label>
                        <input type="text" class="form-control" value="{{$apartments->availability}}" name="availability">
                    </div>

                    <button class="btn btn-primary">Salva</button>
                    <a href="{{ route('admin.apartments.index') }}"><button class="btn btn-danger">Annulla</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection
