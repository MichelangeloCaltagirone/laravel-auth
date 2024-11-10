@extends("layouts.app")

@section("content")

    <div class="container">
        <div class="card p-1">
            <span>{{ $project->id }} </span>
            <h2>Nome progetto: {{ $project->name }} </h2>
            <h3>Autore: {{ $project->author }} </h3>
            <p>
                <strong>Descrizione:</strong>
                {{ $project->description }}
            </p>

        </div>
    </div>

@endsection
