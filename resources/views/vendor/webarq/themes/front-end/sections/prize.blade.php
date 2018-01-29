<section id="prize" class="bg-style2">
    <div class="container">
        <div class="inner">

        <div class="row">
                <div class="col-md-12 wow fadeIn">
                    <h2 class="text-pink text-center text-uppercase">{{ $prize_title->title }}</h2>
                     <p class="pt-4 text-center">
                        {{ $prize_title->description }}
                    </p>
                </div>
            </div>

             <div class="row d-md-flex mt-4 text-center">
                 @foreach($prize_items as $item)
                    <div class="col-sm-6 mt-2 wow fadeIn">
                        <img src="{{ asset($item->image) }}" alt="Emas 100 Gram" class="img-team img-fluid"/>
                        <h5 class="card-title text-uppercase pt-4">{!! $item->description !!}</h5>
                    </div>
                 @endforeach
            </div>
        </div>
    </div>
</section>
