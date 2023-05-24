@extends('layouts.movies_app');

@section('card')
<section class="section_card">
    <div class="container">
        <div class="row row-cols-5">
            @foreach ($movies as $movie)
                <div class="col g-3">
                    <div class="card my_card">
                        <img src="{{ $movie['image'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-text">{{ $movie['title'] }}</h5>
                            <p>Uscito il {{ $movie['date'] }}</p>
                            <p>Il suo voto è: {{ $movie['vote'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center py-3">
            <a class="btn btn-dark" href="{{url('/')}}">Torna Indietro</a>
        </div>
    </div>
</section>
@endsection
