<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post Items') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center">

        <div class="col-12">
            <form action="{{ route('post-items.store') }}" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="post-title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" maxlength="40" id="post-title"
                        placeholder="The best one">
                </div>
                <div class="mb-3">
                    <label for="post-slug" class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control" maxlength="40" id="post-slug"
                        placeholder="The-best-one">
                </div>
                <div class="mb-3">
                    <label for="post-excerpt" class="form-label">Excerpt</label>
                    <textarea class="form-control" name="excerpt" id="post-excerpt"></textarea>
                </div>
                @if ($categories->count())
                    <div class="mb-3">
                        <label for="post-category" class="form-label">Category</label>
                        <select name="category_id" id="post-category" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea rows="60" class="form-control" name="content" id="content"></textarea>
                </div>
                <div class="mb-3">
                    <label>Featured Image</label>
                    <input type="file" name="file">
                </div>
                <div class="form-check mb-3 form-switch">
                    <input class="form-check-input" type="checkbox" name="published" role="switch"
                        id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Publish when creating?</label>
                </div>

                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>

</x-app-layout>
