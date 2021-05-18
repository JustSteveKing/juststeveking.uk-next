<?php

use App\Listeners\GenerateFeed;
use TightenCo\Jigsaw\Jigsaw;
use App\Listeners\GenerateIndex;
use App\Listeners\GenerateSitemap;
use App\Listeners\GenerateReadingTime;

// Generate reading time per article
$events->afterCollections(GenerateReadingTime::class);

// Generate search Index for later use
$events->afterBuild(GenerateIndex::class);

// Generate a sitemap
$events->afterBuild(GenerateSitemap::class);

// Generate RSS Feed
$events->afterBuild(GenerateFeed::class);
