<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <meta name="description" content="{{$individual->metaDescription}}">
    <link rel="canonical" href="https://superequestrian.com/blog/{{$individual->slug}}" />
    <title>{{$individual->title}}</title>
</head>

<body>
    @include("components/navber")
    <div class="container">
        <h1 class="blog-title">{{$individual->title}}</h1>
        <p class="blog-title-description">{{$individual->updated_at->format('M d, Y')}} | {{$individual->author}}</p>
        <hr />
        <div class="row latest-blog">
            <div class="col-12 col-md-9">
                <div class="blog-individual">
                    {!! $individual->description !!}
                </div>
            </div>
            <div class="col-12 col-md-3">
                @include("components/blogSideBar")
            </div>
        </div>
    </div>
    </div>
    @include("components/callToAction")
    @include("components/footer")
</body>
@include("components/bootstrapscript")

</html>