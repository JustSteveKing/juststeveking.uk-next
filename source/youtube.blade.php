---
title: Latest YouTube Videos from JustSteveKing
description: Check out the latest videos I have uploaded to YouTube.
pagination:
    collection: streams
    perPage: 500
---

@extends('_layouts.main')

@section('body')
    <div class="divide-y divide-gray-200 px-3">
        <x-page-heading
            heading="Latest YouTube Videos"
            sub-heading="I stream twice a week, where possible, check out some of my latest streams."
        />
        <ul class="divide-y divide-gray-200">
            @foreach ($pagination->items as $stream)
                <x-streams.card
                    :stream="$stream"
                />
            @endforeach
        </ul>

    </div>
@endsection