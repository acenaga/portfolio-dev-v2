<div>
    <form wire:submit.prevent="editExperience()">
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" maxlength="40" wire:model="position" placeholder="Founder" value="{{ $experience->position }}">
            @error('position')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="company_name" class="form-label">Company Name</label>
            <input type="text" wire:model="company_name" class="form-control" maxlength="40" id="company_name"
                placeholder="PDVSA">
            @error('company_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" wire:model="description" id="description"></textarea>
            @error('description')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Company Url</label>
            <input type="url" wire:model="url" class="form-control" id="url" placeholder="https://example.com"
                pattern="https://.*" size="30">
            @error('url')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="start_date">Start Date</label>
            <input id="start_date" wire:model="start_date" class="form-control" type="date" />
            @error('start_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="end_date">End Date</label>
            <input id="end_date" wire:model="end_date" class="form-control" type="date" />
            @error('end_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
            <input value="Update" type="submit" class="btn btn-primary text-light form-control">
    </form>
    @if (sizeof($responsibilities) != 0)
        <form class="mt-3" wire:submit.prevent="editResponsibilities">
            @foreach ($responsibilities as $index => $responsibility)
                <div wire:key="responsibility-field-{{ $responsibility->id }}" class="mb-3 row">
                    <textarea class="form-control" wire:model="responsibilities.{{$index}}.description" id="responsibilities.{{$index}}.description"></textarea>
                    @error('responsibilityDescription')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <button value="Add" wire:click.prevent="deleteResponsibility({{ $responsibility->id }})" class="btn btn-danger text-light form-control mt-2">Delete</button>

                </div>
            @endforeach
            <button type="submit" class="btn btn-primary text-light form-control mt-2">Update</button>
        </form>

    @else
        <form wire:submit.prevent="addingResponsibilities({{ $experience->id }})">
            <div class="mb-3">
                <label for="responsibilityDescription" class="form-label">Responsibility</label>
                <textarea class="form-control" wire:model="responsibilityDescription" id="responsibilityDescription"></textarea>
                @error('responsibilityDescription')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input value="Add" type="submit" class="btn btn-primary text-light form-control">
            </div>
        </form>
    @endif
    <a href="{{ route('work-experiences.index') }}" class="btn btn-secondary text-light form-control">
        back to work experiences
    </a>

    @if (session()->has('message'))
    <div class="alert alert-succes">
        <p class="text-success">{{ session('message') }}</p>
    </div>
    @endif
</div>
