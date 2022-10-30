<div class="each-client-item">
    <div class="mh-client-item dark-bg black-shadow-1">
        <img src="{{ $review->image }} " alt="{{ $review->name }}" class="img-fluid">
        <p>{{ $review->review }}</p>
        <h4>John Mike</h4>
        <span><a target="__blank" href="{{ $review->url }}">{{ $review->position }}, {{ $review->name }}</a></span>
    </div>
</div>
