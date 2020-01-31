<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Search Date"> <span class="input-group-btn">
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
  <caption>List of Reviews</caption>
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <!-- <th scope="col">first_name</th> -->
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone_no</th>
      <th scope="col">description</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <!-- <th scope="row">{{$contact->id}}</th> -->
      <!-- <td>{{$contact->first_name}}</td> -->
      <td>{{$contact->first_name}} {{$contact->last_name}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->phone_no}}</td>
      <td>{{$contact->description}}</td>
      <td>{{$contact->created_at}}</td>
      <td>
          <button class="btn btn-success" type="submit">Reply</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
