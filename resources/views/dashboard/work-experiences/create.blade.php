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

    </div>
</x-app-layout>
