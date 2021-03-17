@extends('layouts.app')

@section('title', 'Horses in stable')

@section('content')
  <h1>Horses in stable</h1>
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
          <td><a href="{{route('horses.show', ['horse'=>$horse->id])}}">Select horse</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
