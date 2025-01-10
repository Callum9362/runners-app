<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Goals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            @forelse($goals as $goal)
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-xl font-semibold leading-tight text-gray-800">
                            {{ $goal->title }}
                        </h2>
                        <p class="text-gray-500">{{ $goal->description }}</p>
                    </div>
                </div>
            @empty
                <p>No goals found.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>