@extends('layouts.app')

@section('content')
    <div class="bg-image d-flex justify-content-center align-items-center">

       <div class="row cols messages-container d-flex justify-content-center align-items-center">
        <h3 class="text-center">Messaggi ricevuti</h3>
        <div class="messages-table m-5">
            <div class="row">
                <div class="col p-0">

                    <div class="accordion accordion-flush" id="accordionFlush">

                        @foreach ($apartments as $i => $apartment)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $i }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $i }}">
                                        <img class="img me-3" src="{{ asset('storage/' . $apartment->images) }}" alt="">
                                        {{ $apartment->name }}
                                    </button>
                                </h2>
                                <div id="flush-collapse{{ $i }}" class="accordion-collapse collapse"
                                    data-bs-parent="accordionFlush">
                                    <div class="accordion-body d-flex flex-column-reverse">

                                            @foreach ($apartment->messages as $message)
                                                <div class="table-responsive col-12">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Nome</th>
                                                                <th scope="col">E-mail</th>
                                                                <th scope="col">Messaggio</th>
                                                                <th scope="col">Data di invio</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>{{ $message->name }}</td>
                                                                <td>{{ $message->email }}</td>
                                                                <td>{{ $message->message }}</td>
                                                                <td>{{ $message->created_at }}</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
       </div>

    </div>
@endsection
