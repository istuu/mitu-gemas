<div class="col-sm-3 bg-primary-dark py-5 col-fixed text-center">
    <div>
        <img src="{{ URL::asset(Wa::config('system.site.logo')) }}" class="img-fluid"/>
        <!-- <h1 class="main-heading">Face</h1> -->
    </div>
    <ul class="nav flex-column menu-left mt-5">
        @foreach($sections as $sec)
            <li class="nav-item">
                @if($sec->object !== 'history')
                <a class="nav-link page-scroll" href="#{{ $sec->object }}" >{{ $sec->title }}</a>
                @else
                    <a class="nav-link page-scroll" href="#{{ $sec->object }}" data-toggle="modal" data-target="#popupHistory">{{ $sec->title }}</a>
                @endif
            </li>
        @endforeach
    </ul>
    <p class="pt-1 social-icon">
        @foreach($socials as $social)
            <a href="{{ url($social->permalink) }}" target="_blank"><em class="{{ $social->icon }} text-twitter-alt icon-sm mr-3"></em></a>
        @endforeach
    </p>
    <p>Consumer Care (021) 123-456</p>
</div>
