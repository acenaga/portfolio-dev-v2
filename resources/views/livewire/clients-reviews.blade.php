<div class="col-sm-12 wow fadeInUp" id="mh-client-review" data-wow-duration="0.8s" data-wow-delay="0.3s">
    @foreach ($user->reviews as $review)
        <x-slider-item :review="$review" />
    @endforeach
</div>
