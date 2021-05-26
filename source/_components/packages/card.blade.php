<li class="py-12">
    <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
        <div class="space-y-5 xl:col-span-3">
            <div class="space-y-6">
                <h2 class="text-2xl leading-8 font-bold tracking-tight">
                    <a
                        class="cursor-pointer hover:underline text-gray-600 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white text-xl md:text-2xl flex items-center space-x-2 group-hover"
                        aria-label="Check out &quot;{{ $package->title }}&quot;"
                        title="Check out &quot;{{ $package->title }}&quot; on packagist"
                        href="https://packagist.org/packages/{{ $package->title }}"
                        target="__blank"
                        rel="noopener nofollow"
                    >
                        <svg class="w-5 h-5 text-gray-400 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        <span>{{ ucwords(str_replace('-', ' ', substr($package->title, 14))) }}</span>
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
                    class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600"
                >
                    Check out this package →
                </a>
            </div>
        </div>
        <dl class="text-right">
            <dt class="sr-only">Published on</dt>
            <dd class="flex flex-col text-base leading-6 font-medium space-y-2">
                <span class="text-sm">Last updated on:</span>
                <time class="text-md" datetime="{{ $package->getPublished()->toDateString() }}">
                    {{ $package->getPublished()->format('jS F Y') }}
                </time>
            </dd>
        </dl>
    </article>
</li>