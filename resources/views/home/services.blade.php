<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
    <title>ParKing</title>  

    <link rel="shortcut icon" href="images/icon/logo.png" type="image/x-icon"> <!-- title bar icon -->
    <link rel="icon" href="images/icon/logo.png" type="image/x-icon" >

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/jQuery.verticalCarousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/styleServices.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/responsive.css') }}">
</head>

<body class="loading">
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-12">
                        <div class="logo">
                            <a href="#"><img src="{{ URL::asset('assets/landowner/img/logo.png')}}" alt="profile Pic" height="80" width="120"></a>    <!-- System Logo -->
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-9 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="home">Home</a></li>
                                <li><a href="services">Service</a></li>
                                <li><a href="privacy_policy">Privacy Policy</a></li>
                                <li><a href="pricing">Pricing</a></li>
                                <li><a href="help">Help</a></li>
                            </ul>
                            <div class="sign_up">
                              <div class="col-md-7">
                                <p><a href="signup">sign up</a></p>
                              </div>
                              <div class="col-md-5">
                                <p><a href="signin">Login</a></p>
                              </div>
                            </div>

                        </div>
                    </div>
                </div>
               <div class="container">
            
                <div class="text-center welcome-text">
                
                     <h1>Services</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    <h3>Find a parking space</h3>
                        <p class="text-center description">We are reliable on offering large number of parking spaces.You can find your best option for every journey use parking 
                        spaces via  website.Find parkings within 5 minutes and whenever you need it,from work journey to weekend trips,shopping to sports stadiums,we've got you 
                        covered with directions to vehicle parks and  on-street spaces,plus info on availability and restrictions.
                        </p>
                    </div>
                </br>
                    <div class="col-sm-12">
                    <h3>Let a space</h3>
                        <p class="text-center description">If you have a spare parking space ,garge or underused land-why not let it out and enjoy an additional income.
                        We are responsible on help in make easy tax free money by renting put your parking space .Iy is free to list and only takes a few minutes to get 
                        up and running.Send your space today and we will rent ut your land.
                        </p>
                    </div>
                </div>
        </div>
                
            </div>
        </header>


               


        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ URL::asset('assets/landowner/img/logo.png')}}" alt="profile Pic" height="50" width="80"></a>
                        </div>
                        <div class="footer_first_menu">
                            <ul>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">About Us</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="footer_last_menu">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <ul>
                                        <li><a href="home">Home</a></li>
                                        <li><a href="services">Service</a></li>
                                        <li><a href="privacy_policy">Privacy Policy</a></li>
                                        <li><a href="pricing">Pricing</a></li>
                                        <li><a href="help">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="footer_last_icon">
                                    <p><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ URL::asset('assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery.flexslider.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jQuery.verticalCarousel.js')}}"></script>
    <script src="{{ URL::asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{ URL::asset('assets/js/active.js')}}"></script>
</body>

</html>
