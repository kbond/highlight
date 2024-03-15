<?php

declare(strict_types=1);

namespace Tempest\Highlight\Injections;

use Tempest\Highlight\Highlighter;
use Tempest\Highlight\Injection;

final readonly class PhpShortEchoInjection implements Injection
{
    use IsInjection;

    public function getPattern(): string
    {
        return '/&lt;\?=\s(?<match>.*)\s\?&gt;/';
    }

    public function parseContent(string $content, Highlighter $highlighter): string
    {
        return $highlighter->parse($content, 'php');
    }
}