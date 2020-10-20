<!--widget-area -->
<div class="widget-area">
    <h5 class="sidebar-header">Search</h5>
    <div class="input-group">
        <form action="#" method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-secondary btn-sm" type="submit">Go!</button>
            </span>
        </div>
        </form>
    </div>
</div>
<!--/widget-area -->
<div class="widget-area">
    <h5 class="sidebar-header">Categories</h5>
    <div class="list-group">
        @foreach (\App\Models\Category::all() as $item)
        <a href="?type={{$item->slug}}" class="list-group-item list-group-item-action">
            {{$item->name}}
        </a>
        @endforeach
    </div>
</div>

<!--/widget-area -->
<div class="widget-area">
    <h5 class="sidebar-header">Tags</h5>
    <div class="tags-widget">
        @foreach (\Spatie\Tags\Tag::all() as $item)
            <a href="?tag={{$item->slug}}" class="badge badge-pill badge-default">{{$item->name}}</a>
        @endforeach
    </div>
</div>
<!--/widget-area -->
<div class="widget-area">
    <h5 class="sidebar-header">Follow us</h5>
    <div class="contact-icon-info">
        <ul class="social-media text-center">
            <!--social icons -->
            <li><a href="{{config('global.social_media_facebook')}}"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="{{config('global.social_media_facebook')}}"><i class="fab fa-instagram"></i></a></li>
            <li><a href="{{config('global.social_media_facebook')}}"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div>
    <!--/contact-icon-info -->
</div>
<!--/widget-area -->