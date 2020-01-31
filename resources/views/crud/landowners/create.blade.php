
<!-- <style>
body {
    background-image: url("assets/imgages/icon/background.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    padding: 30px 0 175px;
    background-color: #cccccc;
}
</style> -->
<head>
<link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}">

  </head>

@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Landowner</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('landowners.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name" required/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name" required/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" required/>
          </div>
          <div class="form-group">
              <label for="city">Gender:</label>
              <input type="text" class="form-control" name="city" required/>
          </div>
          
          <div class="form-group">
              <label for="job_title">nic:</label>
              <input type="text" class="form-control" name="job_title" required/>
          </div>
          <div class="form-group">
              <label for="country">contact_no:</label>
              <input type="text" class="form-control" name="country" required/>
          </div>
          <div class="form-group">
              <label for="country">Image:</label>
              <input type="text" class="form-control" name="country" required/>
          </div>
           <div class="form-group"> 
              <label for="country">Username:</label>
              <input type="text" class="form-control" name="country" required/>
          </div>
          <div class="form-group">
              <label for="country">Password:</label>
              <input type="password" class="form-control" name="password" required/>
          </div> 

          <button type="submit" class="btn btn-primary-outline">Add landowner</button>
      </form>
  </div>
</div>
</div>
@endsection


<!-- 'username' ,
'password'
 -->