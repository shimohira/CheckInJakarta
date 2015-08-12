<?php
/**
 * Created by PhpStorm.
 * User: choir
 * Date: 07/08/15
 * Time: 17:24
 */?>

@extends('layouts.home')

@section('content')
@foreach($article as $key => $value)

<?php
$content = $value->content;
$filename = $value->filename;
$title = $value->title;

?>

@endforeach

        <!-- sec-2 -->
<div class="sec-2 push-left">
    <div class="row">
        <div class="tag-page-2">
            <p>Lifestyle | F&B  <span></span></p>
        </div>
    </div>
    <div class="row">
        <div class="big-headline">
            <h1>{{ $title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="large-8 medium-8 left push-right">
            <div class="head-image">
                <img src="{{route('picture', $filename)}}" alt="{{$title}}" />
            </div>
            <div class="description-detail">
                <article>
                    {!! $content !!}
                </article>
            </div>
            <div class="push-right-loc">
                <div class="large-12 location-detail">
                    <h3>LOCATION DETAIL</h3>
                    <table>
                        <tr>
                            <td width="150">Address</td>
                            <td>:</td>
                            <td>Jl. Tebet Timur Raya No. 54 C, Tebet</td>
                        </tr>
                        <tr>
                            <td scope="row">Telephone No. </td>
                            <td scope="row">:</td>
                            <td scope="row">(021) 83795494</td>
                        </tr>
                        <tr>
                            <td>Operational Hour</td>
                            <td>:</td>
                            <td>Setiap hari 10:00 - 22:00 </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- <div class="large-6 left share-dt share-dt-footer">
                <ul>
                  <a href="#"><li><img src="images/fb-share.jpg"></li></a>
                  <a href="#"><li><img src="images/tw-share.jpg"></li></a>
                  <a href="#"><li><img src="images/plus.jpg"></li></a>
                </ul>
              </div> -->
        </div>
        <div class="large-4 medium-4 right right-container">
            <div class="map">
                <img src="images/map.jpg" height="250" width="300" alt="">
            </div>
            <div class="box-black">
                <div class="credit">Maps & Credits</div>
                <div class="avatar">
                    <img src="images/editor.jpg">
                    <p>by Rachelle kandou</p>
                </div>
                <div class="share-article">
                    <h6>SHARE ARTICLE...</h6>
                    <ul>
                        <a href="#"><li><img src="images/fb-share.jpg"> </li></a>
                        <a href="#"><li><img src="images/tw-share.jpg"> </li></a>
                    </ul>
                    <a href="#"><img class="plus" src="images/plus.jpg"></a>
                </div>
                <div class="photo-source">
                    Photo source:<br>
                    https://www.google.co.id/search?q=66^thj1e6HH7sadajjjjjakk adadasdna^^*
                </div>
            </div>
            <div class="box-1">
                <img src="images/box-2.jpg">
            </div>
            <div class="menu-right">
                <h4>REKOMENDASI JAKARTA</h4>
                <a href="#">
                    <div class="menu-right-2">
                        <div class="large-4 medium-4 menu-right-2-left left"><img src="images/menu-right-1.jpg" height="49" width="77" alt=""></div>
                        <div class="large-8 medium-8 menu-right-2-right small-12 right"><p>20 OF THE MOST POPULAR CHAIN RESTAURANT DISHES</p></div>
                    </div>
                </a>
                <div class="menu-right-2">
                    <div class="large-4 medium-4 menu-right-2-left left"><img src="images/menu-right-1.jpg" height="49" width="77" alt=""></div>
                    <div class="large-8 medium-8 menu-right-2-right small-12 right"><p>20 OF THE MOST POPULAR CHAIN RESTAURANT DISHES</p></div>
                </div>
                </a>
                <div class="menu-right-2">
                    <div class="large-4 medium-4 menu-right-2-left left"><img src="images/menu-right-1.jpg" height="49" width="77" alt=""></div>
                    <div class="large-8 medium-8 menu-right-2-right small-12 right"><p>20 OF THE MOST POPULAR CHAIN RESTAURANT DISHES</p></div>
                </div>
                </a>
                <div class="menu-right-2">
                    <div class="large-4 medium-4 menu-right-2-left left"><img src="images/menu-right-1.jpg" height="49" width="77" alt=""></div>
                    <div class="large-8 medium-8 menu-right-2-right small-12 right"><p>20 OF THE MOST POPULAR CHAIN RESTAURANT DISHES</p></div>
                </div>
                </a>
                <div class="menu-right-2">
                    <div class="large-4 medium-4 menu-right-2-left left"><img src="images/menu-right-1.jpg" height="49" width="77" alt=""></div>
                    <div class="large-8 medium-8 menu-right-2-right small-12 right"><p>20 OF THE MOST POPULAR CHAIN RESTAURANT DISHES</p></div>
                </div>
                </a>
                <div class="menu-right-2">
                    <div class="large-4 medium-4 menu-right-2-left left"><img src="images/menu-right-1.jpg" height="49" width="77" alt=""></div>
                    <div class="large-8 medium-8 menu-right-2-right small-12 right"><p>20 OF THE MOST POPULAR CHAIN RESTAURANT DISHES</p></div>
                </div>
                </a>

            </div>
        </div>
    </div>
</div>

<div class="sec-2 sec-2-detail">
    <div class="row detail-cnt">
        <div class="large-8 medium-8 left dsc-head head-sb-ct"><h3>MORE FROM RECREATION</h3></div>
        <div class="large-12 bd-2 small-12 left">
            <div class="bd-two-"></div>
        </div>
    </div>
    <div class="row thumbnail-wrp">

        <div class="large-4 medium-4 small-12 left">
            <div class="large-12 medium-12 small-12">
                <div class="thumbnail-cnt thumbnail-cnt-2">
                    <img src="images/thumb-1.jpg"  alt="">
                    <div class="caption-rec black">
                        <p>1 Tempat Nyaman Belanja Alat Kantor.</p>
                    </div>
                    <div class="tag-rec tag-black">TECH</div>
                </div>
            </div>
        </div>

        <div class="large-4 medium-4 small-12 left">
            <div class="large-12 medium-12">
                <div class="thumbnail-cnt thumbnail-cnt-2">
                    <img src="images/thumb-4.jpg"  alt="">
                    <div class="caption-rec black">
                        <p>3 Tempat Nyaman Belanja Alat Kantor.</p>
                    </div>
                    <div class="tag-rec tag-black">TECH</div>
                </div>
            </div>
        </div>
        <div class="large-4 medium-4 small-12 left">
            <div class="large-12 medium-12">
                <div class="thumbnail-cnt thumbnail-cnt-2">
                    <img src="images/thumb-4.jpg"  alt="">
                    <div class="caption-rec black">
                        <p>5 Tempat Nyaman Belanja Alat Kantor.</p>
                    </div>
                    <div class="tag-rec tag-black">TECH</div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- /sec-2 -->
@stop