<li>
    @if (request()->is('dashboard'))
        <a href="{{ route('dashboard') }}"
            class="group flex gap-x-3 rounded-md bg-gray-800 p-3 text-sm/6 font-semibold text-white">
            <x-svg.dashboard />
            <span class="block sm:sr-only">Dashboard</span>
        </a>
    @else
        <a href="{{ route('dashboard') }}"
            class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
            <x-svg.dashboard />
            <span class="block sm:sr-only">Dashboard</span>
        </a>
    @endif
</li>

<li>
    <a href="{{route('apps')}}"
        class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
        <x-svg.apps />

        <span class="block sm:sr-only">Apps</span>
    </a>



</li>



<li>
    @if (request()->is('people'))
        <a href="{{ route('people') }}"
            class="group flex gap-x-3 rounded-md bg-gray-800 p-3 text-sm/6 font-semibold text-white">
    @else
            <a href="{{ route('people') }}"
                class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
        @endif
            <x-svg.people />
            <span class="block sm:sr-only">Team</span>
        </a>

</li>
<li>
    @if (request()->is('tasks'))
        <a href="{{ route('tasks') }}"
            class="group flex gap-x-3 rounded-md bg-gray-800 p-3 text-sm/6 font-semibold text-white">
    @else
            <a href="{{ route('tasks') }}"
                class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
        @endif
            <x-svg.tasks />
            <span class="block sm:sr-only">Tasks</span>
        </a>
</li>
<li>
    @if (request()->is('documents'))
        <a href="{{ route('documents') }}"
            class="group flex gap-x-3 rounded-md bg-gray-800 p-3 text-sm/6 font-semibold text-white">
    @else
            <a href="{{ route('documents') }}"
                class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
        @endif
            <x-svg.documents />
            <span class="block sm:sr-only">Documents</span>
        </a>
</li>
<li>
    @if (request()->is('reports'))
        <a href="{{ route('reports') }}"
            class="group flex gap-x-3 rounded-md bg-gray-800 p-3 text-sm/6 font-semibold text-white">
    @else
            <a href="{{ route('reports') }}"
                class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
        @endif
            <x-svg.reports />
            <span class="block sm:sr-only">Reports</span>
        </a>
</li>