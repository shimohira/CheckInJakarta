<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('images/icon.png')}}"/>
    <title>Checkin Jakarta</title>
    <link rel="stylesheet" href="{{ url('frontend/css/app.css')}}" />
    <script src="{{ url('frontend/bower_components/modernizr/modernizr.js') }}"></script>

</head>
<body>
<!-- header -->
<div class="header" id="header">
    <div class="row">
        <div class="large-2 small-4 logo left"><img src="images/logo.png" alt=""></div>
        <div class="large-7 small-12 medium-8 left">
            <div class="row select-ct no-padding">
                <div class="large-6 small-6 left">
                    <label>
                        <input type="text" placeholder="Search by Tag..." class="input-1 yellow"/>
                    </label>
                </div>
                <div class="large-6 small-6 right">
                    <label>
                        <input type="text" placeholder="Search by  keyword" class="input-2 yellow"/>
                    </label>
                </div>
            </div>
        </div>
        <div class="large-3 medium-8 small-8 social mb right">
            <ul class="sc">
                <a href="#"> <li class="insta"></li></a>
                <a href="#"> <li class="pnt"></li></a>
                <a href="#"> <li class="gp"></li></a>
                <a href="#"> <li class="tw"></li></a>
                <a href="#"> <li class="fb"></li></a>
            </ul>
        </div>
    </div>
</div>
<!-- /header -->
<!-- nav -->
<div  id="mainnav" class="nav">
    <div class="row">
        <div class="menu">
            <a href="#!"><div id="menu">MENU</div></a>
        </div>
        <!--NvDesktop-->
        <ul class="navigation nav-mobile">
            <a href="#"><li class="active">Home</li></a>
            <a href="#">
                <li class="lifestyle">Lifestyle
                    <ul class="submenu">
                        <a href="#"><li>Brand</li></a>
                        <a href="#"><li>Tech</li></a>
                        <a href="#"><li>Tips</li></a>
                        <a href="#"><li>Events</li></a>
                        <a href="#"><li>People</li></a>
                    </ul>
                </li>
            </a>
            <a href="#"><li>f&b</li></a>
            <a href="#"><li>accomodation</li></a>
            <a href="#"><li>spot</li></a>
            <a href="#"><li>Business</li></a>
            <a href="#"><li>Directory</li></a>
        </ul>
    </div>
</div>
<!-- /nav -->

@yield('content')

        <!-- nav-footer -->
<div class="nav-footer">
    <div class="row">
        <ul>
            <a href="#"><li><p>HOME</p></li></a>
            <a href="#"><li><p>Lifestyle</p></a>
            <ul class="ff-nav">
                <a href="#"><li>History & Knowledge</li></a>
                <a href="#"><li>Tips</li></a>
                <a href="#"><li>Community</li></a>
                <a href="#"><li>Technology</li></a>
                <a href="#"><li>Events</li></a>
                <a href="#"><li>People</li></a>
            </ul>
            </li>
            <a href="#"><li><p>F&B</p></a>
            <ul class="ff-nav">
                <a href="#"><li>Fine Dine</li></a>
                <a href="#"><li>Cafe & Resto</li></a>
                <a href="#"><li>Street Food</li></a>
            </ul>
            </li>
            <a href="#"><li><p>ACCOMODATION</p></a>
            <ul class="ff-nav">
                <a href="#"><li>Hotel</li></a>
                <a href="#"><li>Guest House</li></a>
                <a href="#"><li>Villas</li></a>
                <a href="#"><li>Apartment</li></a>
            </ul>
            </li>
            <a href="#"><li><p>SPOT</p></a>
            <ul class="ff-nav">
                <a href="#"><li>Night Life</li></a>
                <a href="#"><li>Recreation</li></a>
                <a href="#"><li>Shopping</li></a>
                <a href="#"><li>Wellnerss</li></a>
            </ul>
            </li>
            <a href="#"><li><p>BUSINESS</p></a>
            <ul class="ff-nav">
                <a href="#"><li>Profile</li></a>
                <a href="#"><li>Company</li></a>
                <a href="#"><li>Fresh</li></a>
                <a href="#"><li>Biz Community</li></a>
            </ul>
            </li>
            <a href="#"><li class="footer-last"><p>Directory</p></a>
            <ul class="ff-nav">
                <a href="#"><li class="footer-last"><p>ABOUT</p></li></a>
                <a href="#"><li class="footer-last"><p>SITEMAP</p></li></a>
                <a href="#"><li class="footer-last"><p>PRIVACY POLICY</p></li></a>
                <a href="#"><li class="footer-last"><p>TERM OF USE</p></li></a>
                <a href="#"><li class="footer-last"><p>ADVERTISE</p></li></a>
                <a href="#"><li class="footer-last"><p>CONTACT</p></li></a>
            </ul>
            </li>
        </ul>
    </div>
</div>
<!-- nav-footer -->
<div class="sbr">
    <div class="row sbr">
        <div class="large-8 small-12 medium-8 left join-box">
            <div class="large-6 small-12 medium-7 left join">
                <h4>JOIN/FOLLOW OUR SOCIAL ON</h4>
            </div>
            <div class="large-4 small-12 medium-4 social social-footer right">
                <ul class="sc-2">
                    <a href="#"> <li class="insta"></li></a>
                    <a href="#"> <li class="pnt"></li></a>
                    <a href="#"> <li class="gp"></li></a>
                    <a href="#"> <li class="tw"></li></a>
                    <a href="#"> <li class="fb"></li></a>
                </ul>
            </div>
        </div>
        <a href="#">
            <div class="large-3 small-12 medium-3 subs-footer right">
                <div class="pencil left"><img src="{{ url('images/pencil.png') }}" alt=""></div>
                <h3>SUBSCRIBE NOW!</h3>
            </div>
        </a>
    </div>
</div>
<div class="footer">
    <div class="row">
        <div class="large-6 small-12 left"><p>www.checkinjakarta.com (C) 2015 </p></div>
        <div class="large-6 right">
        </div>
    </div>
</div>
<a href="#header"><div class="toTop"></div></a>
<script src="{{ url('frontend/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('frontend/bower_components/foundation/js/foundation.min.js') }}"></script>
<script src="{{ url('frontend/js/app.js') }}"></script>
<script src="{{ url('frontend/js/custom.js') }}"></script>
<script>
    $(".lifestyle").hover(function(){
        $(".submenu").toggle();
    });
</script>
<script>
    $("#menu").click(function(){
        $(".nav-mobile").toggle();
    });
</script>
</body>
</html>
