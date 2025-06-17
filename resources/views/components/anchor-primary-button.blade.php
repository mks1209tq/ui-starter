<a {{ $attributes->merge(['href' => $href, 'class' => 'inline-flex items-center rounded-md bg-white dark:bg-gray-600 px-3 py-2 text-sm font-semibold text-gray-900 dark:text-gray-300 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 dark:hover:bg-gray-500']) }}>
    {{ $slot }}
</a> 

