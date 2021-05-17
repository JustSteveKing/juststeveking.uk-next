---
title: Open source packages I have made | juststeveking.uk
description: Check our my latest Open Source package from packagist.
pagination:
    collection: packages
    perPage: 500
---

@extends('_layouts.main')

@section('body')
    <main class="max-w-3xl mx-auto px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="divide-y divide-gray-200">
            <x-page-heading
                heading="Open Source Packages"
                sub-heading="I published Open Source packages and library semi-reguarly, feel free to explore them below"
            />
            <ul class="divide-y divide-gray-200">
                @foreach ($pagination->items as $package)
                    <x-packages.card
                        :package="$package"
                    />
                @endforeach
            </ul>
        </div>
    </main>
@endsection