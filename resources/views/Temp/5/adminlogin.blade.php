<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesom.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style type="text/css">
        body{
            background :url(/images/icon/white2.jpg)no-repeat center center fixed;
            background-size:cover;
        }
        .main-section{
            margin:0 auto;
            margin-top:130px;
            padding:.95;
        }
        .modal-content{
            background-color:#3b4652;
            opacity:.95;
            padding:0 18px;
            box-shadow:0px 0px 3px #848484;
        }
        .logo{
            margin-top:-50px;
            margin-bottom:35px;
        }
        .logo img{
            
            border-radius:5px;
            box-shadow:0px 0px 2px #848484;
        }
        .form-group{
            margin-bottom:25px;
        }
        .form-group{
            height:42px;
            border-radius:5px;
            border:0;
            font-size:18px;
        }
        .form-group::before{
            font-size:22px;
            padding-top:4px;
        }
        button{
            width:40%;
            margin:5px 0 25px;
        }
        .btn{
            background-color:#FFFF00;
            color:#000000;
            font-size:19px;
            padding:7px 14px;
            border-radius:5px;
            border-bottom:4px solid #FFFF00;
        }
        .btn:hover, .btn:focus{
            background-color:#FFFF33!important;
            border-bottom:4px solid #FFFF33!important;
        }
        .svg-inline--fa{
            font-size:20px;
            margin-right:7px;
        }
        .forgot{
            padding:5px 0 25;
        }
        .forgot a{
            color:#c2fbfe;
        }
        .t-r links{
            margin-right:80%;
        }
    </style>
</head>
<body>
    <div class="t-r links">
        <button><i class="fas fa-arrow-left"></i><a href="{{ url('/signin') }}">BACK</a></button>
    </div>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">

                <div class="col-12 logo">
                    <img src="/images/icon/yellowlogo.png" width="50%" >
                </div>
                <form class="col-12">
                    <div class="form-group">
                        
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                    </div>
                    
                    <button type="submit" class="btn btn-default"><i class="fas fa-sign-in-alt"></i>Login</button>
                </form>

                <div class="col-12 forgot">
                        <a href="#">forgot password?</a>
                </div>
            </div>
        </div>
    </div>
        
</body>
</html>