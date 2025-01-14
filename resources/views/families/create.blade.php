<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Goals') }}
        </h2>

        <div class="text-right">
            <a href="{{ route('goals.index') }}" class="px-4 py-2 ml-4 text-gray-800 bg-blue-500 rounded-lg hover:bg-blue-700">
                Back to goals
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <livewire:create-goal />
    </div>
</x-app-layout>