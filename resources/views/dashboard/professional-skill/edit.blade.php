<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Professional Skill') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-12 col-md-6 col-lg-4">
            <form action="{{ route('professional-skill.update', $skill) }}" method="POST">
                <div class="mb-3">
                    <label for="skill-title" class="form-label">Title</label>
                    <input type="text" name="name" class="form-control" maxlength="40" id="skill-title"
                        value="{{ old('name', $skill->name) }}" placeholder="Frontend developer">
                </div>
                <div class="mb-3">
                    <label for="skill-percent" class="form-label">percent</label>
                    <input type="tel" name="percent" class="form-control" maxlength="40" id="skill-percent"
                        value="{{ old('percent', $skill->percent) }}" placeholder="50%">
                </div>
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</x-app-layout>
