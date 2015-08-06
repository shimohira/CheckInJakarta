@extends('layouts.backend')
@section('content')
        <!-- Top Bar Starts -->
<div class="top-bar clearfix">
    <div class="page-title">
        <h4>
            <div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
            Dashboard <a href="#" class="samll">Breadcrumb</a></h4>
    </div>
    <ul class="right-stats hidden-xs" id="mini-nav-right">
        <li class="reportrange btn btn-success">
            <i class="fa fa-calendar"></i>
            <span></span> <b class="caret"></b>
        </li>
        <li>
            <a href="#" class="btn btn-info sb-open-right sb-close">
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
        <!-- Row Starts -->
        <div class="row no-gutter">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Sales</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number">
                                <span>00</span>$4595
                            </h1>

                            <p class="avg">Total</p>
                            <ul class="details">
                                <li>
                                    <h4 class="num">1795</h4>
                                    <small>Customers</small>
                                </li>
                                <li>
                                    <h4 class="num">125</h4>
                                    <small>Products</small>
                                </li>
                                <li>
                                    <h4 class="num">8291</h4>
                                    <small>Orders</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Conversion Rate</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-line-chart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number primary">
                                <span>000</span>76<sup>%</sup>
                            </h1>

                            <p class="avg">Total</p>

                            <div class="progress progress-sm">
                                <div class="progress-bar progress-bar-success" style="width: 40%">
                                </div>
                                <div class="progress-bar progress-bar-primary" style="width: 60%">
                                </div>
                            </div>
                            <ul class="min-max">
                                <li>
                                    <h4 class="num">
                                        <small>Min</small>
                                        2579
                                    </h4>
                                </li>
                                <li>
                                    <h4 class="num">
                                        <small>Max</small>
                                        4475
                                    </h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Demography</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-mars-double"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="daily-stats">
                            <h1 class="number primary">
                                <span>00</span>3295
                            </h1>

                            <p class="avg">Average</p>
                            <ul class="demography">
                                <li>
                                    <i class="fa fa-male text-info"></i>
                                    <h4 class="num">47239
                                        <small>Male</small>
                                    </h4>
                                </li>
                                <li>
                                    <i class="fa fa-female text-pink"></i>
                                    <h4 class="num">21925
                                        <small>Female</small>
                                    </h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row Ends -->

        <!-- Row Starts -->
        <div class="row no-gutter">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Statistics</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div id="combineChart" class="chart-height"></div>
                        <hr class="hidden-xs">
                        <div class="row hidden-xs">
                            <div class="col-md-3 col-sm-3 col-xs-3 center-align-text">
                                <h3 class="no-margin no-padding">23373</h3>
                                <small class="text-muted">Orders</small>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 center-align-text">
                                <h3 class="no-margin no-padding">5575</h3>
                                <small class="text-muted">Products</small>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 center-align-text">
                                <h3 class="no-margin no-padding">1189</h3>
                                <small class="text-muted">Customers</small>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3 center-align-text">
                                <h3 class="no-margin no-padding">$5854</h3>
                                <small class="text-muted">Income</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h4>Social Mertics</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-bar-chart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <ul class="progress-stats">
                            <li>
                                <div class="details">
                                    <span>Foreign Visits</span>
                                    <span class="pull-right">70%</span>
                                </div>
                                <div class="progress progress-sm no-margin">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Complete (success)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="details">
                                    <span>Local Visits</span>
                                    <span class="pull-right">40%</span>
                                </div>
                                <div class="progress progress-sm no-margin">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="details">
                                    <span>Other Visits</span>
                                    <span class="pull-right">30%</span>
                                </div>
                                <div class="progress progress-sm no-margin">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                        <span class="sr-only">30% Complete (warning)</span>
                                    </div>
                                </div>
                            </li>
                            <li class="half-width">
                                <div class="details">
                                    <span>Today</span>
                                    <span class="pull-right">30%</span>
                                </div>
                                <div class="progress progress-sm no-margin">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                        <span class="sr-only">30% Complete (danger)</span>
                                    </div>
                                </div>
                            </li>
                            <li class="half-width left-margin">
                                <div class="details">
                                    <span>Yesterday</span>
                                    <span class="pull-right">70%</span>
                                </div>
                                <div class="progress progress-sm no-margin">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Complete (danger)</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row Ends -->

        <!-- Row start -->
        <div class="row no-gutter">
            <div class="col-md-4 col-sm-6 col-sx-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>ToDos</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-tasks"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tasks">
                            <fieldset class="tasks-list">
                                <label class="tasks-list-item">
                                    <input type="checkbox" name="task_1" value="1" class="tasks-list-cb" checked>
                                    <span class="tasks-list-mark"></span>
                                    <span class="tasks-list-desc">Attend Research Seminar</span>
                                </label>
                                <label class="tasks-list-item">
                                    <input type="checkbox" name="task_2" value="1" class="tasks-list-cb" checked>
                                    <span class="tasks-list-mark"></span>
                                    <span class="tasks-list-desc">Social Media Workshop</span>
                                </label>
                                <label class="tasks-list-item">
                                    <input type="checkbox" name="task_3" value="1" class="tasks-list-cb">
                                    <span class="tasks-list-mark"></span>
                                    <span class="tasks-list-desc">Pick up Kids @ 3pm</span>
                                </label>
                                <label class="tasks-list-item">
                                    <input type="checkbox" name="task_4" value="1" class="tasks-list-cb">
                                    <span class="tasks-list-mark"></span>
                                    <span class="tasks-list-desc">Skype Call 7pm</span>
                                </label>
                                <label class="tasks-list-item">
                                    <input type="checkbox" name="task_5" value="1" class="tasks-list-cb">
                                    <span class="tasks-list-mark"></span>
                                    <span class="tasks-list-desc">The power of Habit</span>
                                </label>
                                <label class="tasks-list-item">
                                    <input type="checkbox" name="task_6" value="1" class="tasks-list-cb">
                                    <span class="tasks-list-mark"></span>
                                    <span class="tasks-list-desc">Attend Birthday party</span>
                                </label>
                                <label class="tasks-list-item">
                                    <input type="checkbox" name="task_7" value="1" class="tasks-list-cb">
                                    <span class="tasks-list-mark"></span>
                                    <span class="tasks-list-desc">Meet Mr. John</span>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-sx-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Chats</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-comment-o"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <ul class="chat">
                            <li class="in">
                                <img class="avatar" alt="" src="backend/img/admin11.png">

                                <div class="message">
													<span class="arrow">
													</span>
                                    <a href="#" class="name">
                                        Sandy
                                    </a>
													<span class="date-time">
														at Feb 10th, 2015 10:22
													</span>
													<span class="body body-grey">
														Raw denim you probably haven't heard.
													</span>
                                </div>
                            </li>
                            <li class="out">
                                <img class="avatar" alt="" src="backend/img/admin8.png">

                                <div class="message">
													<span class="arrow">
													</span>
                                    <a href="#" class="name">
                                        Hudson
                                    </a>
													<span class="date-time">
														at Feb 10th, 2015 03:34
													</span>
													<span class="body body-blue">
														Next level veard stumptown, cardigans.
													</span>
                                </div>
                            </li>
                            <li class="in">
                                <img class="avatar" alt="" src="backend/img/admin5.png">

                                <div class="message">
													<span class="arrow">
													</span>
                                    <a href="#" class="name">
                                        Kelly
                                    </a>
													<span class="date-time">
														at Feb 8th, 2015 02:29
													</span>
													<span class="body body-grey">
														Beard stumptown farm-to-table denim coffee viral.
													</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-sx-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Tweets</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tweets-container">

                            <div class="tweet-box">
                                <img class="avatar" alt="" src="backend/img/admin2.png">

                                <div class="tweet">
                                    <p>
                                        <span>@sri</span> mentioned you
                                    </p>

                                    <p>
                                        <span>@ha haa</span> Cultivate synergies?
                                    </p>

                                    <div class="icons-nav clearfix">
                                        <span class="time">2mins ago</span>
                                        <i class="icon-trash"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="tweet-box">
                                <img class="avatar" alt="" src="backend/img/admin1.png">

                                <div class="tweet">
                                    <p>
                                        <span>@sandy</span> mentioned you
                                    </p>

                                    <p>
                                        <span>@ha haa</span> Latform cultivate?
                                    </p>

                                    <div class="icons-nav clearfix">
                                        <span class="time">9 hours ago</span>
                                        <i class="icon-trash"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="tweet-box no-margin">
                                <img class="avatar" alt="" src="backend/img/admin3.png">

                                <div class="tweet">
                                    <p>
                                        <span>@haasini</span> mentioned you
                                    </p>

                                    <p>
                                        <span>@ha haa</span> Eyeballs atformsvate?
                                    </p>

                                    <div class="icons-nav clearfix">
                                        <span class="time">3 days ago</span>
                                        <i class="icon-trash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

        <!-- Row start -->
        <div class="row no-gutter">
            <div class="col-md-8 col-sm-12 col-sx-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Table</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-navicon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table -bordered no-margin">
                                <thead>
                                <tr>
                                    <th style="width:20%">
                                        Departure
                                    </th>
                                    <th style="width:15%">
                                        Duration
                                    </th>
                                    <th style="width:15%">
                                        Arrival
                                    </th>
                                    <th style="width:20%">
                                        Airlines
                                    </th>
                                    <th style="width:20%">
                                        Price
                                    </th>
                                    <th style="width:10%">
                                        &nbsp;
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>6:40 AM</td>
                                    <td>1h 5m</td>
                                    <td>7:45 AM</td>
                                    <td>Indigo</td>
                                    <td>$ 1220</td>
                                    <td>
                                        <a href="#" class="label label-success">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10:40 PM</td>
                                    <td>2h 12m</td>
                                    <td>12:57 AM</td>
                                    <td>Jet Airways</td>
                                    <td>$ 1325</td>
                                    <td>
                                        <a href="#" class="label label-success">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3:30 AM</td>
                                    <td>1h 25m</td>
                                    <td>4:55 AM</td>
                                    <td>Air India</td>
                                    <td>$ 2550</td>
                                    <td>
                                        <a href="#" class="label label-success">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4:20 Am</td>
                                    <td>1h 45m</td>
                                    <td>9:25 AM</td>
                                    <td>Jet Airways</td>
                                    <td>$ 1725</td>
                                    <td>
                                        <a href="#" class="label label-success">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6:55 AM</td>
                                    <td>3h 45m</td>
                                    <td>3:35 AM</td>
                                    <td>Air India</td>
                                    <td>$ 5540</td>
                                    <td>
                                        <a href="#" class="label label-success">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8:15 AM</td>
                                    <td>5h 35m</td>
                                    <td>1:25 AM</td>
                                    <td>Emirates</td>
                                    <td>$ 3325</td>
                                    <td>
                                        <a href="#" class="label label-success">View</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-sx-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Feeds</h4>
                        <ul class="links">
                            <li>
                                <a href="#">
                                    <i class="fa fa-bullhorn"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active">
                                <a href="#activites" data-toggle="tab" data-original-title="">Activites</a>
                            </li>
                            <li class="">
                                <a href="#signups" data-toggle="tab" data-original-title="">Signups</a>
                            </li>
                            <li class="">
                                <a href="#online" data-toggle="tab" data-original-title="">Online</a>
                            </li>
                        </ul>
                        <br>

                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="activites">
                                <div id="scrollbar">
                                    <div class="scrollbar">
                                        <div class="track">
                                            <div class="thumb">
                                                <div class="end">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="viewport">
                                        <div class="overview">
                                            <div class="featured-articles">
                                                <div class="articles">
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Raw denim you probably
                                                        <span class="date">12th Nov @1:45am/8 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Reprehenderit butcher
                                                        <span class="date">11th Nov @3:21pm/21 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Skateboard dolor brunch
                                                        <span class="date">11th Nov @11:19am/15 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        accusam/3 Commentsus terry richardson
                                                        <span class="date">10th Nov @8:12am/13 Comments</span>

                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Mashups experiences
                                                        <span class="date">09th Nov @1:59pm/12 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Terry richardson ad squid
                                                        <span class="date">6th Nov @10:44am/16 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Reinvent cutting
                                                        <span class="date">2nd Nov @11:19am/1 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        partnerships 24/7
                                                        <span class="date">2nd Nov @11:19am/19 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Eyeballs frictionless
                                                        <span class="date">1st Nov @9:19am/21 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Deliver innovate
                                                        <span class="date">1st Nov @8:19pm/11 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Portals technologies
                                                        <span class="date">29th Oct @12:19am/7 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Collaborative innovate
                                                        <span class="date">29th Oct @3:31am/5 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Mashups experiences
                                                        <span class="date">27th Oct @12:19am/2 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Need some interesting
                                                        <span class="date">26th Oct @2:33am/9 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Portals technologies
                                                        <span class="date">25th Oct @9:37pm/3 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Collaborative innovate
                                                        <span class="date">25th Oct @12:19am/7 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Mashups experiences
                                                        <span class="date">23rd Oct @8:39am/43 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        B2B plug and play
                                                        <span class="date">22nd Oct @7:19pm/21 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Need interesting
                                                        <span class="date">20th Oct @1:19am/13 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Portals technologies
                                                        <span class="date">20th Oct @6:55am/22 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Collaborative innovate
                                                        <span class="date">19th Oct @9:47am/36 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Portals technologies
                                                        <span class="date">17th Oct @3:57pm/4 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Collaborative innovate
                                                        <span class="date">16th Oct @12:19am/8 Comments</span>
                                                    </a>
                                                    <a href="#">
																		<span class="label-bullet">
																			&nbsp;
																		</span>
                                                        Mashups experiences
                                                        <span class="date">12th Oct @8:22am/1 Comments</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="signups">
                                <ul class="signups">
                                    <li>
                                        <div class="user pull-left">
                                            <img src="backend/img/admin2.png" alt="user">
                                        </div>
                                        <div class="info">
                                            <h6>Sandy</h6>

                                            <p class="designation">Graphic Designer</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user pull-left">
                                            <img src="backend/img/admin1.png" alt="user">
                                        </div>
                                        <div class="info">
                                            <h6>Srinu Basava</h6>

                                            <p class="designation">UI Designer</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user pull-left">
                                            <img src="backend/img/admin8.png" alt="user">
                                        </div>
                                        <div class="info">
                                            <h6>Honey</h6>

                                            <p class="designation">Haker</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user pull-left">
                                            <img src="backend/img/admin9.png" alt="user">
                                        </div>
                                        <div class="info">
                                            <h6>Rahul Dravid</h6>

                                            <p class="designation">Senior Developer</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="online">
                                <ul class="online-users">
                                    <li>
                                        <a href="#" data-lastname="Sandy" data-status="online">
                                            <span>Sandy</span>

                                            <div class="user-status online"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lastname="Srinu Basava" data-status="online">
                                            <span>Srinu</span>

                                            <div class="user-status online"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lastname="John Doe" data-status="online">
                                            <span>John Doe</span>

                                            <div class="user-status busy"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lastname="Steve Waugh" data-status="online">
                                            <span>Steve Waugh</span>

                                            <div class="user-status away"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lastname="Robin Fleming" data-status="online">
                                            <span>Robin Fleming</span>

                                            <div class="user-status away"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Spacer ends -->

</div>
<!-- Container fluid ends -->
@stop