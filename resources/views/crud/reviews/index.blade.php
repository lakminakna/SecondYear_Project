@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">reviews</h1>
     <div>
    <a style="margin: 19px;" href="{{ route('reviews.create')}}" class="btn btn-primary">New review</a>
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
        @foreach($reviews as $review)
        <tr>
            <td>{{$review->id}}</td>
            <td>{{$review->first_name}} {{$review->last_name}}</td>
            <td>{{$review->email}}</td>
            <td>{{$review->job_title}}</td>
            <td>{{$review->city}}</td>
            <td>{{$review->country}}</td>
            <td>
                <a href="{{ route('reviews.edit',$review->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('reviews.destroy', $review->id)}}" method="post">
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
