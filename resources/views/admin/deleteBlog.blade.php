<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Admin - Dashboard</title>
</head>

<body>
    <div class="admin-container">
        @include("components/sidebar")
        <div class="main-content">
            <h1 class="admin-blog-head">Delete Blog</h1>
            <hr />
            <div class="container">
                <h2>{{$findBlog->title}}</h2>
                @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($findBlog->description), $matches))
                <h5>
                    {{$matches[0]}}...
                </h5>
                @endif
                <p>{!!$findBlog->description!!}</p>
                <p class="text-danger">Are you sure to delete it?</p>
                <form method='POST' action="" enctype=multipart/form-data>
                    @csrf
                    <input type="hidden" value="{{$findBlog->id}}" name="id" />
                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
@include("components/bootstrapscript")

</html>