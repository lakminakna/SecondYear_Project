<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">driver_id</th>
      <th scope="col">parking_space_id</th>
      <th scope="col">review</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reviews as $review)
    <tr>
      <th scope="row">{{$parking_space->id}}</th>
      <td>{{$review->driver_id}}</td>
      <td>{{$review->parking_space_id}}</td>
      <td>{{$review->review}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
