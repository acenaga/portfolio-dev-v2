<div class="row">
    <div class="col-md-12 col-lg-4">
        <h2>You have {{ count($categories) }} Categories</h2>
        @if ($edit)
            <form wire:submit.prevent="editCategory()">
        @endif
        @foreach ($categories as $index => $category)
            @if (!$edit)
                <div>
                    <p>{{ $category->name }}</p>
                    <div>
                        <button type="button" class="btn btn-danger form-control mt-2" wire:click="deleteCategory({{$category->id}})">Danger</button>

                    </div>
                </div>
            @else
                <div wire:key="category-field-{{ $category->id }}" class="mb-3">
                    <input wire:model="categories.{{$index}}.name" id="categories.{{$index}}.name" type="text" value="{{$category->name}}">
                </div>
            @endif
        @endforeach
        @if (!$edit)
            <button type="button" class="btn btn-info form-control mt-2" wire:click="switchEdit()">Edit</button>
        @else
            <button type="button" class="btn btn-info form-control mt-2" wire:click="switchEdit()">Cancel</button>
            <button type="submit" class="btn btn-primary text-light form-control mt-2">Update</button>
        @endif
        </form>

    </div>

    <div class="col-md-12 col-lg-4">
        <form wire:submit.prevent="addCategory()">
            <label for="categoryName" class="form-label">Category</label>
            <input type="text" class="form-control" wire:model="categoryName" id="categoryName"></input>
            @error('categoryName')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <input value="Add" type="submit" class="btn btn-primary text-light form-control">
        </form>
    </div>
    @if (session()->has('message'))
        <div class="col-12">
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        </div>
    @endif
</div>
