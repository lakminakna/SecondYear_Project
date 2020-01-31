
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
    <link rel="stylesheet" href="{{ URL::asset('assets/stylePricing.css') }}">
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
                
                     <h1>Privacy Policy</h1>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-center description">When you use this website ,you must obsense these terma and conditions.We (ParKing) may change them from time to time .
                        The coprright and all other intellectual property rights in this website belong to us.You must not copy,transmit,store contents of this website without our
                         written consent.
                        </p>
                        <h3>Access to parking</h3>
                        <p class=" description">
                            Due to the nature of software and the internet.We cannot gurantee that your access to or running of this website shall be uniterupted or erro free.
                        </p>
                        <h3>Privacy</h3>
                        <p class=" description">
                            We are commited to protecting your privacy and collect only data that is essential for us to provide you with our service.
                        </p>
                        <p class=" description">
                            When you register for our service we need to know details such as your name ,address ,telephone number and e-mail addrress.This allow us to communicate with
                             you about new enquiries,special offers and changes to operate a secure logging in system for you to access your own account in order to amend it.
                        </p>
                        <h3>Communication</h3>
                        <p class=" description">
                            We request that all information provided to us is accurate ,current and complete. 
                        </p>
                        <p class=" description">
                            Personal information that you supply to us will not be disclosed by us to any third party save in accordance with our privacy policy.You agree that we may use
                             the personal information supplied by you in accordance with our privacy policy.
                        </p>
                        <p class=" description">
                            All notices sent to you will be sent to the email address provided to us.By accepting these terms you give your consent to recieve communications that we provide
                             to you by email satisfy any legalrequirement that such communications be in writing.
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
