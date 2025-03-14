<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    @if(preg_match("/[^\/]+$/", $_SERVER['REQUEST_URI'], $matches))
        @for($j=0; $j < count($categoryall); $j++)
            @if(strtolower($categoryall[$j]['categoryName']) === str_replace('-',' ', $matches[0]))
                <meta name="description" content="{{$categoryall[$j]['metaDescription']}}">
                <title>Category - {{$categoryall[$j]['categoryName']}}</title>
            @endif
        @endfor
        <link rel="canonical" href="https://superequestrian.com/category/{{$matches[0]}}"/>
    @endif
</head>

<body>
    @include("components/navber")
    <div class="container">
        @if(preg_match("/[^\/]+$/", $_SERVER['REQUEST_URI'], $matches))
            <h1 class="latest-blog-text">{{strtoupper(str_replace('-',' ', $matches[0]))}}</h1>
        @endif
        <p class="blog-title-description">[Were you get some idea and overview of it.....]</p>
        <hr />
        <div class="row latest-blog">
            @for($i=0; $i < count($categoryone); $i++) 
                @if(preg_match("/[^\/]+$/", $_SERVER['REQUEST_URI'], $matches)) 
                    @if($categoryone[$i]['status'] === "publish" && $matches[0] === preg_replace('/\s+/', '-', strtolower($categoryone[$i]['category'])))
                    <div class="col-12 col-md-4">
                        <a href="/blog/{{$categoryone[$i]['slug']}}" class="card-a-tag">
                        <div class="post-card">
                            @if(preg_match('/<img[^>]+>/i', $categoryone[$i]['description'], $matches))
                                {!! $matches[0] !!} 
                            @endif
                            <h4>{{$categoryone[$i]['title']}}</h4>
                            <p>
                                @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($categoryone[$i]['description']), $matches))
                                    {{$matches[0]}}...
                                @endif
                            </p>
                        </div>
                        </a>
                    </div>
                    @endif
                @endif
            @endfor
        </div>
    </div>
    @include("components/callToAction")
    @include("components/footer")
</body>
@include("components/bootstrapscript")

</html>