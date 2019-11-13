<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>

  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a0408e60a8.js" crossorigin="anonymous"></script>

  @include('home/Card.card1.style_1')
  @include('home/Card.card1.style_2')

</head>
<body>
  <div class="flex-center position-ref full-height">

    <div class="top-right links">

      <i class="fas fa-arrow-left"></i><a href="{{ url('/') }}">BACK</a>

    </div>



  <div class="container">
    <!-- <div class="items">
    <div class="icon-wrapper">
    <i class="fa fa-file-text-o"></i>
  </div>
  <div class="project-name">
  <p>POSTS</p>
</div>
</div> -->
<div class="items">
  <div class="icon-wrapper">
    <i class="fas fa-car"></i>
    <!-- <i class="fa fa-th-list"></i> -->
  </div>
  <div class="project-name">
    <p>Driver</p>
  </div>
</div>
<div class="items">
  <div class="icon-wrapper">
    <i class="fas fa-landmark"></i>
    <!-- <i class="fa fa-th-large"></i> -->
  </div>
  <a href="landpage"><div class="project-name">
    <p>Landowner</p>
  </div></a>
</div>
</div>
</div>
</body>
</html>
