<div class='widget'>
  <div id='afternoon' class="tab-content">
    <table class="group-table">
      <caption>My Lands</caption>
      <thead>
        <tr>
          <th>ID | Name</th>
          <th>address</th>
          <th>image</th>
          <th>open_from</th>
          <th>open_till</th>
          <th>open_status</th>
          <th>reservation_status</th>
          <th colspan = 2>Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach($parking_spaces as $parking_space)
          <tr>
              <td>{{$parking_space->id}} | {{$parking_space->name}}</td>
              <td>{{$parking_space->address}}</td>
              <td>{{$parking_space->image}}</td>
              <td>{{$parking_space->open_from}}</td>
              <td>{{$parking_space->open_till}}</td>
              <td>{{$parking_space->open_status}}</td>
              <td>{{$parking_space->reservation_status}}</td>
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
          @endforeach
      </tbody>
    </table>
  </div>
</div>

	<div style="background-color:">
	  <h3>LandName should come from Database</h3>
	  <p>Description from the database should come here</p>
<table>
	  <tr>
    <td>Address of the land</td>
    <td>Open status from database</td>
 
</table
	  <div>
	  	<table align="right"; 
	  	style="width:50%">
	  <tr>
	    <th>image</th>
	    <th>image</th> 
	    <th>image</th>
	  </tr>
	  <tr>
	    <th>image</th>
	    <th>image</th> 
	    <th>image</th>
	  </tr>
	  	</table>
	  </br>
		<button type="button" class="btn btn-warning" align="right">View</button>
		<button type="button">Request Update</button>
		<button type="button">Request Delete</button>
	  </div>
	</div>