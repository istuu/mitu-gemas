<section class="bg-style2 pt-0" id="regulation">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-12 wow fadeIn">
                    <h2 class="text-pink text-center text-uppercase">{{ $regulation->title }}</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-sm-2 col-xs-12 text-center">
                    <p class="pt-2 text-center">
                        {!!  strip_tags($regulation->description) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
