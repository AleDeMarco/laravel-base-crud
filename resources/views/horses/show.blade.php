@extends('layouts.app')

@section('title', 'Selected horse')

@section('content')
  <div class="container">
    <h1>Selected horse: {{ $horse->name }}</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Breed</th>
          <th scope="col">Gender</th>
          <th scope="col">Owner</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{ $horse->id }}</th>
          <td>{{ $horse->name }}</td>
          <td>{{ $horse->age }}</td>
          <td>{{ $horse->breed }}</td>
          <td>{{ $horse->gender }}</td>
          <td>{{ $horse->owner }}</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
