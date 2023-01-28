<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Work Experiences') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12 d-flex justify-content-center mb-5">
            <a href="{{ route('work-experiences.create') }}" class="btn btn-primary">Add Experience</a>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif
        @foreach ($experiences as $experience)
            <div class="col-12 col-md-4 col-lg-3 p-2">
                <h3><a target="__blank" href="{{ $experience->url }}">{{ $experience->company_name }}</a></h3>
                <h4>{{ $experience->position }}</h4>
                <p><small>{{ $experience->description }}</small></p>
                <p><b>From:</b> <i class="bi bi-calendar"></i>
                    <time>{{ $experience->start_date }}</time>
                    <b>To:</b>
                    <time>{{ $experience->end_date }}</time>
                </p>
                @if ($experience->responsibilities->count() > 0)
                    <ul>
                        @foreach ($experience->responsibilities as $responsibility)
                            <li>{{ $responsibility->description }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('work-experiences.destroy', $experience->id) }}" method="POST">
                    <a href="{{ route('work-experiences.edit', $experience->id) }}" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>
        @endforeach
</x-app-layout>
