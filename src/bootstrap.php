<?php

function attr(string ...$attributes): string
{
    $attrs = '';
    foreach ($attributes as $key => $value) {
        $attrs .= " {$key}=\"{$value}\"";
    }
    return $attrs;
}
function element(string $tag, string $content, string ...$attributes): string
{
    $attrs = attr(...$attributes);
    return "<{$tag}{$attrs}>{$content}</{$tag}>";
}

function selfClosingElement(string $tag, string ...$attributes): string
{
    $attrs = attr(...$attributes);
    return "<{$tag}{$attrs} />";
}
