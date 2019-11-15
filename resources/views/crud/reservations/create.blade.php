@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a reservation</h1>
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
      <form method="post" action="{{ route('reservations.store') }}">
          @csrf
          <div class="form-group">
              <label for="driver_id">driver_id:</label>
              <input type="text" class="form-control" name="driver_id"/>
          </div>

          <div class="form-group">
              <label for="parking_space_id">parking_space_id :</label>
              <input type="text" class="form-control" name="parking_space_id"/>
          </div>

          <div class="form-group">
              <label for="duration_from">duration_from:</label>
              <input type="text" class="form-control" name="duration_from"/>
          </div>
          <div class="form-group">
              <label for="duration_to">duration_to:</label>
              <input type="text" class="form-control" name="duration_to"/>
          </div>
          <!-- <div class="form-group">
              <label for="country">Country:</label>
              <input type="text" class="form-control" name="country"/>
          </div>
          <div class="form-group">
              <label for="job_title">Job Title:</label>
              <input type="text" class="form-control" name="job_title"/>
          </div> -->
          <button type="submit" class="btn btn-primary-outline">Add reservation</button>
      </form>
  </div>
</div>
</div>
@endsection
