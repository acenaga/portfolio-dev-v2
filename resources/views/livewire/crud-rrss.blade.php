<div class="row">
    @if (session()->has('message'))
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        </div>
    @endif
    <div class="col-12 col-md-6">
        @foreach ($socialMedias as $item)
            <div class="border border-success border-2 rounded p-2 my-2">
                <p><span class="badge bg-primary me-1">Name:</span> {{ $item->name }}
                <p><span class="badge bg-primary me-1">icon:</span><i class="{!! $item->icon !!}"></i>
                <p><span class="badge bg-primary me-1">url:</span> <span>{{ $item->url }}</span></p>
                <div class="d-flex justify-content-evenly">
                    <button wire:click="delete({{ $item->id }})" class="btn btn-danger">Delete</button>
                    <button wire:click="edit({{ $item->id }})" class="btn btn-warning">Edit</button>
                </div>
            </div>
        @endforeach
    </div>
    <div class="col-12 col-md-6">
        <form wire:submit.prevent="save()">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control" id="title"
                    placeholder="some like facebook">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="icon" class="form-label">icon</label>
                <input wire:model="icon" type="text" class="form-control" id="title"
                    placeholder="some like facebook">
                @error('icon')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input wire:model="url" type="text" class="form-control" id="title"
                    placeholder="some like facebook">
                @error('url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            @if (!$isEdit)
                <button type="submit" class="btn btn-primary text-white">Add</button>
            @endif
        </form>
        @if ($isEdit)
            <button wire:click="update()" class="btn btn-success text-white">Save</button>
            <button wire:click="$toggle('isEdit')" class="btn btn-danger text-white">Cancel</button>
        @endif
    </div>
</div>
