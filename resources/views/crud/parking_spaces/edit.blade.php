@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a parking_space</h1>

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
        <form method="post" action="{{ route('parking_spaces.update', $parking_space->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="first_name"> Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $parking_space->name }} />
            </div>

            <div class="form-group">
                <label for="last_name">address:</label>
                <input type="text" class="form-control" name="last_name" value={{ $parking_space->address }} />
            </div>

            <div class="form-group">
                <label for="email">description:</label>
                <input type="text" class="form-control" name="email" value={{ $parking_space->description }} />
            </div>
            <div class="form-group">
                <label for="city">reservation_status:</label>
                <input type="text" class="form-control" name="city" value={{ $parking_space->reservation_status }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
