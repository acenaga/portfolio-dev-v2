<div>
    <form wire:submit.prevent="create()">

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
        <button class="bg-primary">
            Create
        </button>
        @if (session()->has('message'))
            <p class="text-success">{{ session('message') }}</p>
        @endif
    </form>
</div>
