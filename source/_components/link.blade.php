<a
    {{ $attributes->merge([
        'class' => 'cursor-pointer text-gray-600 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-50',
    ]) }}
    {{ $attributes }}
>
    {{ $slot }}
</a>