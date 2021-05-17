<?php

declare(strict_types=1);

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateReadingTime
{
    public function handle(Jigsaw $jigsaw): void
    {
        $jigsaw->getCollection('articles')->map(function ($article): void {
            $totalWords = str_word_count(strip_tags($article->getContent()));
            $minutesToRead = round($totalWords / 200);

            $article->readingTime = (int) max(1, $minutesToRead);
        });
    }
}
