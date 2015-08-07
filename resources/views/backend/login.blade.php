<?php
/**
 * Created by PhpStorm.
 * User: choir
 * Date: 05/08/15
 * Time: 13:23
 */
?>
        <!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('images/icon.png')}}"/>
    <title>Checkin Jakarta</title>
    <!-- Error CSS -->
    <link href="{{ url('backend/css/login.css') }}" rel="stylesheet" media="screen">

    <!-- Animate CSS -->
    <link href="{{ url('backend/css/animate.css') }}" rel="stylesheet" media="screen">

    <!-- Font Awesome -->
    <link href="{{ url('backend/fonts/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
<form action="http://jesus.gallery/cloud2/index.html" id="wrapper">
    <div id="box" class="animated bounceIn">
        <div class="top">
            <img src="images/GTI-White.png" class="logo" width="40" style="float: left">
            <a class="right_a" href="#" style="color: #eec104; font-family: Helvetica;"><i>Cannot Access?</i></a>
            <span>Globe Teledigital Indonesia</span><br>
            <span style="color:#EEC104 ">ver 0.1</span>

        </div>
        <div id="top_header">
            <a href="#">
                <img class="logo" src="images/logo.png" alt="logo">
            </a>
            <h5>
                <i>Welcome to checkinjakarta admin page!</i>
            </h5>
        </div>
        <div id="inputs">
            <div class="form-control">
                <input type="text" placeholder="Email" name="email">
                <i class="fa fa-envelope-o"></i>
            </div>
            <div class="form-control">
                <input type="password" placeholder="Password" name="password">
                <i class="fa fa-key"></i>
            </div>
            <div id="bottom">
                <div class="squared-check">
                    <input type="checkbox" value="None" id="remember" name="remember" checked="">
                    <label for="remember"></label>

                    <div class="cb-label">Remember me?</div>
                </div>
                <input type="submit" value="Log In!">
            </div>
        </div>

    </div>
</form>
</body>
</html>

