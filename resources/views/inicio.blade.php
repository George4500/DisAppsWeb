@extends('layouts.main')

@section('title', 'Inicio')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-4">
        <h1>Superhéroes</h1>
    </div>

    <div class="row">
        <div class="col-12 col-md-8">
            @foreach ($superheroes as $superhero)
                <article class="mb-5">
                    <h2>{{ $superhero->name }}</h2>
                    <p>Universo: {{ $superhero->universe->name }}</p>
                </article>
            @endforeach
        </div>
    </div>
</div>
@endsection