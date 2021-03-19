@extends('layouts.app')

@section('title', 'Horses in stable')

@section('content')
  <div class="container">
    <h1>Horses in stable</h1>
    @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
    @endif
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Breed</th>
          <th scope="col">Gender</th>
          <th scope="col">Owner</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($horses as $horse)
          <tr>
            <th scope="row">{{ $horse->id }}</th>
            <td>{{ $horse->name }}</td>
            <td>{{ $horse->age }}</td>
            <td>{{ $horse->breed }}</td>
            <td>{{ $horse->gender }}</td>
            <td>{{ $horse->owner }}</td>
            <td>
              <a href="{{route('horses.show', ['horse'=>$horse->id])}}" class="btn btn-info">Info</a>
              <a href="{{route('horses.edit', ['horse'=>$horse->id])}}" class="btn btn-warning">Edit data</a>
              <form action="{{route('horses.destroy', $horse->id)}}" method="post" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <h5>
      <a href="{{route('horses.create')}}">Add your horse</a>
    </h5>
  </div>
@endsection
