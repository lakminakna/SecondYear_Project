@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">parking_spaces</h1>
     <div>
    <a style="margin: 19px;" href="{{ route('parking_spaces.create')}}" class="btn btn-primary">New parking_space</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Job Title</td>
          <td>City</td>
          <td>Country</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($parking_spaces as $parking_space)
        <tr>
            <td>{{$parking_space->id}}</td>
            <td>{{$parking_space->first_name}} {{$parking_space->last_name}}</td>
            <td>{{$parking_space->email}}</td>
            <td>{{$parking_space->job_title}}</td>
            <td>{{$parking_space->city}}</td>
            <td>{{$parking_space->country}}</td>
            <td>
                <a href="{{ route('parking_spaces.edit',$parking_space->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('parking_spaces.destroy', $parking_space->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>


<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>
@endsection
