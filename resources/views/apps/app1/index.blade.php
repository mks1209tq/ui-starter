<x-app-layout>

    @include('apps.app1.partials.header')

    <main class="m-2 p-2 xl:m-2 xl:p-2 border-2 border-red-500">
        <div class="px-2 py-2 sm:px-6 lg:px-4 lg:py-2 border-2 border-blue-500">
            <!-- Main area -->
            main-area

            <br></br>
            <br></br>
            <br></br>
            <br></br>
            end of main

        </div>
    </main>

    @include('apps.app1.partials.footer')

</x-app-layout>