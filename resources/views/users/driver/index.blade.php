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

@include('users.driver.style_3')
@include('users.driver.style_4')

@include('users.driver.tabs.style_1')
@include('users.driver.tabs.script_1')
</head>
<body>
    <div class="t-r links">
      <i class="fas fa-arrow-left"></i><a href="{{ url('/signin') }}">LOGOUT</a>
    </div>

  <h2>Driver Page</h2>
  <p>Click on the buttons inside the tabbed menu:</p>

<button class="tablink" onclick="openPage('my_account', this, 'red')" >My Account</button>
<button class="tablink" onclick="openPage('reservations', this, 'green')" id="defaultOpen">My Reservations</button>
<button class="tablink" onclick="openPage('reviews', this, 'blue')">Reviews</button>
<button class="tablink" onclick="openPage('vehicle', this, 'orange')">Vehicle</button>

<div id="my_account" class="tabcontent">
@include('users.driver.tabs.account')
</div>

<div id="reservations" class="tabcontent" style="background:white">
@include('users.driver.tabs.reservations')
</div>

<div id="reviews" class="tabcontent">
@include('users.driver.tabs.reviews')
</div>
<div id="vehicle" class="tabcontent">
@include('users.driver.tabs.vehicle')
</div>

<!-- <div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div> -->

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
