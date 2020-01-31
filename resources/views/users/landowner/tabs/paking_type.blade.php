<div class='widget'>
  <div id='evening' class="tab-content">
    <table class="group-table">
      <caption>Parking Vehicle Type</caption>
      <thead>
        <tr>
          <th>parking_space_name</th>
          <th>vehicle_type</th>
          <th>total_no_of_vehicles</th>
          <th>no_of_vehicles_parked</th>
          <th>amount_per_hour</th>
          <th colspan = 2>Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach($parking_types as $parking_type)
          <tr>
              <!-- <td>{{$parking_type->parking_space_id}}</td> -->
              <td><?php
                $name = DB::table('parking_spaces')->where('id',$parking_type->admin_id)->value('name');
                echo $name;
              ?></td>
              <td>{{$parking_type->vehicle_type}}</td>
              <td>{{$parking_type->total_no_of_vehicles}}</td>
              <td>{{$parking_type->no_of_vehicles_parked}}</td>
              <td>{{$parking_type->amount_per_hour}}</td>
              <td>
                  <button class="btn btn-danger" type="submit">Change</button>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
