<div
    class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-gray-600">
    <button @click="open = true" @click.outside="open = false" type="button"
        class="-m-2.5 p-2.5 text-gray-700 dark:text-white lg:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
            data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>
    <!-- Separator -->
    <div class="h-6 w-px bg-gray-900/10 lg:hidden" aria-hidden="true"></div>
    <div class="flex flex-1 justify-end">
        <div class="flex items-center gap-x-4 lg:gap-x-6">
            <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
            </button>
            <!-- Separator -->
            <!-- <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-900/10" aria-hidden="true"></div> -->
            <!-- Profile dropdown -->
            <div class="relative" x-data="{ profileOpen: false }">
                <button @click="profileOpen = !profileOpen" @click.outside="profileOpen = false" type="button"
                    class="-m-1.5 flex items-center p-1.5" id="user-menu-button" aria-expanded="false"
                    aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>

                    <x-profile-image />

                    <span class="hidden lg:flex lg:items-center">
                        <span class="ml-4 text-sm/6 font-semibold text-gray-900 dark:text-white" aria-hidden="true">
                            {{ Auth::user()->name }}
                        </span>
                        <!-- arrow down -->
                        <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>

                <div x-cloak x-show="profileOpen"
                    class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white dark:bg-gray-600 py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-50 outline-none", Not Active: "" -->
                    <a href="{{ route('profile.edit') }}"
                        class="block px-3 py-1 text-sm/6 text-gray-900 dark:text-white" role="menuitem" tabindex="-1"
                        id="user-menu-item-0">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block px-3 py-1 text-sm/6 text-gray-900 dark:text-white"
                            role="menuitem" tabindex="-1" id="user-menu-item-1">Sign out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>