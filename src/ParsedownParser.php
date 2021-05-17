<?php

declare(strict_types=1);

namespace App;

use Mni\FrontYAML\Markdown\MarkdownParser;


class ParsedownParser extends MarkdownParser
{
    public function __construct()
    {
        $this->parser = new Parsedown();
    }

    public function parse($markdown)
    {
        return $this->parser->text($markdown);
    }
}
