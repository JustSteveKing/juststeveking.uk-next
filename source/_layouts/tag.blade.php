@extends('_layouts.main')

@php
    $page->type = 'article';    
@endphp

@section('body')
    <div class="divide-y divide-gray-200 px-3">
        <x-page-heading
            heading="Tag: {{ $page->title }}"
            sub-heading="{{ $page->description }}"
        />
        <ul class="divide-y divide-gray-200">
            @foreach ($page->articles($articles) as $article)
                <x-articles.card
                    :article="$article"
                />
            @endforeach
        </ul>

    </div>
@endsection
