<li class="py-6" itemscope itemtype="https://schema.org/Article">
    <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
        <div class="space-y-5 xl:col-span-3">
            <div class="space-y-6">
                <h2 class="text-3xl leading-8 font-bold tracking-tight">
                    <a
                        class="cursor-pointer hover:underline text-gray-600 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white text-xl md:text-2xl"
                        aria-label="Read &quot;{{ $article->title }}&quot;"
                        title="Read &quot;{{ $article->title }}&quot;"
                        href="{{ $article->getUrl() }}"
                        itemprop="name"
                    >
                        {{ $article->title }}
                    </a>
                </h2>
                <div class="max-w-3xl leading-7 text-md space-y-3 text-gray-800 dark:text-gray-50">
                    <p>
                        {{ $article->description }}
                    </p>
                </div>
            </div>
            <div class="text-base leading-6 font-medium">
                <a
                    class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600"
                    aria-label="Read &quot;{{ $article->title }}&quot;"
                    title="Read &quot;{{ $article->title }}&quot;"
                    href="{{ $article->getUrl() }}"
                    onclick="window.fathom.trackGoal('KSUA7DHV', 0);"
                >
                    Read more →
                </a>
            </div>
        </div>
        <dl class="text-right">
            <dt class="sr-only">Published on</dt>
            <dd class="text-base leading-6 font-medium">
                <time
                    itemProp="datePublished"
                    content="{{ $article->getDate()->toDateString() }}"
                    datetime="{{ $article->getDate()->toDateString() }}"
                >
                    {{ $article->getDate()->format('jS F Y') }}
                </time>
            </dd>
        </dl>
    </article>
</li>