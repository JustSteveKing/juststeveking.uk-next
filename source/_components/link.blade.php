<a
    {{ $attributes->merge([
        'class' => 'cursor-pointer hover:underline text-gray-600 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white text-md md:text-lg',
    ]) }}
    {{ $attributes }}
>
    {{ $slot }}
</a>