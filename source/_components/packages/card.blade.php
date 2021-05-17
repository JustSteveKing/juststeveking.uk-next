<li class="py-12">
    <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
        <div class="space-y-5 xl:col-span-3">
            <div class="space-y-6">
                <h2 class="text-2xl leading-8 font-bold tracking-tight">
                    <x-link
                        aria-label="Check out &quot;{{ $package->title }}&quot;"
                        title="Check out &quot;{{ $package->title }}&quot; on packagist"
                        href="https://packagist.org/packages/{{ $package->title }}"
                        target="__blank"
                        rel="noopener nofollow"
                    >
                        {{ $package->title }}
                    </x-link>
                </h2>
                <div class="max-w-3xl leading-7 text-md space-y-3 text-gray-800 dark:text-gray-50">
                    <p>
                        {{ $package->description }}
                    </p>
                </div>
            </div>
            <div class="text-base leading-6 font-medium">
                <a
                    aria-label="Check out &quot;{{ $package->title }}&quot;"
                    title="Check out &quot;{{ $package->title }}&quot; on packagist"
                    href="https://packagist.org/packages/{{ $package->title }}"
                    target="__blank"
                    rel="noopener nofollow"
                >
                    Check out the package →
                </a>
            </div>
        </div>
        <dl class="text-right">
            <dt class="sr-only">Published on</dt>
            <dd class="text-base leading-6 font-medium">
                <time datetime="{{ $package->getPublished()->toDateString() }}">
                    {{ $package->getPublished()->format('jS F Y') }}
                </time>
            </dd>
        </dl>
    </article>
</li>