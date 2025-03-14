<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Admin - Blog</title>
</head>

<body>
    <div class="admin-container">
        @include("components/sidebar")
        <div class="main-content">
            <h1 class="admin-blog-head">All Blog</h1>
            <hr />
            <p class="text-success blog-upload-msg">
                {{session('msg')}}
            </p>
            <p class="text-danger blog-upload-msg">
                {{session('error')}}
            </p>
            @if (count($errors) > 0)
            <p class="text-danger blog-upload-msg">
                @foreach ($errors->all() as $error)
                {{ $error }}<br />
                @endforeach
            </p>
            @endif
            <div class="container">
                <div class="form-group pull-right">
                    <input type="text" class="search form-control" placeholder="What you looking for?">
                </div>
                <span class="counter pull-right"></span>
                <table class="table table-hover table-bordered results">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="col-md-3 col-xs-5">Title</th>
                            <th class="col-md-7 col-xs-4">Short Description</th>
                            <th class="col-md-1 col-xs-3">Status</th>
                            <th class="col-md-1 col-xs-3">Action</th>
                        </tr>
                        <tr class="warning no-result">
                            <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0; $i < count($blogData); $i++) <tr>
                            <td scope="row">{{$i+1}}</th>
                            <td>{{$blogData[$i]['title']}}</td>
                            <td>
                                @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($blogData[$i]['description']),
                                $matches))
                                {{$matches[0]}}...
                                @endif
                            </td>
                            @if($blogData[$i]['status'] === "publish")
                            <td style="background-color: #04AA6D; text-transform: capitalize">{{$blogData[$i]['status']}}</td>
                            @elseif($blogData[$i]['status'] === "draft")
                            <td style="background-color: #fff200; text-transform: capitalize">{{$blogData[$i]['status']}}</td>
                            @endif
                            <td>
                                <a href="/admin/blog-delete/{{$blogData[$i]['slug']}}" style="color: red"><i
                                        class="fa-solid fa-trash" title="Delete"></i></a> <a
                                    href="/admin/blog-edit/{{$blogData[$i]['slug']}}" style="color: green"><i
                                        class="fa-regular fa-pen-to-square" title="Edit"></i></a>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@include("components/bootstrapscript")

</html>