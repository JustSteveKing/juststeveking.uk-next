<?php

declare(strict_types=1);

namespace App\Listeners;

use RuntimeException;
use Illuminate\Support\Str;
use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;

class GenerateSitemap
{
    protected array $exclude = [
        '/assets/*',
        '*/404*',
        '*/favicon.ico',
    ];

    public function handle(Jigsaw $jigsaw): void
    {
        $baseUrl = $jigsaw->getConfig(
            'baseUrl',
        );

        if (! $baseUrl) {
            throw new RuntimeException(
                "To generate a sitemap.xml file, please specify a 'baseUrl' in config.php."
            );
        }

        $sitemap = new Sitemap(
            $jigsaw->getDestinationPath() . '/sitemap.xml',
        );

        collect($jigsaw->getOutputPaths())
        ->reject(fn ($path) => $this->isExcluded(path: $path))
        ->each(function (string $path) use ($baseUrl, $sitemap) {
            $sitemap->addItem(
                rtrim($baseUrl, '/') . $path,
                time(),
                Sitemap::DAILY,
            );
        });

        $sitemap->write();
    }

    public function isExcluded(string $path): bool
    {
        return Str::is(
            pattern: $this->exclude,
            value: $path,
        );
    }
}
