<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Work Experiences') }}
        </h2>
    </x-slot>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <livewire:create-experience />
        </div>

        {{-- <div class="col-12 col-md-6 col-lg-4">
            <form action="{{ route('work-experiences.store') }}" method="POST">
                <div class="mb-3">
                    <label for="degree-obtain" class="form-label">Degree Obtain</label>
                    <input type="text" name="title" class="form-control" maxlength="40" id="degree-obtain"
                        placeholder="Informatic TSU">
                </div>
                <div class="mb-3">
                    <label for="institute-name" class="form-label">Institute Name</label>
                    <input type="text" name="institute_name" class="form-control" id="institute-name"
                        placeholder="Davinci School">
                </div>
                <div class="mb-3">
                    <label for="description-degree" class="form-label">Degree Description</label>
                    <textarea class="form-control" name="description" id="description-degree" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="institute-url" class="form-label">School Url</label>
                    <input type="url" name="url" class="form-control" id="institute-url"
                        placeholder="https://example.com" pattern="https://.*" size="30">
                </div>
                <div class="mb-3">
                    <label for="start-date" class="form-label">Start Date</label>
                    <input name="start_date" class="form-control" list="start-year" id="start-date"
                        placeholder="Type to search year...">
                    <datalist id="start-year">
                        {{ $last = date('Y') - 75 }}
                        {{ $now = date('Y') }}

                        @for ($i = $now; $i >= $last; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                </div>
                <div class="mb-3">
                    <label for="end-date" class="form-label">Start Date</label>
                    <input name="end_date" class="form-control" list="end-year" id="end-date"
                        placeholder="Type to search year...">
                    <datalist id="end-year">
                        {{ $last = date('Y') - 75 }}
                        {{ $now = date('Y') }}

                        @for ($i = $now; $i >= $last; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                </div>
                @csrf
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> --}}

    </div>
</x-app-layout>
