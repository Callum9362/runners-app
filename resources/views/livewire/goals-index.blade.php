<div>
    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
        <p class="px-4 py-2 mt-4 text-lg font-semibold bg-blue-500 rounded-lg">
            You currently have {{ $goals->count() }} goals.
        </p>
    </div>
    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            @forelse($goals as $goal)
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="relative p-6 bg-white border-b border-gray-200">
                        <h2 class="text-xl font-semibold leading-tight text-gray-800">
                            {{ $goal->title }}
                        </h2>
                        <p class="text-gray-500">{{ $goal->description }}</p>
                        <button
                            wire:click="delete({{ $goal }})"
                            wire:confirm="Are you sure you want to delete this goal?"
                            class="absolute text-red-500 top-2 right-2 hover:text-red-700"
                        >
                            <x-heroicon-o-trash class="w-5 h-5" />
                        </button>
                    </div>
                </div>
            @empty
                <p>No goals found.</p>
            @endforelse
        </div>
    </div>
</div>
