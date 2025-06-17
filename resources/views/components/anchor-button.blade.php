<a {{ $attributes->merge(['href' => $href, 'class' => 'iflex justify-center rounded-md bg-blue-900 dark:bg-blue-900 px-3 py-2.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-blue-800 dark:hover:bg-blue-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600']) }}>
    {{ $slot }}
</a>