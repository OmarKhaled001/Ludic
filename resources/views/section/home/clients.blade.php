<section class="tc-testimonials-style2">
    <div class="container">
        <div class="title mb-20 text-center">
            <h2 class="fsz-45 text-light"> {{ trans('main.our_clients') }} </h2>
        </div>
        <div class="logos row">
            @foreach ($clients as $client)
                <a href="#" class="col-lg-3 mt-40"> <img src="{{$client->getMedia('logos')->first()->getUrl()}}" alt="{{ $client->name }}"> </a>
            @endforeach
        </div>
        @include('section.about.map')

    </div>
</section>
