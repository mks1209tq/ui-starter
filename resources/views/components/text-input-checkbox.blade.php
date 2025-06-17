@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'rounded dark:bg-gray-600 border-blue-900 dark:border-gray-700 text-blue-900 shadow-sm focus:ring-blue-900 dark:focus:ring-gray-600 dark:focus:ring-offset-gray-800']) }}>