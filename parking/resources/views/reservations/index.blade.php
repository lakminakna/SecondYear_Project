@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">reservations</h1>
     <div>
    <a style="margin: 19px;" href="{{ route('reservations.create')}}" class="btn btn-primary">New reservation</a>
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
        @foreach($reservations as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->first_name}} {{$reservation->last_name}}</td>
            <td>{{$reservation->email}}</td>
            <td>{{$reservation->job_title}}</td>
            <td>{{$reservation->city}}</td>
            <td>{{$reservation->country}}</td>
            <td>
                <a href="{{ route('reservations.edit',$reservation->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('reservations.destroy', $reservation->id)}}" method="post">
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
