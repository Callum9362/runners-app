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

    <p>{{ $family->family_name }}

    @forelse($members as $member)
        <p>{{ $member->name }}</p>
    @empty
        <p>No members found.</p>
    @endforelse

</x-app-layout>