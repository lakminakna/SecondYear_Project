<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>ParKing</title>

   <link rel="shortcut icon" href="images/icon/logo.png" type="image/x-icon">
   <link rel="icon" href="images/icon/logo.png" type="image/x-icon" >


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <!-- class="fas fa-arrow-left  :-script -->
  <script src="https://kit.fontawesome.com/a0408e60a8.js" crossorigin="anonymous"></script>

  <style type="text/css">

  body {
    background: url("/assets/landowner/img/background.jpg");
}
.box{
 position: relative;
 top: 150px;
 width:500px;
 margin:0 auto;
 border:1px solid #ccc;
}
   .t-r {
       position: absolute;
       right: 10px;
       top: 18px;
   }
   .links > a {
       color: #000;
       padding: 0 25px;
       font-size: 13px;
       font-weight: 600;
       letter-spacing: .1rem;
       text-decoration: none;
       text-transform: uppercase;
   }
   .label {
   color: white;
   padding: 8px;
   font-family: Arial;
   font: 15px arial, sans-serif;
   font-weight: bold;
 }
 .label1 {
 color: white;
 padding: 8px;
 font-family: Arial;
 font: 30px arial, sans-serif;
 font-weight: bold;
}
  </style>
 </head>
 <body>
   <div class="t-r links">
     <i class="fas fa-arrow-left"></i><a href="{{ url('/signin') }}">BACK</a>
   </div>

  <br />
  <div class="container box">
   <h3 align="center"><span class="label1 success">Landowner Login</span></h3><br />

   @if(isset(Auth::user()->email))
    <script>window.location="/main/successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form  action="/loginlandowner" method="post">

    <!-- <input type="hidden" name="token" value="{{ csrf_field() }}"/>  -->
    <!-- to prevent Cross-site request forgeries -->
    <div class="form-group">
     <label><span class="label success">Enter Username</span></label>
     <input type="text" name="username" class="form-control" />
    </div>
    <div class="form-group">
     <label><span class="label success">Enter Password</span></label>
     <input type="password" name="password" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>
   </form>
  </div>
 </body>
</html>
