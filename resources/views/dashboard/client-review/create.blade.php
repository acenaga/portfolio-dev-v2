<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client Review') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center">

        <div class="col-12 col-md-6 col-lg-4">
            <form action="{{ route('client-review.store') }}" method="POST">
                <div class="mb-3">
                    <label for="client-name" class="form-label">Client Name</label>
                    <input type="text" name="name" class="form-control" maxlength="40" id="client-name"
                        placeholder="Jhon Doe">
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label">Position</label>
                    <input type="text" name="position" class="form-control" id="position" placeholder="Tech Lead">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" name="company" class="form-control" id="company" placeholder="Facebook">
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">URL</label>
                    <input type="url" name="url" class="form-control" id="url"
                        placeholder="https://example.com" pattern="https://.*" size="30">
                </div>
                <div class="mb-3">
                    <label for="review" class="form-label">Review</label>
                    <textarea class="form-control" name="review" id="review" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Picture</label>
                    <input onchange="imgPreview(event)" class="form-control" type="file" name="image"
                        id="image" accept="image/png, image/jpeg">
                </div>
                <img id="outputPreview" class="img-thumbnail rounded-circle">
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</x-app-layout>
