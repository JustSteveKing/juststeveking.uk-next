<?php

use TightenCo\Jigsaw\Jigsaw;
use App\Listeners\GenerateIndex;
use App\Listeners\GenerateSitemap;
use App\Listeners\GenerateReadingTime;

$events->afterBuild(GenerateIndex::class);
$events->afterBuild(GenerateSitemap::class);
$events->afterCollections(GenerateReadingTime::class);
