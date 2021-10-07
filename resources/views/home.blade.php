@extends('layouts.main')

@section('content')

<section id="movies">
    @foreach($movies as $movie)
    <div class="card d-inline" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$movie->title}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
          <p class="card-text"><strong>Nationality:</strong> {{$movie->nationality}}</p>
          <p class="card-text"><strong>Date:</strong> {{$movie->date}}</p>
          <p class="card-text"><strong>Vote:</strong> {{$movie->vote}}</p>
      </div>
      @endforeach
</section>


@endsection