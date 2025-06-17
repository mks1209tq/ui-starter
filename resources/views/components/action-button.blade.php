<a {{ $attributes->merge(['href' => $href, 'class' => 'inline-flex items-center rounded-md bg-blue-900 dark:bg-blue-900 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-800 dark:hover:bg-blue-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-900']) }}>
    {{ $slot }}
</a>