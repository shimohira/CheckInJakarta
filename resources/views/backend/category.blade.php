<?php
/**
 * Created by PhpStorm.
 * User: choir
 * Date: 07/08/15
 * Time: 14:24
 */ ?>
@extends('layouts.backend')

@section('content')
    <div class="top-bar clearfix">
        <div class="page-title">
            <h4>
                <div class="fs1" aria-hidden="true" data-icon="&#xe0ab;"></div>
                Category
            </h4>
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
            <!-- Row start -->
            <div class="row no-gutter">
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Category</h4>
                            <ul class="links">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-list"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                <script>
                                    //alert('{{Session::get('message')}}');
                                </script>
                            @endif
                            <form role="form" method="post" action="{{ URL::route('category.store') }}">
                                {!! csrf_field() !!}
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="Title">Category Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Category"
                                           name="nm_category">
                                </div>

                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-success">Clear</button>
                            </form>
                            <table class="table table-hover no-margin">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>category</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($table as $key => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->nm_category }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-xs dropdown-toggle">
                                                    Action<span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#" data-original-title="">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('category.del', $value->id) }}" data-original-title="">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{url('coba/'.$value->id)}}" data-original-title="">Sub Category</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $table->render() !!}
                        </div>
                    </div>

                    <div class="panel panel-default" style="visibility: hidden">
                        <div class="panel-heading">
                            <h4>Category</h4>
                            <ul class="links">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-list"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                <script>
                                    //alert('{{Session::get('message')}}');
                                </script>
                            @endif
                            <form role="form" method="post" action="{{ URL::route('category.store') }}">
                                {!! csrf_field() !!}
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="Title">Category Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Category"
                                           name="nm_category">
                                </div>

                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-success">Clear</button>
                            </form>
                            <table class="table table-hover no-margin">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>category</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($table as $key => $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->nm_category }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button data-toggle="dropdown" class="btn btn-xs dropdown-toggle">
                                                    Action<span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="#" data-original-title="">Edit</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('category.del', $value->id) }}" data-original-title="">Delete</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-original-title="">Sub Category</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $table->render() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- Spacer ends -->

    </div>
    <!-- Container fluid ends -->

@endsection
