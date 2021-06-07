<?php

declare(strict_types=1);

namespace App\Listeners;

use Carbon\Carbon;
use RuntimeException;
use Suin\RSSWriter\Feed;
use Suin\RSSWriter\Item;
use Suin\RSSWriter\Channel;
use TightenCo\Jigsaw\Jigsaw;

class GenerateFeed
{
    public function handle(Jigsaw $jigsaw): void
    {
        $config = $jigsaw->getConfig();

        if (! $config['baseUrl']) {
            throw new RuntimeException(
                "To generate a rss.xml file, please specify a 'baseUrl' in config.php."
            );
        }

        $feed = new Feed();
        $channel = new Channel();

        $channel
            ->title($config['title'])
            ->description($config['description'])
            ->url($config['baseUrl'])
            ->feedUrl(rtrim($config['baseUrl'], '/') . '/feed.xml')
            ->language('en-GB')
            ->copyright('Copyright © '. $config['title'] . ' ' . (new \DateTime())->format('Y'))
            ->pubDate((new \DateTime())->getTimestamp())
            ->lastBuildDate((new \DateTime())->getTimestamp())
            ->appendTo($feed);

            $jigsaw->getCollection('articles')->each(function ($article) use ($channel, $config) {
                // Blog item
                $item = new Item();
                $item
                    ->title($article->title)
                    ->description($article->description)
                    ->contentEncoded($article->getContent())
                    ->url($article->getUrl())
                    ->author($article->author)
                    ->pubDate((new \DateTime('@'.$article->date))->getTimestamp())
                    ->guid($article->getUrl(), true)
                    ->preferCdata(true) // By this, title and description become CDATA wrapped HTML.
                    ->appendTo($channel);
            });

            $jigsaw->getCollection('packages')->each(function ($package) use ($channel, $config) {
                // Blog item
                $item = new Item();
                $item
                    ->title($package->title)
                    ->description($package->description)
                    ->url($package->getUrl())
                    ->author('JustSteveKing')
                    ->pubDate(Carbon::parse($package->time)->timestamp)
                    ->guid($package->getUrl(), true)
                    ->preferCdata(true) // By this, title and description become CDATA wrapped HTML.
                    ->appendTo($channel);
            });

            $jigsaw->getCollection('streams')->each(function ($stream) use ($channel, $config) {
                // Blog item
                $item = new Item();
                $item
                    ->title($stream->title)
                    ->description($stream->description)
                    ->contentEncoded($stream->getContent())
                    ->url($stream->getUrl())
                    ->author($stream->author)
                    ->pubDate((new \DateTime('@'.$stream->date))->getTimestamp())
                    ->guid($stream->getUrl(), true)
                    ->preferCdata(true) // By this, title and description become CDATA wrapped HTML.
                    ->appendTo($channel);
            });
    
            $jigsaw->writeOutputFile('feed.xml', $feed->render());
    }
}
