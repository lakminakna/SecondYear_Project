@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Land Owners</h1>
     <div>
    <a style="margin: 19px;" href="{{ route('landowners.create')}}" class="btn btn-primary">New landowner</a>
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
        @foreach($landowners as $landowner)
        <tr>
            <td>{{$landowner->id}}</td>
            <td>{{$landowner->first_name}} {{$landowner->last_name}}</td>
            <td>{{$landowner->email}}</td>
            <td>{{$landowner->job_title}}</td>
            <td>{{$landowner->city}}</td>
            <td>{{$landowner->country}}</td>
            <td>
                <a href="{{ route('landowners.edit',$landowner->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('landowners.destroy', $landowner->id)}}" method="post">
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
