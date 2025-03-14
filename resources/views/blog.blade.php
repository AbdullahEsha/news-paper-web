<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Blog - Super Equestrian</title>
    <link rel="canonical" href="https://superequestrian.com/blog"/>
</head>

<body>
    @include("components/navber")
    <div class="container">
        <h1 class="blog-title">Super Equestrian Blogs</h1>
        <p class="blog-title-description">[Were you get some idea and overview of it.....]</p>
        <hr />
        <h2 class="latest-blog-text">Latest Blogs</h2>
        <div class="row latest-blog">
            @for($i=0; $i < count($allblog); $i++)
                @if($allblog[$i]['status'] === "publish")
                    <div class="col-12 col-md-4">
                        <a href="/blog/{{$allblog[$i]['slug']}}" class="card-a-tag">
                        <div class="post-card">
                            @if(preg_match('/<img[^>]+>/i', $allblog[$i]['description'], $matches))
                                {!! $matches[0] !!} 
                            @endif
                            <h4>{{$allblog[$i]['title']}}</h4>
                            <p>
                                @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($allblog[$i]['description']), $matches))
                                    {{$matches[0]}}...
                                @endif
                            </p>
                        </div>
                        </a>
                    </div>
                @endif
            @endfor
        </div>
    </div>
    @include("components/callToAction")
    @include("components/footer")
</body>
@include("components/bootstrapscript")

</html>