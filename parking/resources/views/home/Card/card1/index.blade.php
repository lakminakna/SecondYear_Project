<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('home/Card.card1.style_3')
</head>
<body>

  <h2>LandOwner Page</h2>
  <p>Click on the buttons inside the tabbed menu:</p>


<button class="tablink" onclick="openPage('my_account', this, 'red')" id="defaultOpen">My Account</button>
<button class="tablink" onclick="openPage('my_lands', this, 'green')">My Lands</button>
<button class="tablink" onclick="openPage('reservations', this, 'blue')">Reservations</button>
<!-- <button class="tablink" onclick="openPage('About', this, 'orange')">About</button> -->

<div id="my_account" class="tabcontent">
@include('home/Card.card1.tabs.my_account')
</div>

<div id="my_lands" class="tabcontent">
@include('home/Card.card1.tabs.my_lands')
</div>

<div id="reservations" class="tabcontent">
@include('home/Card.card1.tabs.reservations')
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
