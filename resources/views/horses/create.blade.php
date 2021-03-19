@extends('layouts.app')

@section('title', 'Add your horse')

@section('content')
  <div class="container">
    <h1>Add your horse</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{route('horses.store')}}" method="post">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" name="name" class="form-control" id="inputName">
      </div>
      <div class="form-group">
        <label for="inputAge">Age</label>
        <input type="number" name="age" class="form-control" id="inputAge">
      </div>
      <div class="form-group">
        <label for="inputBreed">Breed</label>
        <input type="text" name="breed" class="form-control" id="inputBreed">
      </div>
      <div class="form-group">
        <label for="inputGender">Gender</label>
        <select class="form-control" name="gender" id="inputGender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Gelding">Gelding</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputOwner">Owner</label>
        <input type="text" name="owner" class="form-control" id="inputOwner">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
