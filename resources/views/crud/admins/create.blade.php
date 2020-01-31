@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add New Administrator</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">SS
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('admins.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name" required/>

            @if ($errors->has('first_name'))
              <p class="help is-danger"> {{$errors->first("first_name")}} </p>
            @endif
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input  type="text" class="form-control" name="last_name" required/>
          </div>
          <div class="form-group">
              <label for="contact_no">contact_no:</label>
              <input type="text" class="form-control" name="contact_no" required />
          </div>
         
          <div class="form-group">
              <label for="email">email:</label>
              <input type="text" class="form-control" name="email" required/>
          </div>
          
          <div class="form-group">
              <label for="username">username:</label>
              <input type="text" class="form-control" name="username" required />
          </div>
          <div class="form-group">
              <label for="password">password:</label>
              <input type="text" class="form-control" name="password" required/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Add Administrator</button>
      </form>
  </div>
</div>
</div>
@endsection
