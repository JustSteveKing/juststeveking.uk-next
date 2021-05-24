@extends('_layouts.main')

@php
    $page->type = 'article';    
@endphp

@section('body')
    <main itemscope itemtype="https://schema.org/Article" class="max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <article class="xl:divide-y xl:divide-gray-200">
            <header class="pt-6 xl:pb-10">
                <div class="space-y-1 text-center">
                    <dl class="space-y-10">
                        <div>
                            <dt class="sr-only">
                                Published on
                            </dt>
                            <dd class="text-base leading-6 font-medium">
                                <time
                                    itemProp="datePublished"
                                    content="{{ $page->getDate()->toDateString() }}"
                                    datetime="{{ $page->getDate()->toDateString() }}"
                                >
                                    {{ $page->getDate()->format('l, jS F Y') }}
                                </time>
                            </dd>
                        </div>
                    </dl>
                    <div>
                        <h1 itemprop="name" class="text-3xl leading-9 font-extrabold tracking-wider sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">
                            {{ $page->title }}
                        </h1>
                    </div>
                </div>
            </header>

        <div class="divide-y xl:divide-y-0 divide-gray-200 xl:grid xl:grid-cols-4 xl:col-gap-6 pb-16 xl:pb-20" style="grid-template-rows: auto 1fr;">
            <dl class="pt-6 pb-10 xl:pt-11 xl:border-b xl:border-gray-200">
                <dt class="sr-only">Authors</dt>
                <dd>
                    <ul class="flex justify-center xl:block space-x-8 sm:space-x-12 xl:space-x-0 xl:space-y-8">
                        <li class="flex items-center space-x-2">
                            <x-avatar
                                class="w-10 h-10"
                            />
                            <dl class="text-sm font-medium leading-5 whitespace-no-wrap">
                                <dt class="sr-only">Name</dt>
                                <dd itemprop="publisher">Steve McDougall</dd>
                                <dt class="sr-only">Twitter</dt>
                                <dd>
                                    <x-link
                                        href="https://twitter.com/JustSteveKing"
                                        target="__blank"
                                        rel="noopener nofollow"
                                        title="Follow Steve on twitter"
                                    >
                                        @JustSteveKing
                                    </x-link>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </dd>
            </dl>
            <div class="divide-y divide-gray-200 xl:pb-0 xl:col-span-3 xl:row-span-2">
                <div class="prose prose-indigo prose-lg text-gray-800 dark:text-gray-50 pt-10 pb-8 px-3">
                    <img
                        itemprop="image"
                        src="{{ $page->social_image }}"
                        alt="{{ $page->title }}"
                        class="rounded shadow-md"
                    />
                    <div itemprop="articleBody">
                        @yield('content')
                    </div>
                </div>
            </div>
            <footer class="text-sm font-medium leading-5 divide-y divide-gray-200 xl:col-start-1 xl:row-start-2">
                <div class="space-y-8 py-8">
                    <div>
                        <h2 class="text-xs tracking-wide uppercase">
                            Tags
                        </h2>
                        <div class="space-x-2 flex flex-wrap">
                            @forelse ($page->tags as $tag)
                                <x-tag-link
                                    href="{{ '/blog/tags/' . $tag }}"
                                    title="View articles in {{ $tag }}"
                                    itemscope
                                    itemtype="https://schema.org/DefinedTerm"
                                    itemprop="name"
                                >
                                    {{ $tag }}
                                </x-tag-link>
                            @empty
                                <span>No tags</span>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="space-y-8 py-8">
                    <div>
                        <h2 class="text-xs tracking-wide uppercase">
                            Reading Time
                        </h2>
                        <div class="space-x-2 flex flex-wrap">
                            <p>{{ $page->readingTime }} min read</p>
                        </div>
                    </div>
                </div>
                <div class="pt-8">
                    <a class="text-teal-500 hover:text-teal-600" href="/">
                        ← Back to the blog
                    </a>
                </div>
            </footer>
        </div>
        </article>
    </main>
@endsection
