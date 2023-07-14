<div class="carausel-6-columns-cover position-relative">
    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
    <div class="carausel-6-columns" id="carausel-6-columns">
        @foreach($popular_categories as $popular)
        <div class="card-1">
            <figure class=" img-hover-scale overflow-hidden">
                <a href="{{  route('category.show', ['category' => $popular->slug]) }}"><img src="{{ isset($popular->image->url) ? $popular->image->url : asset('assets/client/imgs/shop/categories/archiv.jpg')}}" alt=""></a>
            </figure>
            <h5><a href="{{  route('category.show', ['category' => $popular->slug]) }}">{{$popular->name}}</a></h5>
        </div>
        @endforeach
    </div>
</div>
