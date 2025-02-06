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

    <a href="{{  route('goals.index') }}"> Back to goals</a>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="mb-4 text-lg font-semibold">Goal: {{ $goal->title }}</h3>
                    <p class="mb-4">{{ $goal->description }}</p>
                    <p class="mb-4">Status: {{ $goal->status }}</p>
                    <p class="mb-4">Priority: {{ $goal->priority }}</p>
                    <p class="mb-4">Due Date: {{ $goal->due_date }}</p>

                    <h4 class="mb-2 font-semibold text-md">Tasks:</h4>
                    <ul class="list-disc list-inside">
                        @forelse ($goal->tasks as $task)
                            <li class="mb-2">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-semibold">{{ $task->title }}</p>
                                        <p class="text-gray-500">{{ $task->description }}</p>
                                        <p class="text-gray-500">Status: {{ $task->status ? "Completed" : "Pending" }}</p>
                                    </div>
                                    <div>
                                        <a href="{{ route('tasks.edit', $task) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                        <form action="#" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-2 text-red-500 hover:text-red-700">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li>No tasks found.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
        
</x-app-layout>