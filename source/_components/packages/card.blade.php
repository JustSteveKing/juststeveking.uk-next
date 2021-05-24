<li class="py-12">
    <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
        <div class="space-y-5 xl:col-span-3">
            <div class="space-y-6">
                <h2 class="text-2xl leading-8 font-bold tracking-tight">
                    <a
                        class="cursor-pointer hover:underline text-gray-600 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white text-xl md:text-2xl"
                        aria-label="Check out &quot;{{ $package->title }}&quot;"
                        title="Check out &quot;{{ $package->title }}&quot; on packagist"
                        href="https://packagist.org/packages/{{ $package->title }}"
                        target="__blank"
                        rel="noopener nofollow"
                    >
                        {{ $package->title }}
                    </a>
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
                    onclick="window.fathom.trackGoal('8YXQNRIR', 0);"
                    rel="noopener nofollow"
                    class="text-indigo-500 hover:text-indigo-600"
                >
                    Check out this package →
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