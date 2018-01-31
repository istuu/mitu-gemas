<section class="hero bg-primary" id="banner" style="background-image:{{ asset($banner->background) }}">
    <div class="container">
        <div class="align-middle text-center wow fadeIn">
            <div class="pt-7">
                <img src="{{ asset($banner->image_1) }}" class="img-fluid"/>
            </div>
            <div class="mt-4">
                <p class="heading1 text-pink">Periode Program 1 Februari - 30 April 2018<br>*Penukaran Hadiah Paling Lambat 31 Mei 2018</p>
            </div>
            <div class="mt-4">
                <a class="btn btn-pink btn-lg page-scroll" href="#form">{{ $banner->button }}</a>
            </div>
            <div class="mt-4">
                <img src="{{ asset($banner->image_2) }}" class="img-fluid"/>
            </div>
        </div>
    </div>
</section>
