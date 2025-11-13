<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">

        <x-action-message on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="mb-3" x-data="{ photoName: null, photoPreview: null }">
                <!-- Profile Photo File Input -->
                <input type="file" hidden wire:model.live="photo" x-ref="photo"
                    x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" class="rounded-circle" height="80px"
                        width="80px">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <img x-bind:src="photoPreview" class="rounded-circle" width="80px" height="80px">
                </div>

                <x-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        <div wire:loading wire:target="deleteProfilePhoto" class="spinner-border spinner-border-sm"
                            role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        {{ __('Remove Photo') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <div class="w-md-75">
            <!-- First Name -->
            <div class="mb-3">
                <x-label for="name" value="{{ __('First Name') }}" />
                <x-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                    wire:model="state.name" autocomplete="name" />
                <x-input-error for="name" />
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <x-label for="last_name" value="{{ __('Last Name') }}" />
                <x-input id="last_name" type="text" class="{{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                    wire:model="state.last_name" autocomplete="last_name" />
                <x-input-error for="last_name" />
            </div>

            <!-- Phone -->
            <div class="mb-3">
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" type="tel" class="{{ $errors->has('phone') ? 'is-invalid' : '' }}"
                    wire:model="state.phone" />
                <x-input-error for="phone" />
            </div>

            <!-- Email -->
            <div class="mb-3">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                    wire:model="state.email" />
                <x-input-error for="email" />
            </div>

            <!-- Profession -->
            <div class="mb-3">
                <x-label for="profession" value="{{ __('Profession') }}" />
                <x-input id="profession" type="text"
                    class="{{ $errors->has('profession') ? 'is-invalid' : '' }}" wire:model="state.profession" />
                <x-input-error for="profession" />
            </div>

            <!-- Greeting -->
            <div class="mb-3">
                <x-label for="greeting" value="{{ __('Greeting') }}" />
                <x-input id="greeting" type="text" class="{{ $errors->has('greeting') ? 'is-invalid' : '' }}"
                    wire:model="state.greeting" />
                <x-input-error for="greeting" />
            </div>

            <!-- Address -->
            <div class="mb-3">
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" type="text" class="{{ $errors->has('address') ? 'is-invalid' : '' }}"
                    wire:model="state.address" />
                <x-input-error for="address" />
            </div>

            <!-- About Me -->
            <div class="mb-3">
                <x-label for="about_me" value="{{ __('About Me') }}" />
                <textarea name="" id="about_me" rows="7" class="{{ $errors->has('about_me') ? 'is-invalid' : '' }} form-control pac-target-input"
                    wire:model="state.about_me"></textarea>
                <x-input-error for="about_me" />
            </div>
            <!-- CV -->
            <div class="mb-3">
                <x-label for="cv" value="{{ __('CV') }}" />
                <x-input id="cv" type="file" class="{{ $errors->has('cv') ? 'is-invalid' : '' }}"
                    wire:model="state.cv" />
                <x-input-error for="cv" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <div class="d-flex align-items-baseline">
            <x-button>
                <div wire:loading class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>

                {{ __('Save') }}
            </x-button>
        </div>
    </x-slot>
</x-form-section>
