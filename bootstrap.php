<?php

use App\ParsedownParser;
use TightenCo\Jigsaw\Jigsaw;
use App\Listeners\GenerateFeed;
use App\Listeners\GenerateIndex;
use App\Listeners\GenerateSitemap;
use App\Listeners\GenerateReadingTime;
use Mni\FrontYAML\Markdown\MarkdownParser;

// Generate reading time per article
$events->afterCollections(GenerateReadingTime::class);

// Generate search Index for later use
$events->afterBuild(GenerateIndex::class);

// Generate a sitemap
$events->afterBuild(GenerateSitemap::class);

// Generate RSS Feed
$events->afterBuild(GenerateFeed::class);

$container->bind(MarkdownParser::class, ParsedownParser::class);
