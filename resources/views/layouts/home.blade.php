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
<div class="header">
    <div class="row">
        <div class="large-2 small-4 logo left"><img src="images/logo.png" alt=""></div>
        <div class="large-6 small-12 medium-8 left">
            <div class="row select-ct no-padding">
                <div class="large-6 small-6 left">
                    <label>
                        <select class="select select-1">
                            <option value="">#Tags</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </label>
                </div>
                <div class="large-6 small-6 right">
                    <label>
                        <select class="select select-2">
                            <option value="">#Find</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
        <div class="large-4 medium-8 small-8 social right">
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
        <div class="large-2 medium-2 small-12 left">
            <p>HOME</p>
        </div>
        <div class="large-2 medium-2 small-12 left">
            <p>Lifestyle</p>
            <ul>
                <li>Brand</li>
                <li>Tech</li>
                <li>Tips</li>
                <li>Events</li>
                <li>People</li>
            </ul>
        </div>
        <div class="large-2 medium-2 small-12 left">
            <p>Places</p>
            <ul>
                <li>Resto</li>
                <li>Clubs</li>
                <li>Bars</li>
                <li>Hotels</li>
                <li>Wisata</li>
            </ul>
        </div>
        <div class="large-2 medium-2 small-12 left">
            <p>Culinary</p>
            <ul>
                <li>Foods</li>
                <li>Drinks</li>
                <li>Kaki Lima</li>
                <li>Resep</li>
            </ul>
        </div>
        <div class="large-2 medium-2  small-12 left">
            <p>Automotive</p>
            <ul>
                <li>Bengkel</li>
                <li>Modifikasi</li>
                <li>Parts</li>
                <li>Ototips</li>
            </ul>
        </div>
        <div class="large-2 medium-2 small-12 left">
            <p>Directory</p>
        </div>
    </div>
</div>
<!-- nav-footer -->

<div class="footer">
    <div class="row">
        <div class="large-6 small-12 left"><p>www.checkinjakarta.com (C) 2015 </p></div>
        <div class="large-6 right">
            <div class="large-12 small-12 social social-footer right">
                <ul class="sc-2">
                    <a href="#"> <li class="insta"></li></a>
                    <a href="#"> <li class="pnt"></li></a>
                    <a href="#"> <li class="gp"></li></a>
                    <a href="#"> <li class="tw"></li></a>
                    <a href="#"> <li class="fb"></li></a>
                </ul>
            </div>
        </div>
    </div>
</div>
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
