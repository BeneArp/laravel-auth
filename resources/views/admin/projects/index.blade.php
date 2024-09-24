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
                <td>
                    <a href="{{route('projects.show', $project)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('projects.edit', $project)}}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
        @endforeach

    </tbody>

  </table>

@endsection
