@extends('layouts.public')

@section('content')
    <form action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container container-uno paggina " id="container-uno">
            <div class="row">
                <div class="torna-home nav p-4">
                    <a class="text-decoration-none text-black" href="{{ route('admin.apartments.index') }}"><img
                            src="/assets/img/Risorsa 7port creatt.png" alt=""></a>
                </div>
                <div class="col-12  d-flex justify-content-center align-items-center ">

                    <div class="col-6 sotto-uno">
                        <p><strong>Primo</strong></p>
                        <h2 class="fs-1">Parlaci del tuo alloggio</h2>
                        <p>In questa fase, ti chiederemo che tipo di spazio Airbnb offri e se, prenotandolo, gli ospiti
                            avranno a disposizione l'intero alloggio o solo una stanza. Dopodiché, dovrai comunicarci la
                            posizione e quante persone vi possono soggiornare.</p>
                    </div>

                    <div class="col-6 sotto-due">
                        <video controls width="100%" autoplay muted>
                            <source class="d-block"
                                src="https://stream.media.muscache.com/zFaydEaihX6LP01x8TSCl76WHblb01Z01RrFELxyCXoNek.mp4?v_q=high"
                                type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-end  avanti justify-content-end btn-avanti">
                {{-- <button class="btn btn-link  m-5 "><a class="text-decoration-none text-black"
                        href="{{ route('admin.apartments.index') }}">iIndietro</a></button> --}}
                <button type="button" class="btn btn-dark m-5 fs-4" onclick="mostraSecondaSezione()">Avanti</button>
            </div>
            <script>
                function mostraSecondaSezione() {
                    document.querySelector('.container-uno').style.display = 'none';
                    document.querySelector('.seconda-sezione').style.display = 'block';
                }
            </script>
        </div>











        <div class="container seconda-sezione cont-2 paggina " id="seconda-sezione">
            <div class="row text-center  d-flex ">
                <h3 class=" d-flex justify-content-center">Quale di queste opzioni descrive meglio il tuo alloggio?</h3>
                @foreach ($services as $service)
                    <div class="mb-3 col-3 p-2 form-check-inline d-flex justify-content-center align-items-center">
                        <label class="form-check-label" for="service_{{ $service->id }}"><i
                                class="fa-solid {{ $service->icon }}"></i> {{ $service->name }}</label>
                        <input class="form-check-input" name="services[]" type="checkbox" value="{{ $service->id }}"
                            id="flexCheckDefault">
                    </div>
                @endforeach
                <div class="mb-3">
                    @error('services')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <script>
                    function mostraTerzaSezione() {
                        document.querySelector('.cont-2').style.display = 'none';
                        document.querySelector('.terza-sezione').style.display = 'block';
                    }

                    function scrollToSecondaSezione() {
                        var secondaSezione = document.getElementById('container-uno');
                        secondaSezione.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                </script>

                <div class="d-flex align-items-end btn-sotto  justify-content-between">
                    <button class="btn btn-link d-flex  align-items-end m-5 "><a class="text-decoration-none text-black"
                            href="#" getElementById()>Indietro</a></button>






                    <button type="button" class="btn btn-dark m-5 fs-4 d-flex align-items-end"
                        onclick="mostraTerzaSezione()">Avanti</button>
                </div>
            </div>
        </div>










        <div class=" paggina container-img-form" id="ultima-sezione">
            <di class="container terza-sezione ">
                <div class="row">
                    <div class="text-center p-5">
                        <h4>Aggiungi foto del tuo alloggio </h4>
                        <p>Per iniziare ti servir 1 foto. In seguito, potrai modificare quelle esistenti.</p>
                    </div>
                    <div class=" d-flex justify-content-center">
                        <div class="file-input-container">
                            <span class="file-input-label text-center ">Carica un file</span>
                            <input type="file" class="file-input" accept="image/*" name="images" multiple />
                            @error('images')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>

                <script>
                    function mostraQuartaSezione() {
                        document.querySelector('.container-img-form').style.display = 'none';
                        document.querySelector('.Quarta-sezione').style.display = 'block';
                    }

                    function scrollToSecondaSezione() {
                        var secondaSezione = document.getElementById('seconda-sezione');
                        secondaSezione.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                </script>

                <div class="d-flex align-items-end btn-sotto  justify-content-between">






                    <button class="btn btn-link d-flex align-items-end m-5">
                        <a class="text-decoration-none text-black" href="#"
                            onclick="scrollToSecondaSezione()">Indietro</a>
                    </button>
                    <button type="button" class="btn btn-dark m-5 fs-4 d-flex align-items-end"
                        onclick="mostraQuartaSezione()">Avanti</button>
                </div>
        </div>







        <div>
            <div class=" container container-dati Quarta-sezione ">
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label">Nome della abitazione: </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

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

                    <button class="btn">Salva</button>
                </div>
            </div>
        </div>




        <script>
            function mostraCuintoSezione() {
                document.querySelector('.Quarta-sezione').style.display = 'none';
                document.querySelector('.Cuinto-sezione').style.display = 'block';
            }

            function scrollToSecondaSezione() {
                var secondaSezione = document.getElementById('ultima-sezione');
                secondaSezione.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        </script>

        <div class="d-flex align-items-end btn-sotto  justify-content-between">
           <a
                    class="text-decoration-none">iIndietro</a>



            <button class="btn btn-link d-flex  align-items-end m-5 "><a class="text-decoration-none text-black"
                    href="#" onclick="scrollToSecondaSezione()">Indietro</a></button>
            {{-- <button type="button" class="btn btn-dark m-5 fs-4 d-flex align-items-end"
                onclick="mostraCuintoSezione()">Avanti</button> --}}
        </div>
        </div>

    </form>
@endsection
