<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{ route('service.create') }}" class="btn btn-primary">Add Service</a>
        </div>
        @foreach ($services as $service)
            <div class="col-lg-3 col-md-6 col-12 p-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->title }}</h5>
                        <p class="card-text text-center">{!! $service->icon !!}</p>

                        <p class="card-text">{{ $service->description }}</p>
                        <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                            <a href="{{ route('service.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</x-app-layout>
