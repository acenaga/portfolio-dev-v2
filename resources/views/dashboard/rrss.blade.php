<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Rrss') }}
        </h2>
    </x-slot>
    tw-card
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Social Links</h1>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <livewire:crud-rrss>
        </div>

    </div>
</x-app-layout>
