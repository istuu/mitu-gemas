<section class="bg-style1" id="promo">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-md-12 wow fadeIn">
                    <h2 class="text-pink text-center text-uppercase">{{ $promo_title->title }}</h2>
                </div>
            </div>
            <div class="row mt-4">
            <div class="row col-md-10 offset-md-1 row mt-2 wow fadeIn">
                    <div class="embed-responsive embed-responsive-21by9">
                      <iframe width="560" height="315" src="{{ url($promo_title->video_link) }}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                </div>
                </div>
            </div>

            <div class="row mt-4">
                @foreach($promo_steps as $step)
                    <div class="col-md-3 wow fadeInRight">
                        <div class="border-all">
                            <div class="pb-3 text-center">
                                <img src="{{ $step->image }}" alt="Male" class="img-team img-fluid"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 wow fadeInRight">
                        <div class="border-all">
                            <p>
                                {{ $step->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
