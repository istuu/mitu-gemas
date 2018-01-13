<div class="col-sm-3 bg-primary-dark py-5 col-fixed text-center">
    <div>
        <img src="{{ URL::asset(Wa::config('system.site.logo')) }}" class="img-fluid"/>
        <!-- <h1 class="main-heading">Face</h1> -->
    </div>
    <ul class="nav flex-column menu-left mt-5">
        @foreach($sections as $sec)
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#{{ $sec->object }}">{{ $sec->title }}</a>
            </li>
        @endforeach
    </ul>
    <p class="pt-1 social-icon">
        <a href="https://twitter.com/" target="_blank"><em class="ion-social-facebook text-twitter-alt icon-sm mr-3"></em></a>
        <a href="https://github.com/" target="_blank"><em class="ion-social-instagram text-github-alt icon-sm mr-3"></em></a>
        <a href="https://www.linkedin.com/" target="_blank"><em class="ion-social-youtube text-linkedin-alt icon-sm mr-3"></em></a>
    </p>
    <p>Consumer Care (021) 123-456</p>
</div>
