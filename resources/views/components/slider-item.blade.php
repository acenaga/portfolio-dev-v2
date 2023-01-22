<div class="each-client-item">
    <div class="mh-client-item dark-bg black-shadow-1">
        @if (str_contains($review->image, 'http'))
            <img src="{{ $review->image }} " alt="{{ $review->name }}" class="img-fluid">
        @else
            <img src="{{ $review->get_image }} " alt="{{ $review->name }}" class="img-fluid">
        @endif
        <p>{{ $review->review }}</p>
        <h4>{{ $review->name }}</h4>
        <span><a target="__blank" href="{{ $review->url }}">{{ $review->position }} - {{ $review->company }}</a></span>
    </div>
</div>
