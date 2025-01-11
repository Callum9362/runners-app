<div>
    <form wire:submit.prevent="submit" class="max-w-xl mx-auto space-y-4">
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="title" wire:model="title" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 focus:ring-blue-300">
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" wire:model="description" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 focus:ring-blue-300"></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="status" wire:model="status" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 focus:ring-blue-300">
                <option value="pending">Pending</option>
                <option value="in progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
            @error('status') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
            <select id="priority" wire:model="priority" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 focus:ring-blue-300">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            @error('priority') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="due_date" class="block text-sm font-medium text-gray-700">Due Date</label>
            <input type="date" id="due_date" wire:model="due_date" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50 focus:ring-blue-300">
            @error('due_date') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="text-right">
            <button type="submit" class="px-4 py-2 bg-blue-500 rounded-lg hover:bg-blue-700">Create Goal</button>
        </div>
    </form>
</div>
