<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>

@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Parking spaces</h1>
     <div>
    <a style="margin: 19px;" href="{{ route('parking_spaces.create')}}" class="btn btn-primary">New parking_space</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Address</td>
          <td>Description</td>
          <td>Reservation_status</td>
          <td>Poya Day</td>
          <td>Bank Holiday</td>
          <td>Public Holiday</td>
          <td>Verified</td>
          <td>created_at</td>

          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($parking_spaces as $parking_space)
        <tr>
            <td>{{$parking_space->id}} {{$parking_space->landowner_id}} {{$parking_space->admin_id}}</td>
            <td>{{$parking_space->name}}</td>
            <td>{{$parking_space->address}}</td>
            <td>{{$parking_space->description}}</td>
            <td>{{$parking_space->reservation_status}}</td>
            <td>{{$parking_space->poya}}</td>
            <td>{{$parking_space->bank}}</td>
            <td>{{$parking_space->public}}</td>
            <td><input type="checkbox" name="verified" id="verified" checked />
            <input type="hidden" name="hidden_verified" id="hidden_verified" value="NotVerified" />
           </td>
            <td>{{$parking_space->created_at}}</td>
            <td>
                <a href="{{ route('parking_spaces.edit',$parking_space->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('parking_spaces.destroy', $parking_space->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <script>
$(document).ready(function(){
 
 $('#verified').bootstrapToggle({
    on: 'Verified',
    off: 'Not Verified',
    onstyle: 'success',
    offstyle: 'danger'
 });

   $('#verified').change(function(){
   if($(this).prop('checked'))
    {
       $('#hidden_verified').val('NotVerified');
    }
   else
   {
    $('#hidden_verified').val('Verified');
   }
  });

 // $('#insert_data').on('submit', function(event){
 //  event.preventDefault();
 //  if($('#name').val() == '')
 //  {
 //   alert("Please Enter Name");
 //   return false;
 //  }
 //  else
 //  {
 //   var form_data = $(this).serialize();
 //   $.ajax({
 //    url:"insert.php",
 //    method:"POST",
 //    data:form_data,
 //    success:function(data){
 //     if(data == 'done')
 //     {
 //      $('#insert_data')[0].reset();
 //      $('#gender').bootstrapToggle('on');
 //      alert("Data Inserted");
 //     }
 //    }
 //   });
 //  }
 // });

});
</script>
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
