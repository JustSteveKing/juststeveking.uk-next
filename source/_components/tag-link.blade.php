<a
    {{ $attributes->merge([
        'class' => 'cursor-pointer hover:underline text-indigo-500 dark:text-indigo-200 hover:text-indigo-800 dark:hover:text-indigo-50',
    ]) }}
    {{ $attributes }}
>
    {{ $slot }}
</a>