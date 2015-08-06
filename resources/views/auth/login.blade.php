<?php
/**
 * Created by PhpStorm.
 * User: choir
 * Date: 05/08/15
 * Time: 14:47
 */ ?>

        <!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Checkin Jakarta</title>
    <!-- Error CSS -->
    <link href="{{ url('backend/css/login.css') }}" rel="stylesheet" media="screen">

    <!-- Animate CSS -->
    <link href="{{ url('backend/css/animate.css') }}" rel="stylesheet" media="screen">

    <!-- Font Awesome -->
    <link href="{{ url('backend/fonts/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
  @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    @if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
<form method="POST" action="{{ url('/auth/login') }}" id="wrapper">
    {!! csrf_field() !!}				
    <div id="box" class="animated bounceIn">
        <div class="top" style="padding-bottom: 10px; line-height: 15px;">
            <img src="/images/GTI-White.png" class="logo" width="40" style="float: left">
            <a class="right_a" href="#" style="color: #eec104; font-family: Helvetica;"><i>Cannot Access?</i></a>
            <div style="padding-top: 5px">
                <div><span class="texttop" style="margin-top: 10px">Globe Teledigital Indonesia</span></div>
                <div><span class="texttop" style="color:#EEC104 ">ver 0.1</span></div>
            </div>
        </div>
        <div id="top_header" style="padding-bottom: 40px">
            <a href="#">
                <img class="logo" src="/images/logo.png" alt="logo">
            </a>
            <h5>
                <i>Welcome to checkinjakarta admin page!</i>
            </h5>
        </div>
        <div id="inputs">
            <div class="form-control" style="padding-bottom: 10px">
                <input type="text" placeholder="Email" name="email" value="{{ old('email') }}">
                <i class="fa fa-envelope-o"></i>
            </div>
            <div class="form-control" style="padding-bottom: 30px">
                <input type="password" placeholder="Password" name="password">
                <i class="fa fa-key"></i>
            </div>
            <div id="bottom">

                <input type="submit" value="Log In!" style="float: right; font-weight: bold">

                <div class="squared-check">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember"></label>

                    <div class="cb-label">Remember me?</div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>

