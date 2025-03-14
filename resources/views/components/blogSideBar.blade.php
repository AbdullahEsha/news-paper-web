<div>
    <div class="follow-socials">
        <p>Follow us & share :)</p>
        @if(preg_match('/src="([^"]*)"/', $allBlogData[0]['description'], $matches))
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://superequestrian.com{{$_SERVER['REQUEST_URI']}}" target="_blank"><i class="fa-brands fa-facebook"></i></a> 
            <a href="https://twitter.com/share?url=https://superequestrian.com{{$_SERVER['REQUEST_URI']}}&text=Blog Superequ Estrian via=Super Equestrian" target="_blank"><i class="fa-brands fa-twitter"></i></a> 
            <a href="https://pinterest.com/pin/create/button/?url=https://superequestrian.com{{$_SERVER['REQUEST_URI']}}&media={!! $matches[1] !!}&description=Super Equestrian" target="_blank"><i class="fa-brands fa-pinterest"></i></a> 
            <a href="https://www.instagram.com/?url=https://superequestrian.com{{$_SERVER['REQUEST_URI']}}" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
        @endif
    </div>
    <div class="blogSideBar">
        <p class="recent-blog">Recent Blogs</p>
        @for($i=0; $i < count($allBlogData); $i++) 
        @if($allBlogData[$i]['status'] === "publish")
            <a href="/blog/{{$allBlogData[$i]['slug']}}">
                <div class="blogSideBar-recent-blog">
                    @if(preg_match('/<img[^>]+>/i', $allBlogData[$i]['description'], $matches))
                        {!! $matches[0] !!} 
                    @endif
                    <p>
                        @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($allBlogData[$i]['title']),
                        $matches))
                        {{$matches[0]}}...
                        @endif
                    </p>
                </div>
            </a>
        @endif
        @endfor
    </div>
</div>