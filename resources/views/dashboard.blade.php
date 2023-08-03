<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-4 col-12">
                <div class="form-check form-switch">
                    <p class="h3"> Sections Control</p>
                    @foreach ($sections as $section)
                        @livewire('section-panel', ['model' => $section, 'field' => 'isActive'], key($user->id))
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    {{-- <x-jet-welcome /> --}}
</x-app-layout>
