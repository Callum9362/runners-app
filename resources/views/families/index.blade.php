<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Goals') }}
        </h2>

        <div class="text-right">
            <a href="{{ route('goals.create') }}" class="px-4 py-2 ml-4 text-gray-800 bg-blue-500 rounded-lg hover:bg-blue-700">
                My Family
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($family)
                        <h3 class="mb-4 text-lg font-semibold">Family: {{ $family->family_name }}</h3>
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                            @forelse($members as $member)
                                <div class="p-6 bg-white rounded-lg shadow-lg">
                                    <h4 class="mb-2 text-lg font-semibold">{{ $member->name }}</h4>
                                    <p class="text-gray-600">{{ $member->email }}</p>
                                </div>
                            @empty
                                <p>No members found.</p>
                            @endforelse
                        </div>
                    @else
                        <p>You are not associated with any family.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>