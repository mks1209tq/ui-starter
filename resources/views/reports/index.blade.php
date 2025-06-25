<x-app-layout>

    @include('reports.partials.header')

    <main class="m-2 p-2 xl:m-2 xl:p-2 border-2 border-red-500">
        <div class="px-2 py-2 sm:px-6 lg:px-4 lg:py-2 border-2 border-blue-500">
            <!-- Main area -->
            <div class="space-y-4">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Reports</h2>

                <!-- Button to open modal -->
                <x-primary-button x-data="{}" x-on:click="$dispatch('open-modal', 'report-modal')">
                    Open Report Modal
                </x-primary-button>

                <p class="text-gray-600 dark:text-gray-400">
                    reports
                </p>
            </div>
        </div>
    </main>

    <!-- Modal Component -->
    <x-modal name="report-modal" :show="false" max-width="2xl">
        <div class="p-6">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    Report Details
                </h3>
                <button x-on:click="$dispatch('close-modal', 'report-modal')"
                    class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <div class="space-y-4">
                <p class="text-gray-600 dark:bg-gray-800 dark:text-gray-300 rounded p-2">
                    This is the modal content. You can put any content here like forms, tables, or other components.
                </p>

                <!-- Example form elements -->
                <div class="space-y-2">
                    <x-input-label for="report-title" value="Report Title" />
                    <x-text-input id="report-title" type="text" class="w-full" placeholder="Enter report title" />
                </div>

                <div class="space-y-2">
                    <x-input-label for="report-description" value="Description" />
                    <textarea id="report-description"
                        class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-500 dark:focus:border-gray-600 focus:ring-gray-500 dark:focus:ring-gray-600 rounded-md shadow-sm sm:text-sm/6 placeholder:text-gray-400"
                        rows="3" placeholder="Enter report description"></textarea>
                </div>

                <!-- Modal actions -->
                <div class="flex justify-end space-x-3 mt-6">
                    <x-secondary-button x-on:click="$dispatch('close-modal', 'report-modal')">
                        Cancel
                    </x-secondary-button>
                    <x-primary-button>
                        Save Report
                    </x-primary-button>
                </div>
            </div>
        </div>
    </x-modal>
</x-app-layout>