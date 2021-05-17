<li class="py-12">
    <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
        <div class="space-y-5 xl:col-span-3">
            <div class="space-y-6">
                <h2 class="text-2xl leading-8 font-bold tracking-tight">
                    <x-link
                        aria-label="Read &quot;{{ $article->title }}&quot;"
                        href="{{ $article->getUrl() }}"
                    >
                        {{ $article->title }}
                    </x-link>
                </h2>
                <div class="max-w-3xl leading-7 text-md space-y-3 text-gray-800 dark:text-gray-50">
                    <p>
                        {{ $article->description }}
                    </p>
                </div>
            </div>
            <div class="text-base leading-6 font-medium">
                <a
                    class="text-indigo-500 hover:text-indigo-600"
                    aria-label="Read &quot;{{ $article->title }}&quot;"
                    href="{{ $article->getUrl() }}"
                >
                    Read more →
                </a>
            </div>
        </div>
        <dl class="text-right">
            <dt class="sr-only">Published on</dt>
            <dd class="text-base leading-6 font-medium">
                <time datetime="{{ $article->getDate()->toDateString() }}">
                    {{ $article->getDate()->format('jS F Y') }}
                </time>
            </dd>
        </dl>
    </article>
</li>