<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients Reviews') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12 d-flex justify-content-center mb-3">
            <a href="{{ route('client-review.create') }}" class="btn btn-primary">Add Client Review</a>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        @foreach ($reviews as $review)
            <div class="card col-12 col-md-3 col-lg-4">
                <img src="{{ $review->image }}" class="card-img-top" alt="{{ $review->name }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $review->name }} - {{ $review->position }}</h4>
                    <h5 class="card-title"> <a href="{{ $review->url }}">{{ $review->company }}</a> </h5>
                    <p class="card-text">{{ $review->review }}</p>
                    <form action="{{ route('client-review.destroy', $review->id) }}" method="POST">
                        <a href="{{ route('client-review.edit', $review->id) }}" class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>
</x-app-layout>
