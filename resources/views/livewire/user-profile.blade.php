<div class="max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Livewire + Nightwatch Test</h2>
    @if($message)
        <div class="mb-4 p-3 bg-green-100 dark:bg-green-900 border border-green-400 text-green-700 dark:text-green-300 rounded">
            {{ $message }}
        </div>
    @endif
    <div class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                Name:
            </label>
            <input
                wire:model="name"
                type="text"
                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                placeholder="Enter name..."
            >
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Current: {{ $name ?: 'Empty' }}</p>
        </div>
    </div>
    <div class="mt-6 space-y-3">
        <button
            wire:click="updateName"
            class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out"
        >
            Update Name (Add Context)
        </button>
    </div>
</div>
