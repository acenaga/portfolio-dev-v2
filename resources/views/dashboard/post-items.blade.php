<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Items') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12 d-flex justify-content-center mb-5">
            <a href="{{ route('post-items.create') }}" class="btn btn-primary">Add Blog Item</a>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        @foreach ($posts as $post)
            <div class="col-12 col-md-4 col-lg-3 p-2">
                <h3>{{ $post->title }}</h3>
                @if (str_contains($post->featured_image, 'http'))
                    <img src="{{ $post->featured_image }}" alt="{{ $post->name }}" class="img-fluid">
                @else
                    <img src="{{ $post->get_image }} " alt="{{ $post->name }}" class="img-fluid">
                @endif
                <p><small>{{ $post->excerpt }}</small></p>
                <p><span class="badge bg-primary">{{ $post->category->name }}</span></p>
                <p>
                    @if ($post->published == 1)
                        <span class="badge bg-success">Published</span>
                    @else
                        <span class="badge bg-danger">Draft</span>
                    @endif

                </p>

                <form action="{{ route('post-items.destroy', $post->id) }}" method="POST">
                    <a href="{{ route('post-items.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>
        @endforeach
</x-app-layout>
