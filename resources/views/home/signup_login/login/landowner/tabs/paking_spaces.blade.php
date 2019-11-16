<div class='widget'>
  <div id='evening' class="tab-content">
    <table class="group-table">
      <caption>Parking Spaces</caption>
      <thead>
        <tr>
          <th>parking_space_id</th>
          <th>vehicle_type</th>
          <th>total_no_of_vehicles</th>
          <th>no_of_vehicles_parked</th>
          <th>amount_per_hour</th>
          <th colspan = 2>Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach($parking_spaces as $paking_space)
          <tr>
              <td>{{$paking_space->parking_space_id}}</td>
              <td>{{$paking_space->vehicle_type}}</td>
              <td>{{$paking_space->total_no_of_vehicles}}</td>
              <td>{{$paking_space->no_of_vehicles_parked}}</td>
              <td>{{$paking_space->amount_per_hour}}</td>
              <td>
                  <button class="btn btn-danger" type="submit">Edit</button>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
