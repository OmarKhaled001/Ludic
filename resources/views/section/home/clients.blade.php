<section class="tc-testimonials-style2">
    <div class="container">
        <div class="title mb-20 text-center">
            <h2 class="fsz-45 text-light"> Our Clients </h2>
        </div>
        <div class="logos row">
            @foreach ($clients as $client)
                <a href="#" class="col-12 col-sm-6 col-lg-3 mt-40"> <img src="{{$client->getMedia('logos')->first()->getUrl()}}" alt="{{ $client->name }}"> </a>
            @endforeach
        </div>
    </div>
</section>
