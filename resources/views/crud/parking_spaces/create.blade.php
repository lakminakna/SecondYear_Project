@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add your Parking</h1>
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
      <form method="post" action="{{ route('parking_spaces.store') }}">
          @csrf
          <div class="form-group">
              <label for="name">Name of the parking space:</label>
              <input type="text" class="form-control" name="name" autocomplete="on" required/>
          </div>

          <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address" autocomplete="on" required/>
          </div>

          <div class="form-group">
              <label for="description">Description:</label>
              <input type="textarea" class="form-control" name="description" autocomplete="on" required/>
          </div>



          <div class="form-group">
              <label for="image">Images:</label>
              <!-- <input type="file" name="parkingimage"  multiple> -->   <!-- This is the normal way in html -->
              <!-- Laravel multiple image upload verification starts here -->
              <!-- <div class="container">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif -->

    <!-- <h3 class="jumbotron">Laravel Multiple File Upload</h3> -->
<!-- <form method="post" action="{{url('form')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        <div class="input-group control-group increment" >
          <input type="file" name="image" class="form-control">   previously - name="filename[]
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div> -->
        <!-- <div class="clone hide"> 
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>-->
<!-- 
        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div> -->

  <!-- Laravel multiple image upload verification ends here -->

          </div>



          <!-- <div class="form-group"> 
              <label for="city">Open from:</label>
              <input type="datetime-local" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="country">Open till:</label>
              <input type="datetime-local" class="form-control" name="country"/>
          </div>-->

          <div>
               <label for="city">Open on:</label><br>
              <input type="checkbox" name="opentime1" value="1"> Poya days
              <input type="checkbox" name="opentime2" value="1"> Public Holidays
              <input type="checkbox" name="opentime3" value="1" > Bank Holidays<br><small>Thesse will be displayed for the users of the application</small><br><br>
          </div>

           <!-- <div> 
               <label for="city">Open Time:</label><br>
               <table style="width:100%">
                <tr>
              <td><label for="nothing"></label></td>
              <th> <label for="openfrom">Open from:</label></th>
              <th><label for="opentill">Open Till:</label></th>
            </tr>
                <tr>
               <th><label for="monday">Monday</label></th>
               <td><input type="time" class="form-control" name="open_time"/></td>
              <td><input type="time" class="form-control" name="open_time"/> </td>
            </tr>
            <tr>
              <th><label for="tuesday">Tuesday</label></th>
              <td><input type="time" class="form-control" name="open_time"/></td>
              <td><input type="time" class="form-control" name="open_time"/></td>
            </tr>
             <tr>
              <th><label for="wednesday">Wednesday</label></th>
              <td><input type="time" class="form-control" name="open_time"/></td>
              <td><input type="time" class="form-control" name="open_time"/></td>
            </tr>
             <tr>
              <th><label for="thursday">Thursday</label></th>
              <td><input type="time" class="form-control" name="open_time"/></td>
              <td><input type="time" class="form-control" name="open_time"/></td>
            </tr>
             <tr>
              <th><label for="friday">Friday</label></th>
              <td><input type="time" class="form-control" name="open_time"/></td>
              <td><input type="time" class="form-control" name="open_time"/></td>
            </tr>
             <tr>
              <th><label for="saturday">Saturday</label></th>
              <td><input type="time" class="form-control" name="open_time"/></td>
              <td><input type="time" class="form-control" name="open_time"/></td>
            </tr>
             <tr>
              <th><label for="sunday">Sunday</label></th>
              <td><input type="time" class="form-control" name="open_time"/></td>
              <td><input type="time" class="form-control" name="open_time"/></td>
            </tr>
          </table>
          <br>
          </div>  -->

          <!-- <div class="form-group">
               <label for="reservation">Is reservation allowed?</label></br>
              <input type="radio"  name="reservation_status" value="yes"> Allowed<br>
              <input type="radio"  name="reservation_status" value="no"> Not allowed<br>
          </div> -->
          <button type="submit" class="btn btn-primary-outline">Add Parking</button>
      </form>
  </div>
</div>
</div>
@endsection
