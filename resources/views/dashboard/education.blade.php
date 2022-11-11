<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Education') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Education</h1>
                <ul role="list" class="divide-y divide-gray-200">
                    <li>
                        <div class="px-4 py-4 flex items-center sm:px-6">
                            <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                <div class="truncate">
                                    <p class="text-base font-semibold">Institute, Degree, Year</p>
                                </div>
                                <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                                    <p class="text-base font-semibold">description</p>
                                </div>
                                <div class="flex-shrink-0 sm:mt-0 sm:ml-5">
                                    <p class="text-base font-semibold">Actions</p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
                <ul role="list" class="divide-y divide-gray-200">
                    @foreach ($educations as $education)
                        <li>
                            <div class="px-4 py-4 flex items-center sm:px-6">
                                <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                                    <div class="truncate">
                                        <div class="flex text-sm">
                                            <p class="font-medium text-indigo-600 truncate">
                                                {{ $education->institute_name }}</p>
                                            <p class="ml-1 flex-shrink-0 font-normal text-gray-500">
                                                {{ $education->title }}</p>
                                        </div>
                                        <div class="mt-2 flex">
                                            <div class="flex items-center text-sm text-gray-500">
                                                <!-- Heroicon name: solid/calendar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <p>
                                                    From
                                                    <time>{{ $education->start_date }}</time>
                                                    To
                                                    <time>{{ $education->end_date }}</time>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex-shrink-0 sm:mt-0 sm:ml-5">
                                        <div class="flex overflow-hidden -space-x-1">
                                            <p class="font-normal">{{ $education->description }}</p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 sm:mt-0 sm:ml-5">
                                        <button type="button"
                                            class="inline-block px-2 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">
                                            Edit </button>
                                        <form action="{{ route('education.destroy', $education->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-block px-2 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
