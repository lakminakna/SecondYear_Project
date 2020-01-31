@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Admin Account</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('admins.update', $admin->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $admin->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $admin->last_name }} />
            </div>
            
            
            <div class="form-group">
                <label for="contactNumber">Contact Number:</label>
                <input type="text" class="form-control" name="contact_no" value={{ $admin->contact_no }} />
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $admin->email }} />
            </div>
            
           <!--  <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" class="form-control" name="image" value={{ $admin->image }} />
            </div> -->
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" value={{ $admin->username }} />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password" value={{ $admin->password }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
