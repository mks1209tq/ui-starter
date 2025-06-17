<button {{ $attributes->merge([
    'type' => 'button',
    'class' => 'inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-gray-400 dark:bg-gray-600 dark:text-gray-300 dark:hover:ring-gray-500',
    ':aria-expanded' => 'open',
    'aria-haspopup' => 'true'
]) }} @click="open = !open">
    {{ $slot }}
</button>