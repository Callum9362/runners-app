<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Goals') }}
        </h2>

        <div class="text-right">
            <a href="{{ route('goals.create') }}" class="px-4 py-2 ml-4 text-gray-800 bg-blue-500 rounded-lg hover:bg-blue-700">
                Create Goal
            </a>
        </div>
    </x-slot>

    @if (session('success'))
        <div class="mx-auto mt-4 max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 py-2 font-bold text-white bg-green-500 rounded-t">
                Success
            </div>
            <div class="px-4 py-3 text-green-700 bg-green-100 border border-t-0 border-green-400 rounded-b">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <livewire:goals-index />
        
</x-app-layout>