<x-app-layout>

    <main class="m-2 p-2 xl:m-2 xl:p-2 border-2 border-red-500 dark:border-red-700">
        <div class="px-2 py-2 sm:px-6 lg:px-4 lg:py-2 border-2 border-blue-500 dark:border-blue-700">
            <!-- Main area -->
            <div class="bg-gray-50 dark:bg-gray-900 py-2 sm:py-2">
                <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 auto-rows-fr gap-4">
                        @foreach($bentoItems as $item)
                            <div class="{{ $item['gridClasses'] }}">
                                <div class="relative h-full w-full flex flex-col">
                                    <div class="absolute inset-0 rounded-lg bg-white dark:bg-gray-800 z-0"></div>
                                    <div class="{{ $item['contentClasses'] }} h-full z-10 flex flex-col">
                                        <div
                                            class="px-8 pt-8 {{ isset($item['subItems']) ? 'pb-3 sm:pb-0' : '' }} sm:px-10 sm:pt-10 grow">

                                            <p
                                                class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-100 max-lg:text-center">
                                                {{ $item['title'] }}
                                            </p>
                                            @if(isset($item['routeName']))
                                                <a href="{{ route($item['routeName']) }}"
                                                    class="text-blue-500 dark:text-blue-700">
                                                    <p
                                                        class="mt-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-400 max-lg:text-center">
                                                        {{ $item['description'] }}
                                                    </p>
                                                </a>
                                            @endif

                                        </div>
                                        @if(isset($item['subItems']))
                                            @foreach($item['subItems'] as $subItem)
                                                <div
                                                    class="relative mt-4 flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                                                    <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                                        <p
                                                            class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-100 max-lg:text-center">
                                                            {{ $subItem['title'] }}
                                                        </p>
                                                        <p
                                                            class="mt-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-400 max-lg:text-center">
                                                            {{ $subItem['description'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        @if(isset($item['title']) && $item['title'] === 'Powerful APIs')
                                            <div class="relative min-h-120 w-full grow"></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>