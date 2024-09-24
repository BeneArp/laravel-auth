@extends('layouts.app')

@section('content')

    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <h5 class="card-title">Titolo progetto: {{$project->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Data inizio: {{$project->start_date}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Data fine: {{$project->end_date}}</h6>
            <p class="card-text">{{$project->text}}</p>
            <a href="{{route('projects.index')}}" class="card-link">Lista Progetti</a>
            <a href="#" class="card-link">Modifica</a>
        </div>

  </div>

@endsection
