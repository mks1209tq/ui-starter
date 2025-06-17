<a {{ $attributes->merge(['href' => $href, 'class' => 'font-semibold text-blue-900 dark:text-white hover:text-blue-800 dark:hover:text-gray-200']) }}>
    {{ $slot }}
</a>