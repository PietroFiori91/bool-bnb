@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">

                <div class="accordion accordion-flush" id="accordionFlush">

                    @foreach ($apartments as $i => $apartment)
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse{{ $i }}" aria-expanded="false"
                                    aria-controls="flush-collapse{{ $i }}">
                                    <img src="{{ asset('storage/' . $apartment->images) }}" alt="{{ $apartment->name }}"
                                        height="64" class="me-3">
                                    {{ $apartment->name }}
                                </button>
                            </h2>

                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>


    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Messaggio</th>
            </tr>
        </thead>
        @foreach ($apartment->messages as $message)
            <tbody>

                <tr>
                    <th scope="row"></th>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->message }}</td>
                    <td> {{ $message->created_at }}</td>

                </tr>
            </tbody>
        @endforeach
        </tbody>

    </table>
@endsection
