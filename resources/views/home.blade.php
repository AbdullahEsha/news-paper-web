<?php $k = 0; ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Home - Super Equestrian</title>
    <link rel="canonical" href="https://superequestrian.com"/>
</head>

<body>
    @include("components/navber")
    <div class="container">
        <img class="banner-image" src="{{asset('assets/image/horse-banner.jpg')}}" />
        <h2 class="latest-post-text">Latest Blogs</h2>
        <div class="row latest-post">
            @for($i=0; $i < count($blogDataView); $i++) 
                @if($blogDataView[$i]['status'] === "publish")
                <div class="col-12 col-md-4">
                    <a href="/blog/{{$blogDataView[$i]['slug']}}" class="card-a-tag">
                        <div class="post-card">
                            @if(preg_match('/<img[^>]+>/i', $blogDataView[$i]['description'], $matches))
                                {!! $matches[0] !!} 
                            @endif
                            <h4>{{$blogDataView[$i]['title']}}</h4>
                            <p>
                                @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($blogDataView[$i]['description']),
                                $matches))
                                {{$matches[0]}}...
                                @endif
                            </p>
                        </div>
                    </a>
                </div>
                @endif
            @endfor
        <a href="/blog" id="blog-link"><i class="fa-solid fa-list"></i> All Blog</a>
    </div>
    <div class="home-category">
        <h2>Categories</h2>
        <div class="row">
            @for($i=0; $i < count($blogCategoryView); $i++) 
            @php($k = 0)
                @for($l=0; $l < count($blogAllCategory); $l++) 
                    @if($blogCategoryView[$i]['category'] === $blogAllCategory[$l]['categoryName'] && $blogAllCategory[$l]['status'] === "publish")
                        <div class="col-12 col-md-4">
                            <a href="/category/{{preg_replace('/\s+/', '-', strtolower($blogCategoryView[$i]['category']))}}" class="card-a-tag">
                                <div class="home-category-card">
                                    @for($j=0; $j < count($blogDataView); $j++)
                                        @if($blogCategoryView[$i]['category']===$blogDataView[$j]['category'])
                                            @if($k < 4)
                                                @if($blogDataView[$j]['status'] === "publish" &&  preg_match('/<img[^>]+>/i', $blogDataView[$j]['description'], $matches))
                                                    {!! $matches[0] !!} 
                                                @else
                                                    <img src="{{asset('uploads/demo.jpg')}}" alt="horse-banner" />
                                                @endif
                                                @php($k++)
                                            @endif
                                        @endif
                                    @endfor
                                    @if($k < 4)
                                        @for($x=0; $x < (4-$k); $k++)
                                            <img src="{{asset('uploads/demo.jpg')}}" alt="horse-banner" />
                                        @endfor
                                    @endif
                                    <h3>{{$blogCategoryView[$i]['category']}}</h3>
                                </div>
                            </a>
                        </div>
                    @endif
                @endfor
            @endfor
        <!-- <a href="/blog" id="blog-link"><i class="fa-solid fa-list"></i> All Category</a> -->
        </div>
    </div>

    </div>
    @include("components/footer")
</body>
@include("components/bootstrapscript")

</html>