<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Goals') }}
        </h2>

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

    <p>Edit Goal</p>
        
</x-app-layout>