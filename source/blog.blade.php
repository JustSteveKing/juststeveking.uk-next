---
title: Latest Articles from JustSteveKing
description: Read the latest articles from JustSteveKing on anything from PHP and Laravel to open source and GoLang.
pagination:
    collection: articles
    perPage: 500
---

@extends('_layouts.main')

@section('body')
    <div class="divide-y divide-gray-200 px-3">
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

    </div>
@endsection