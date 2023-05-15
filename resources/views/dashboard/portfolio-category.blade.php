<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Portfolio Category') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h1>{{ $title }}</h1>
        </div>
        <livewire:crud-portfolio-category>

    </div>
</x-app-layout>
