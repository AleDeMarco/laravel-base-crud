@extends('layouts.app')

@section('title', 'Add your horse')

@section('content')
  <div class="container">
    <h1>Edit data: {{ $horse->name }}</h1>
    <form action="{{route('horses.update', $horse->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" name="name" class="form-control" id="inputName" value="{{ $horse->name }}">
      </div>
      <div class="form-group">
        <label for="inputAge">Age</label>
        <input type="number" name="age" class="form-control" id="inputAge" value="{{ $horse->age }}">
      </div>
      <div class="form-group">
        <label for="inputBreed">Breed</label>
        <input type="text" name="breed" class="form-control" id="inputBreed" value="{{ $horse->breed }}">
      </div>
      <div class="form-group">
        <label for="inputGender">Gender</label>
        <select class="form-control" name="gender" id="inputGender">
          <option value="Male" {{ $horse->gender == 'Male' ? 'selected' : ''}}>Male</option>
          <option value="Female" {{ $horse->gender == 'Female' ? 'selected' : ''}}>Female</option>
          <option value="Gelding" {{ $horse->gender == 'Gelding' ? 'selected' : ''}}>Gelding</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputOwner">Owner</label>
        <input type="text" name="owner" class="form-control" id="inputOwner" value="{{ $horse->owner }}">
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>
@endsection
