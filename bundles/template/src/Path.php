<?php

namespace Bundles\TemplateBundle;

enum Path: string
{
    case ROOT = __DIR__ . '/../';
    case CONFIG = self::ROOT->value . 'Resources/config/';
    case PUBLIC = self::ROOT->value . 'Resources/public/';

    function getPath(string $path): string
    {
        return $this->value . ltrim($path, '/');
    }
}
