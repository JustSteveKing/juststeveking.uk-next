<li class="py-6">
    <article class="space-y-2 xl:grid xl:grid-cols-4 xl:space-y-0 xl:items-baseline">
        <div class="space-y-5 xl:col-span-4">
            <div class="space-y-6 space-x-4 flex items-center">
                <div class="w-3/4 space-y-2">
                    <h2 class="text-3xl leading-8 font-bold tracking-tight">
                        <a
                            class="cursor-pointer hover:underline text-gray-600 dark:text-gray-200 hover:text-gray-800 dark:hover:text-white text-xl md:text-2xl"
                            aria-label="Read &quot;{{ $stream->title }}&quot;"
                            title="Read &quot;{{ $stream->title }}&quot;"
                            href="{{ $stream->getUrl() }}"
                            itemprop="name"
                        >
                            {{ $stream->title }}
                        </a>
                    </h2>
                    <dl class="text-left py-3">
                        <dt class="sr-only">Streamed on</dt>
                        <dd class="text-base leading-6 font-medium">
                            <time
                                itemProp="datePublished"
                                content="{{ $stream->getDate()->toDateString() }}"
                                datetime="{{ $stream->getDate()->toDateString() }}"
                            >
                                Streamed on: {{ $stream->getDate()->format('jS F Y') }}
                            </time>
                        </dd>
                    </dl>
                    <div class="leading-7 text-md space-y-3 text-gray-800 dark:text-gray-50">
                        <p class="mt-1">
                            {{ $stream->description }}
                        </p>
                    </div>
                    <div class="text-base leading-6 font-medium py-4">
                        <a
                            class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600"
                            aria-label="Read &quot;{{ $stream->title }}&quot;"
                            title="Read &quot;{{ $stream->title }}&quot;"
                            href="{{ $stream->getUrl() }}"
                            onclick="window.fathom.trackGoal('UQ8HFKH5', 0);"
                        >
                            Read more →
                        </a>
                    </div>
                </div>
                <div class="w-1/4">
                    <a
                        class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600"
                        aria-label="Read &quot;{{ $stream->title }}&quot;"
                        title="Read &quot;{{ $stream->title }}&quot;"
                        href="{{ $stream->getUrl() }}"
                        onclick="window.fathom.trackGoal('UQ8HFKH5', 0);"
                    >
                        <img
                            class="rounded-lg shadow-lg"
                            src="https://i.ytimg.com/vi/{{ $stream->video_id }}/maxresdefault.jpg"
                        />
                    </a>
                </div>

            </div>
        </div>
    </article>
</li>
