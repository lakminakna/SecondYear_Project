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
          <td>First Name</td>
          <td>Last Name</td>
          <td>Gender</td>
          <td>Contact Number</td>
          <td>NIC</td>
          <td>Email</td>
          <td>Image</td>
          <td>Username</td>
          <td>Password</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($landowners as $landowner)
        <tr>
            <td>{{$landowner->id}}</td>
            <td>{{$landowner->first_name}}</td>
            <td>{{$landowner->last_name}}</td>
            <td>{{$landowner->gender}}</td>
            <td>{{$landowner->contact_no}}</td>
            <td>{{$landowner->nic}}</td>
            <td>{{$landowner->email}}</td>
            <td>{{$landowner->image}}</td>
            <td>{{$landowner->username}}</td>
            <td>{{$landowner->password}}</td>
            
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
