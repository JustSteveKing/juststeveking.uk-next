<a
    {{ $attributes->merge([
        'class' => 'cursor-pointer text-gray-400',
    ]) }}
    {{ $attributes }}
    target="__blank"
    rel="noopener nofollow"
>
    {{ $slot }}
</a>