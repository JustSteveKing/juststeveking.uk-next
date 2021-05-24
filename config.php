<?php

use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Spatie\Packagist\PackagistClient;
use Spatie\Packagist\PackagistUrlGenerator;

return [
    'production' => false,
    'baseUrl' => 'https://www.juststeveking.uk/',
    'title' => 'JustSteveKing',
    'type' => 'website',
    'twitter' => '@JustSteveKing',
    'description' => 'Steve is an experienced CTO with scaling products and development teams. He is a massive advocate for the PHP language, community organiser, open source enthusiast and conference organiser.',
    'social_image' => '/assets/images/juststeveking-card.png',
    'social_image_alt' => 'JustSteveKing - Consultant CTO, Freelance Software Engineer, Community Advocate',
    'collections' => [
        'articles' => [
            'author' => 'Steve McDougall',
            'sort' => '-date',
            'path' => '/{filename}'
        ],
        'tags' => [
            'path' => '/blog/tags/{filename}',
            'articles' => function ($page, $allArticles) {
                return $allArticles->filter(function ($article) use ($page) {
                    return $article->tags
                        ? in_array($page->getFilename(), $article->tags, true)
                        : false;
                });
            },
        ],
        'packages' => [
            'sort' => '-time',
            'items' => function () {
                $packagist = new PackagistClient(
                    new Client(),
                    new PackagistUrlGenerator(),
                );

                $packages = $packagist->getPackagesNamesByVendor(
                    'juststeveking',
                );

                return collect($packages['packageNames'])->map(function ($package) use($packagist) {
                    
                    $repo = $packagist->getPackage($package);
                    $package = $repo['package'];

                    if (! isset($package['abandoned']) || $package['abandoned'] !== true) {
                        return [
                            'title' => $package['name'],
                            'description' => $package['description'],
                            'time' => Carbon::parse($package['time']),
                            'maintainers' => collect($package['maintainers'])->first(),
                            'versions' => $package['versions'],
                        ];
                    }

                    return;
                });
            },
        ]
    ],
    'selected' => fn($page, $section): bool => Str::contains($page->getPath(), $section) ? true : false,
    'getExcerpt' => function ($page, int $length = 255): string {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'getDate' => fn($page) => Carbon::parse($page->date),
    'getPublished' => fn($page) => Carbon::parse($page->time),
    'readingTime' => function ($page): int {
        // dd($page);
        $totalWords = str_word_count(implode(" ", $page->getContent()));
        $minutesToRead = round($totalWords / 200);

        return (int) max(1, $minutesToRead);
    },
    'navigation' => [
        [
            'link' => '/uses',
            'text' => 'Uses',
            'title' => 'Technology I use',
        ],
        [
            'link' => '/blog',
            'text' => 'Articles',
            'title' => 'Recent Articles',
        ],
        // [
        //     'link' => '/projects',
        //     'text' => 'Projects',
        //     'title' => 'Projects I am working on',
        // ],
        [
            'link' => '/open-source',
            'text' => 'Packages',
            'title' => 'Open Source packages I have made',
        ],
    ],
    'footerNavigation' => [
        [
            'link' => '/blog',
            'text' => 'Articles',
            'title' => 'Recent Articles',
        ],
        [
            'link' => '/open-source',
            'text' => 'Packages',
            'title' => 'Open Source packages I have made',
        ],
        [
            'link' => '/uses',
            'text' => 'Uses',
            'title' => 'Technology I use',
        ],
        // [
        //     'link' => '/projects',
        //     'text' => 'Projects',
        //     'title' => 'Projects I am working on',
        // ],
        [
            'link' => '/feed.xml',
            'text' => 'Feed',
            'title' => 'Subscribe to my RSS feed',
        ],
    ]
];
