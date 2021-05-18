<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{ $page->title }}</title>

        <script type="module">
            document.documentElement.classList.remove('no-js');
            document.documentElement.classList.add('js');
        </script>

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <meta name="description" content="{{ $page->description }}">

        <meta property="og:title" content="{{ $page->title }}">
        <meta property="og:description" content="{{ $page->description }}">
        <meta property="og:image" content="{{ $page->social_image }}">
        <meta property="og:image:alt" content="{{ $page->social_image_alt }}">
        <meta property="og:locale" content="en_GB">
        <meta property="og:type" content="{{ $page->type ?? 'website' }}">
        <meta proporty="og:url" content="{{ $page->getUrl() }}">

        <meta name="twitter:widgets:new-embed-design" content="on">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page->title }}">
        <meta name="twitter:description" content="{{ $page->description }}">
        <meta name="twitter:site" content="{{ $page->twitter }}">
        <meta name="twitter:creator" content="{{ $page->twitter }}">
        <meta name="twitter:image" content="{{ $page->social_image }}">
        <meta name="twitter:image:alt" content="{{ $page->social_image_alt }}">

        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link rel="alternate" type="application/rss+xml" title="{{ $page->siteName }}" href="{{ $page->baseUrl.'/feed.xml' }}" />

        <link rel="icon" href="/assets/favicon.ico">
        <link rel="icon" href="/assets/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/assets/favicon.png">
        <link rel="manifest" href="/assets/site.webmanifest">
        <meta name="theme-color" content="#ffffff">
        
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
        
        <script type="application/ld+json">
        {
            "@content": "https://schema.org/",
            "@type": "Person",
            "name": "Steve McDougall",
            "url": "https://www.juststeveking.uk/",
            "image": "https://www.juststeveking.uk/images/avatar.png",
            "sameAs": [
                "https://github.com/JustSteveKing",
                "https://twitter.com/JustSteveKing",
                "https://www.linkedin.com/in/steve-mcdougall/"
            ],
            "jobTitle": "Technical Lead",
            "worksFor": {
                "@type": "Organization",
                "name": "Squarefoot Capital Limited",
                "url": "https://sqft.capital",
                "foundingDate": "2019-10-10",
                "sameAs": [
                    "https://www.linkedin.com/company/squarefootcapital/"
                ],
                "description": "sqft.capital is a platform solely for UK property developers to model deals and raise funding, quickly and consistently." 
            }
        }
        </script>

        @if ($page->production)
            <!-- Fathom - beautiful, simple website analytics -->
            <script
                src="https://cdn.usefathom.com/script.js"
                data-site="SGJKEWOR"
                defer
            ></script>
            <!-- / Fathom -->
        @endif
    </head>
    <body class="antialiased bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-50">
        <x-navigation
            :page="$page"
        />
        
        @yield('body')
        
        <x-footer
            :page="$page"
        />
    </body>
</html>
