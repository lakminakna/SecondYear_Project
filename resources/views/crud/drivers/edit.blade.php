@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Driver Account</h1>

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
        <form method="post" action="{{ route('drivers.update', $driver->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $driver->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $driver->last_name }} />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $driver->email }} />
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control" name="gender" value={{ $driver->gender }} />
            </div>
            <div class="form-group">
                <label for="contactNumber">Contact Number:</label>
                <input type="text" class="form-control" name="contact_no" value={{ $driver->contact_no }} />
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" value={{ $driver->address }} />
            </div>
            <div class="form-group">
                <label for="licence_id">Licence ID:</label>
                <input type="text" class="form-control" name="licence_id" value={{ $driver->licence_id }} />
            </div>
            <div class="form-group">
                <label for="nic">National Identity Card Number:</label>
                <input type="text" class="form-control" name="nic" value={{ $driver->nic }} />
            </div>
            
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" class="form-control" name="image" value={{ $driver->image }} />
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" value={{ $driver->username }} />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password" value={{ $driver->password }} />
            </div>
            <button type="submit" class="btn btn-primary">Update </button>
        </form>
    </div>
</div>
@endsection
