@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Request Parking Space Update</h1>

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
                <label for="last_name">Location:</label>
                <input type="text" class="form-control" name="last_name" value={{ $parking_space->address }} />
            </div>

            <div class="form-group">
                <label for="email">Description:</label>
                <input type="text" class="form-control" name="email" value={{ $parking_space->description }} />
            </div>
            <div>
               <label for="city">Open on:</label><br>
              <input type="checkbox" name="opentime" value="Poya"> Poya days
              <input type="checkbox" name="opentime" value="public_holiday"> Public Holidays
              <input type="checkbox" name="opentime" value="bank_holiday" > Bank Holidays<br><small>Thesse will be displayed for the users of the application</small><br><br>
          </div>
            <div class="form-group">
               <label for="reservation">Is reservation allowed?</label></br>
              <input type="radio"  name="reservation_status" value="yes"> Allowed<br>
              <input type="radio"  name="reservation_status" value="no"> Not allowed<br>
          </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
