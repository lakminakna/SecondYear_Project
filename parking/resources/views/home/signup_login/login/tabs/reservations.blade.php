<h3>Reservations</h3>
<p>Get in touch, or swing by for a cup of coffee.</p>

<div class='widget'>
  <div id='evening' class="tab-content">
    <table class="group-table">
      <caption>Reservations</caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>driver_id</th>
          <th>parking_space_id</th>
          <th>duration_from</th>
          <th>duration_to</th>
          <th>vehicle type</th>
          <th colspan = 2>Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach($reservations as $reservation)
          <tr>
              <td>{{$reservation->id}}</td>
              <td>{{$reservation->driver_id}}</td>
              <td>{{$reservation->parking_space_id}}</td>
              <td>{{$reservation->duration_from}}</td>
              <td>{{$reservation->duration_to}}</td>
              <td>{{$reservation->vehicle_type}}</td>
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
  </div>
</div>