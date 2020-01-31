@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Administrators</h1>
     <div>
    <a style="margin: 19px;" href="{{ route('admins.create')}}" class="btn btn-primary">New Administrator</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          
          <td>Contact Number</td>
          <td>Email</td>
                    
          <td>Username</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($admins as $admin)
        <tr>
            <td>{{$admin->id}}</td>
            <td>{{$admin->first_name}} </td>
            <td>{{$admin->last_name}}</td>
            
            <td>{{$admin->contact_no}}</td>
            <td>{{$admin->email}}</td>
          
            <td>{{$admin->username}}</td>
            <td>
                <a href="{{ route('admins.edit',$admin->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('admins.destroy', $admin->id)}}" method="post">
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
