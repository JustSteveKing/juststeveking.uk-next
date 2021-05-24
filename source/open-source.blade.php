---
title: Open source packages I have made | juststeveking.uk
description: Check our my latest Open Source package from packagist.
pagination:
    collection: packages
    perPage: 500
---

@extends('_layouts.main')

@section('body')
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
@endsection