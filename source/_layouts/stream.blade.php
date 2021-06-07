@extends('_layouts.main')

@php
    $page->type = 'article';  
@endphp

@section('body')
    <section itemscope itemtype="https://schema.org/Article">
        <article class="xl:divide-y xl:divide-gray-200">
            <header class="pt-6 xl:pb-10">
                <div class="space-y-2 text-left">
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
                        <ul class="flex items-center justify-start xl:block space-x-8 sm:space-x-12 xl:space-x-0 xl:space-y-8">
                            <li class="flex items-center space-x-2">
                                <x-avatar
                                    class="h-12 w-12 md:h-14 md:w-14 lg:h-16 lg:w-16"
                                />
                                <dl class="text-md tracking-wide font-medium leading-5 whitespace-no-wrap">
                                    <dt class="sr-only">Name</dt>
                                    <dd itemprop="publisher" class="text-lg tracking-wide">Steve McDougall</dd>
                                    <dt class="sr-only">Twitter</dt>
                                    <dd>
                                        <a
                                            href="https://twitter.com/JustSteveKing"
                                            target="__blank"
                                            rel="noopener nofollow"
                                            title="Follow Steve on twitter"
                                            class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600"
                                        >
                                            @JustSteveKing
                                        </a>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </dd>
                </dl>

                <div class="xl:pb-0 xl:col-span-3 xl:row-span-2">

                    <div class="max-w-full prose prose-indigo prose-lg text-gray-800 dark:text-gray-50 pb-8 px-3">
                        <div itemprop="articleBody" class="mt-16 whitespace-normal">
                            @yield('content')
                        </div>
                    </div>
                </div>

                <footer class="text-sm font-medium leading-5 divide-y divide-gray-200 xl:col-start-1 xl:row-start-2">
                    <div class="space-y-8 py-8">
                        <div class="space-y-2">
                            <h3 class="text-md tracking-wide uppercase">
                                View on YouTube
                            </h3>
                            <div class="space-x-2 flex flex-wrap">
                                <a
                                    target="__blank"
                                    rel="noopener nofollow"
                                    title="Watch &quot;{{ $page->title }}&quot; on YouTube"
                                    class="flex items-center space-x-2 text-md font-semibold text-transparent"
                                    href="{{ $page->link }}"
                                    onclick="window.fathom.trackGoal('WD3SMHUZ', 0);"
                                >
                                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                    <span class="bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600">YouTube</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pt-8">
                        <a class="text-md font-semibold text-transparent bg-clip-text bg-gradient-to-tr from-indigo-500 to-pink-600" href="/youtube">
                            ← Back to streams
                        </a>
                    </div>
                </footer>
            </div>
        </article>
    </section>
@endsection
