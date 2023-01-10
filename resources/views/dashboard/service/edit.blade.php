<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Service') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center">

        <div class="col-12 col-md-6 col-lg-4">
            <form action="{{ route('service.update', $service) }}" method="POST">
                <div class="mb-3">
                    <label for="service-title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" maxlength="40" id="service-title"
                        placeholder="Front end Service" value="{{ old('title', $service->title) }}">
                </div>
                <div class="mb-3">
                    <label for="service-icon" class="form-label">Select Icon for Service</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input value='<i class="fa fa-file-code-o"></i>' class="form-check-input" type="radio"
                            name="icon" id="icon1"
                            {{ $service->icon == '<i class="fa fa-file-code-o"></i>' ? 'checked' : '' }}>
                        <label class="form-check-label" for="icon1">
                            <i class="fa fa-file-code-o" aria-hidden="true"></i>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input value='<i class="fa fa-code" aria-hidden="true"></i>' class="form-check-input"
                            type="radio" name="icon" id="icon2"
                            {{ $service->icon == '<i class="fa fa-code" aria-hidden="true"></i>' ? 'checked' : '' }}>
                        <label class="form-check-label" for="icon2">
                            <i class="fa fa-code" aria-hidden="true"></i>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input value='<i class="fa fa-code-fork" aria-hidden="true"></i>' class="form-check-input"
                            type="radio" name="icon" id="icon3"
                            {{ $service->icon == '<i class="fa fa-code-fork" aria-hidden="true"></i>' ? 'checked' : '' }}>
                        <label class="form-check-label" for="icon3">
                            <i class="fa fa-code-fork" aria-hidden="true"></i>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input value='<i class="fa fa-terminal" aria-hidden="true"></i>' class="form-check-input"
                            type="radio" name="icon" id="icon4"
                            {{ $service->icon == '<i class="fa fa-terminal" aria-hidden="true"></i>' ? 'checked' : '' }}>
                        <label class="form-check-label" for="icon4">
                            <i class="fa fa-terminal" aria-hidden="true"></i>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input value='<i class="fa fa-bullseye purple-color"></i>' class="form-check-input"
                            type="radio" name="icon" id="icon5"
                            {{ $service->icon == '<i class="fa fa-bullseye purple-color"></i>' ? 'checked' : '' }}>
                        <label class="form-check-label" for="icon5">
                            <i class="fa fa-bullseye purple-color"></i>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="servie-description" class="form-label">Service Description</label>
                    <textarea class="form-control" name="description" id="servie-description" rows="3">{{ old('description', $service->description) }}</textarea>
                </div>
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</x-app-layout>
