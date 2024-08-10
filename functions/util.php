<?php
namespace html;

function styleMap(string ...$styles): string
{
    $styleMap = [];
    foreach ($styles as $key => $value) {
        $key        = preg_replace('/_/', '-', preg_replace('/([a-z])([A-Z])/', '$1-$2', $key));
        $styleMap[] = (preg_match('/^[A-Z]/', $key) ? '--' : '') . strtolower($key) . ": {$value}";
    }
    return implode('; ', $styleMap) . ';';
}

function classMap(bool|callable ...$predicates): string
{
    $classMap = [];
    foreach ($predicates as $class => $predicate) {
        if (is_callable($predicate) && $predicate()) {
            $classMap[] = $class;
        } elseif ($predicate) {
            $classMap[] = $class;
        }
    }
    return implode(' ', $classMap);
}
function when(bool $condition, callable $trueCase, ?callable $falseCase = null): mixed
{
    return $condition ? $trueCase() : ($falseCase ? $falseCase() : null);
}
function choose(mixed $value, array $cases, ?callable $defaultCase = null): mixed
{
    foreach ($cases as [$case, $result]) {
        if ($value === $case) {
            return $result();
        }
    }
    return $defaultCase ? $defaultCase() : null;
}
function join(iterable $items, mixed $joiner): iterable
{
    $index = 0;
    foreach ($items as $item) {
        yield $item;
        if (is_callable($joiner)) {
            yield $joiner($index);
        } else {
            yield $joiner;
        }
        $index++;
    }
}

