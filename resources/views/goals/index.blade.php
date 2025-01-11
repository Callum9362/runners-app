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