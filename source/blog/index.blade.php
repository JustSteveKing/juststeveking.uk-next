---
title: Latest Articles from JustSteveKing
description: Read the latest articles from JustSteveKing on anything from PHP and Laravel to open source and GoLang.
pagination:
    collection: articles
    perPage: 500
---

@extends('_layouts.main')

@section('body')
    <main class="max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="divide-y divide-gray-200">
            <x-page-heading
                heading="Latest Articles"
                sub-heading="I write articles semi-reguarly, feel free to subscribe to my RSS feed."
            />
            <ul class="divide-y divide-gray-200">
                @foreach ($pagination->items as $article)
                    <x-articles.card
                        :article="$article"
                    />
                @endforeach
            </ul>
            
            {{-- <x-pagination
                :pagination="$pagination"
                :page="$page"
            /> --}}

        </div>
    </main>
@endsection