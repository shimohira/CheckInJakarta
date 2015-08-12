@extends('layouts.backend')
@section('content')

<div class="top-bar clearfix">
    <div class="page-title">
        <h4><div class="fs1" aria-hidden="true" data-icon="&#xe0ab;"></div>Form Elements</h4>
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
                        <h4>Article</h4>
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
                        @endif
                            'id_category','title','desc','content','image','tag'
                        <form role="form" method="post" action="{{ URL::route('article.store') }}" id="form1" runat="server" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" class="form-control" name="title" id="" placeholder="Title Article">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="id_category" id="" class="form-control">
                                    @foreach($category as $key => $value)
                                        <option value="{{$value->id}}">{{$value->nm_category}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="describe">Describe</label>
                                <input type="text" class="form-control" name="desc" id="" placeholder="Describe Artile">
                            </div>

                            <div class="form-group">
                                <label for="describe">Image</label>
                                <input type="file" class="form-control" name="image" id="imgfile" placeholder="Image" onchange="readURL(this);">
                                <label for="describe">Image preview</label>
                                <img id="preview" src="{{ url('/images/thumbnail-default.jpg') }}" alt="image preview" class="form-control" style="height: 150px; width: auto;"/>
                            </div>
                            <script>
                                function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function (e) {
                                            document.getElementById('preview').src=e.target.result;
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                            </script>
                            <div class="form-group">
                                <label for="describe">TAG</label>
                                <input type="text" class="form-control" name="tag" id="" placeholder="Describe Artile">
                            </div>

                            <div class="form-group">
                                <label for="article">Article</label>
                                <textarea id="articleContent" name="content">
                                </textarea>
                            </div>
                            <script type="text/javascript">
                                tinymce.init({
                                    selector: "#articleContent",
                                    theme: "modern",
                                    height: "350",
                                    plugins: [
                                        "advlist autolink link image jbimages lists charmap print preview hr anchor pagebreak",
                                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking table",
                                        "save table contextmenu directionality emoticons template paste textcolor "
                                    ],
                                    content_css: "css/content.css",
                                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages | print preview media fullpage | forecolor backcolor emoticons",

                                    relative_urls: false,


                                });
                            </script>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('.summernote').summernote({height: 360});
                            });
                        </script>
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