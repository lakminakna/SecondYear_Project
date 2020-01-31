<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search Parking Space"> <span class="input-group-btn">
          <input type="hidden" value="{{$username}}" name="username">
          <input type="hidden" value="{{$password}}" name="password">
              &emsp;<button type="submit" class="btn btn-info btn-sm">
                  <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
<br>
<br>
<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">driver_id</th>
      <th scope="col">parking_space_id</th>
      <th scope="col">review</th>
      <th colspan = 2></th>
    </tr>
  </thead>
  <tbody>
    @foreach($reviews as $review)
    <tr>
      <!-- <th scope="row">{{$review->id}}</th> -->
      <td>{{$review->driver_id}}</td>
      <td>{{$review->parking_space_id}}</td>
      <td>{{$review->review}}</td>
      <td>
          <button class="btn btn-danger" type="submit">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
