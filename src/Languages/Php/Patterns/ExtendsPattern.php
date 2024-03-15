<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Php\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenType;

final readonly class ExtendsPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return 'extends\s(?<match>.*)';
    }

    public function getTokenType(): TokenType
    {
        return TokenType::TYPE;
    }
}
