<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex flex-end  justify-end rounded-md bg-blue-900 dark:bg-blue-900 px-5 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-blue-800 dark:hover:bg-blue-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600']) }}>
    {{ $slot }}
</button>