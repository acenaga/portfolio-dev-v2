<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Portfolio Items</h1>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <livewire:crud-portfolio-item>
        </div>

    </div>
</x-app-layout>
