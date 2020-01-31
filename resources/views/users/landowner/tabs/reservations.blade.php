<div class='widget'>
  <div id='evening' class="tab-content">
    <table class="group-table">
      <caption>Reservations</caption>
      <thead>
        <tr>
          <th>Parking Space Name</th>
          <th>driver_id</th>
          <th>duration_from</th>
          <th>duration_to</th>
          <th>vehicle type</th>
          <th colspan = 2>Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach($reservations as $reservation)
          <tr>
              <!-- <td>{{$reservation->id}}</td> -->
              <td><?php
                $name = DB::table('parking_spaces')->where('id',$reservation->parking_space_id)->value('name');
                echo $name;
              ?>
              <form action="/landDetails" method="GET" role="search">
                <input type="hidden" value="{{$reservation->parking_space_id}}" name="landDetails_id">
                <button class="btn btn-outline-success btn-sm" type="submit">View</button>
              </form>
            </td>
              <td>{{$reservation->driver_id}}</td>
              <td>{{$reservation->duration_from}}</td>
              <td>{{$reservation->duration_to}}</td>
              <td>{{$reservation->vehicle_type}}</td>
              <td>
                  <!-- <a href="{{ route('reservations.edit',$reservation->id)}}" class="btn btn-primary">Accept</a> -->
                  <button class="btn btn-danger" type="submit">Accept</button>
              </td>
              <td>
                  <form action="{{ route('reservations.destroy', $reservation->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Reject</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</div>
