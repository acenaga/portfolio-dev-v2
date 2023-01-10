<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Education') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <a href="{{ route('education.create') }}" class="btn btn-primary">Add Education</a>
        </div>
        @foreach ($educations as $education)
            <div class="col-lg-3 col-md-6 col-12 p-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Institute:</b> <a target="__blank"
                                href="{{ $education->url }}">{{ $education->institute_name }}</a></h5>
                        <h5 class="card-title"><b>Degree:</b> {{ $education->title }}</h5>
                        <p class="card-text"><b>From:</b> <i class="bi bi-calendar"></i>
                            <time>{{ $education->start_date }}</time>
                            To
                            <time>{{ $education->end_date }}</time>
                        </p>
                        <p class="card-text">{{ $education->description }}</p>
                        <form action="{{ route('education.destroy', $education->id) }}" method="POST">
                            <a href="{{ route('education.edit', $education->id) }}" class="btn btn-warning">Edit</a>
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
