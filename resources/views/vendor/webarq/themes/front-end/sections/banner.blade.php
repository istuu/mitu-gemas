<section class="hero bg-primary" id="banner" style="background-image:{{ asset($banner->background) }}">
    <div class="container">
        <div class="align-middle text-center wow fadeIn">
            <div class="pt-7">
                <img src="{{ asset($banner->image_1) }}" class="img-fluid"/>
            </div>
            <div class="mt-4">
                <p class="heading1 text-pink">{{ $banner->text }}<br></p>
            </div>
            <div class="mt-4">
                <a class="btn btn-pink btn-lg">{{ $banner->button }}</a>
            </div>
            <div class="mt-4">
                <img src="{{ asset($banner->image_2) }}" class="img-fluid"/>
            </div>
        </div>
    </div>
</section>
