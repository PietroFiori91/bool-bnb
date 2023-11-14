@extends('layouts.app')

@section('content')
    <div class="gallery">
        <div class="row p-3 d-flex justify-content-center">
            <div class="container py-5 mx-auto d-flex justify-content-center">
                <a href="/" class="btn btn-primary btn-lg" type="button">Torna in Home</a>
                <a href="{{ route('admin.apartments.create') }}"><button class="btn btn-primary btn-lg mx-1">Nuovo
                        appartamento</button></a>
            </div>
            @foreach ($apartments as $apartment)
                <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 col-sm-12 m-2 p-2 rounded-3">
                    <a class="text-decoration-none p-2 text-center text-black"
                    href="/admin/apartments/{{ $apartment->id }}">
                    <div id="'carouselExampleIndicators' + $apartment->id" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="card-image p-0 carousel-item active">
                                <img src="{{ asset('/storage/' . $apartment->images) }}"
                                    class="card-img-top rounded-3 p-2 d-block img-fluid w-100 h-100"
                                    style="max-height: 300px; min-height: 220px; object-fit: cover;" alt="" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i
                                    class="fa-solid fa-circle-arrow-left"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i
                                    class="fa-solid fa-circle-arrow-right"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </a>

                    <div class="card-body h-50">
                        <div class="row d-flex">
                            <h2></h2>
                            <span class="text-decoration-none"> <a class="text-decoration-none p-2 text-center text-black"
                                    href="/admin/apartments/{{ $apartment->id }}">{{ $apartment['name'] }}</a></span>
                            <span class="text-decoration-none">{{ $apartment->address }}</span>

                        </div>
                        <div class="p-2 d-flex justify-content-center justify-content-end">
                            <a href="{{ route('admin.apartments.edit', $apartment->id) }}">
                                <button class="btn btn-md m-2 btn-primary">Modifica</button></a>
                            <form action="{{ route('admin.apartments.destroy', $apartment->id) }}" method="POST">
                                @csrf()
                                @method('DELETE')
                                <button class="btn btn-btn-md m-2 btn-danger" type="submit" name="name">Elimina</button>
                            </form>
                        </div>

                    </div>

                </div>
            @endforeach
        </div>
    </div>


@endsection
