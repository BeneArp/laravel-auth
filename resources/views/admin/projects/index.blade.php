@extends('layouts.app')

@section('content')

<table class="table">

    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Data Inizio</th>
        <th scope="col">Data fine</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>

    <tbody>

        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->start_date}}</td>
                <td>{{$project->end_date}}</td>
                <td>modifica | Elimina</td>
            </tr>
        @endforeach

    </tbody>

  </table>

@endsection
