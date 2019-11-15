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

@include('home/signup_login.login.driver.style_3')
@include('home/signup_login.login.driver.style_4')

@include('home/signup_login.login.driver.tabs.style_1')
@include('home/signup_login.login.driver.tabs.script_1')
</head>
<body>
    <div class="t-r links">
      <i class="fas fa-arrow-left"></i><a href="{{ url('/signin') }}">BACK</a>
    </div>

  <h2>LandOwner Page</h2>
  <p>Click on the buttons inside the tabbed menu:</p>


<button class="tablink" onclick="openPage('my_account', this, 'red')" id="defaultOpen">My Account</button>
<button class="tablink" onclick="openPage('my_lands', this, 'green')" >Reservations</button>
<button class="tablink" onclick="openPage('reservations', this, 'blue')">Reviews</button>
<!-- <button class="tablink" onclick="openPage('About', this, 'orange')">About</button> -->

<div id="my_account" class="tabcontent">
@include('home/signup_login.login.driver.tabs.my_account')
</div>

<div id="my_lands" class="tabcontent" style="background:white">
@include('home/signup_login.login.driver.tabs.my_lands')
</div>

<div id="reservations" class="tabcontent">
@include('home/signup_login.login.driver.tabs.reservations')
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
