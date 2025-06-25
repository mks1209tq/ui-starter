@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge([
    'class' => 'block w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-gray-600
dark:focus:ring-gray-600 dark:focus:outline-gray-400 rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-900 sm:text-sm/6 '
]) }}>