<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ParKing</title>
<link rel="shortcut icon" href="images/icon/logo.png" type="image/x-icon">
<link rel="icon" href="images/icon/logo.png" type="image/x-icon" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a0408e60a8.js" crossorigin="anonymous"></script>

@include('users.admin.style_3')
@include('users.admin.style_4')

@include('users.admin.tabs.style_1')
</head>
<body>
    <div class="t-r links">
      <i class="fas fa-arrow-left"></i><a href="{{ url('/signin') }}">LOGOUT</a>
    </div>

  <h2>Admin Page</h2>
  <?php //echo $id; ?>
  <!-- <p>Welcome: @foreach($data as $d){{$d->first_name}}@endforeach</p> -->
  <p>Welcome: {{$id->first_name}}</p>


<button class="tablink" onclick="openPage('my_account', this, 'red')" >My Account</button>
<button class="tablink" onclick="openPage('my_account', this, 'yellow')" >Manage Users</button>
<button class="tablink" onclick="openPage('lands', this, 'green')" id="defaultOpen">Manage Parkings</button>
<button class="tablink" onclick="openPage('messages', this, 'blue')">User Messages</button>
<button class="tablink" onclick="openPage('reviews', this, 'orange')">Manage Reviews</button>

<div id="my_account" class="tabcontent">
@include('users.admin.tabs.account')
</div>

<div id="lands" class="tabcontent">
@include('users.admin.tabs.lands')
</div>

<div id="messages" class="tabcontent">
@include('users.admin.tabs.messages')
</div>

<div id="reviews" class="tabcontent">
@include('users.admin.tabs.reviews')
</div>

<div id="users" class="tabcontent">
@include('users.admin.tabs.users')
</div>

<!-- <div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div> -->


@include('users.admin.tabs.script_1')
</body>
</html>
