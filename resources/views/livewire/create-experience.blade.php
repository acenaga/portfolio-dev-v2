<div>
    @if ($experienceAdded ==='')
        <form wire:submit.prevent="createExperience()">
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" maxlength="40" wire:model="position" placeholder="Founder">
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
                <input value="Create" type="submit" class="btn btn-primary text-light form-control">
                @if (session()->has('message'))
                    <p class="text-success">{{ session('message') }}</p>
                @endif
        </form>
    @endif
    @if ($experienceAdded != '')
        <div>
            <h3><a target="__blank" href="{{ $experienceAdded->url }}">{{ $experienceAdded->company_name }}</a></h3>
                <h4>{{ $experienceAdded->position }}</h4>
                <p><small>{{ $experienceAdded->description }}</small></p>
                <p><b>From:</b> <i class="bi bi-calendar"></i>
                    <time>{{ $experienceAdded->start_date }}</time>
                    <b>To:</b>
                    <time>{{ $experienceAdded->end_date }}</time>
                </p>
        </div>
        <ul>
            @foreach ($responsibilities as $responsibility)
                <li>{{ $responsibility }}</li>
            @endforeach
        </ul>
        <form wire:submit.prevent="addingResponsibilities()">
            <div class="mb-3">
                <label for="responsibilityDescription" class="form-label">Responsibility</label>
                <textarea class="form-control" wire:model="responsibilityDescription" id="responsibilityDescription"></textarea>
                @error('responsibilityDescription')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="hidden" wire:model="experienceAddedId" >
                <input value="Add" type="submit" class="btn btn-primary text-light form-control">
            </div>
        </form>
        <a href="{{ route('work-experiences.index') }}" class="btn btn-secondary text-light form-control">
            back to work experiences
        </a>
    @endif
    @if (session()->has('message'))
        <p class="text-success">{{ session('message') }}</p>
    @endif
</div>
