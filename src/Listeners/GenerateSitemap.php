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
            key: 'baseUrl',
        );

        if (! $baseUrl) {
            throw new RuntimeException(
                message: "To generate a sitemap.xml file, please specify a 'baseUrl' in config.php."
            );
        }

        $sitemap = new Sitemap(
            filePath: $jigsaw->getDestinationPath() . '/sitemap.xml',
        );

        collect($jigsaw->getOutputPaths())
        ->reject(fn (string$path): bool => $this->isExcluded(path: $path))
        ->each(function (string $path) use ($baseUrl, $sitemap) {
            $sitemap->addItem(
                location: rtrim($baseUrl, '/') . $path,
                lastModified: time(),
                changeFrequency: Sitemap::DAILY,
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
