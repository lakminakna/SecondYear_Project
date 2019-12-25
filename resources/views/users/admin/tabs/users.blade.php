<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search : Land Space Name Or Address"> <span class="input-group-btn">
        <input type="hidden" value="{{$username}}" name="username">
        <input type="hidden" value="{{$password}}" name="password">
            &emsp;<button type="submit" class="btn btn-info btn-sm">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
            <!-- <a href="/adminrefresh" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Refresh</a> -->
        </span>
    </div>
</form>
<br>
<br>
<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Admin Name</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Verified</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($parking_spaces as $parking_space)
    <tr>
      <th scope="row">{{$parking_space->id}}</th>
      <td>{{$parking_space->name}}</td>
      <td>{{$parking_space->name}}</td>
      <td>{{$parking_space->address}}</td>
      <td>{{$parking_space->verified}}</td>
      <!-- <td>{{$parking_space->admin_id}}</td> -->
      <td><?php
        $name = DB::table('admins')->where('id',$parking_space->admin_id)->value('first_name');
        echo $name;
      ?></td>
      <td>
          <form action="/landDetails" method="GET" role="search">
            <input type="hidden" value="{{$parking_space->id}}" name="landDetails_id">
            <button class="btn btn-outline-success" type="submit">View</button> 
          </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
