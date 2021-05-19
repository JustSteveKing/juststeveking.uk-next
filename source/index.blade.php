---
title: JustSteveKing - Consultant CTO, Software Engineer, Community Advocate | juststeveking.uk
---

@extends('_layouts.main')

@section('body')
    <main class="container mx-auto py-12">
        <section class="flex items-center justify-center space-x-6 md:space-x-12 px-4">
            <x-avatar
                class="h-24 w-24"
            />
            <h1 class="text-5xl font-bold">
                Steve McDougall
            </h1>
        </section>
        <section class="flex items-center justify-center space-x-6 px-4">
            <article class="py-12">
                <div class="max-w-3xl leading-7 text-md space-y-3 text-gray-800 dark:text-gray-50">
                    <p>👋 Hey there, I'm Steve, but you may know me better as 
                        <a
                            href="https://twitter.com/JustSteveKing"
                            target="_blank"
                            onclick="window.fathom.trackGoal('CZEGD7I0', 0);"
                            rel="noopener nofollow"
                            class="font-semibold hover:underline text-gray-800 dark:text-gray-50"
                        >
                            @JustSteveKing
                        </a>. I currently live in the Welsh Valleys, about 40 minutes outside of Cardiff.
                    </p>
                    <p>
                        I currently work as a Technical Lead at 
                        <a
                            href="https://sqft.capital"
                            target="_blank"
                            rel="noopener nofollow"
                            class="font-semibold hover:underline text-gray-800 dark:text-gray-50"
                        >
                            sqft.capital
                        </a> a property development finance company based in the UK, where I spend most of my time 
                        working on improving our platform aimed at property developers, and working on new features to find ways 
                        we can add extra value to our datasets. 
                    </p>
                    <p>
                        I also spend some time moonlighting as a consultant CTO, and freelance software engineer for various clients from around the world.
                        As a consultant CTO I have been involved in some major Digital Transformation projects, API consulting, open source consulting and advising companies on strategy.
                    </p>
                    <p>
                        When I am not writing code, or advising someone, I spend a lot of my spare time with my family, cooking, and contributing to open source and the community.
                    </p>
                </div>
            </article>
        </section>
    </main>
@endsection
