<div>
    <div class="row mb-4">
        <div class="col-12 col-md-4 text-center">
            <form wire:submit.prevent="save()" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input wire:model="title" type="text" class="form-control" maxlength="40" id="title"
                        placeholder="A great game">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sub_title" class="form-label">Sub Title</label>
                    <input type="text" wire:model="sub_title" class="form-control" id="sub_title"
                        placeholder="yeah the better game!">
                    @error('sub_title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" wire:model="description" id="description" rows="3"
                        placeholder="Put some very description"></textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Project Url</label>
                    <input type="url" wire:model="url" class="form-control" id="url"
                        placeholder="https://example.com" size="70">
                    @error('url')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image Caption</label>
                    <input class="form-control" id="image" type="file" wire:model="image">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="caption_image" class="form-label">Image Caption</label>
                    <input type="text" wire:model="caption_image" class="form-control" id="caption_image"
                        placeholder="This is the best image">
                    @error('caption_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category" wire:model="category_id">
                        <option selected>Open this select menu</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keywords" class="form-label">keywords</label>
                    <textarea class="form-control" wire:model="keywords" id="keywords" rows="3"></textarea>
                    @error('keywords')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary text-white">Add</button>
            </form>
        </div>
        <div class="col-12 col-md-8">
            <div class="d-flex justify-content-center flex-wrap">

                @foreach ($items as $item)
                    <div class="card m-2" style="width: 18rem;">
                        <img src="{{ $item->image }}" class="card-img-top" alt="...">
                        <p class="card-text"><small class="text-muted">{{ $item->caption_image }}</small></p>
                        <span class="border border-info rounded p-1">{{ $item->category->name }}</span>
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <h6 class="card-title">{{ $item->sub_title }}</h6>
                            <p class="card-text">{{ $item->description }}</p>
                            <p class="lh-lg">
                                @foreach ($item->keywords_skills() as $keyword)
                                    <span class="border border-info rounded p-1">{{ $keyword }}</span>
                                @endforeach
                            </p>
                            @if (count($item->portfolio_images()->get()) >= 1)
                                <p class="fw-bold">Additional images:</p>
                                <figure class="d-flex flex-wrap">
                                    @foreach ($item->portfolio_images()->get() as $image)
                                        <img class="p-1" style="width:75px" src="{{ $image->image }}"
                                            alt="{{ $image->caption_image }}">
                                    @endforeach
                                </figure>
                            @endif
                            <a target="__blank" href="{{ $item->link }}" class="btn btn-primary">Live Demo</a>
                            <div class="mt-4 d-flex justify-content-center gap-2">
                                <button wire:click="deleteItem({{ $item->id }})" class="btn btn-danger">delete</button>
                                <button class="btn btn-warning">Edit</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
