<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Technical SKills') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12 d-flex justify-content-center mb-5">
            <a href="{{ route('technical-skill.create') }}" class="btn btn-primary">Add Technical Skill</a>
        </div>
        @foreach ($skills as $skill)
            <div class="col-12 col-md-4 col-lg-3 p-2">
                <div class="border border-primary rounded-pill py-2 px-4">
                    <p>{{ $skill->name }}</p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-label="Technical SKill" aria-valuenow="{{ $skill->percent }}" aria-valuemin="0"
                            aria-valuemax="100" style="width: {{ $skill->percent }}%"></div>
                    </div>
                </div>
                <form action="{{ route('technical-skill.destroy', $skill->id) }}" method="POST">
                    <a href="{{ route('technical-skill.edit', $skill->id) }}" class="btn btn-warning">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </div>
        @endforeach
    </div>
</x-app-layout>
