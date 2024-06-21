<?php
/**
 * This file is part lnear.dev.
 *
 * (c) 2024 Lanre Ajao(lnear)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * .........<-..(`-')_..(`-').._(`-').._....(`-').
 * ...<-.......\(.OO).).(.OO).-/(OO.).-/.<-.(OO.).
 * .,--..)..,--./.,--/.(,------./.,---...,------,)
 * .|..(`-')|...\.|..|..|...---'|.\./`.\.|.../`..'
 * .|..|OO.)|....'|..|)(|..'--..'-'|_.'.||..|_.'.|
 * (|..'__.||..|\....|..|...--'(|...-...||.......'
 * .|.....|'|..|.\...|..|..`---.|..|.|..||..|\..\.
 * .`-----'.`--'..`--'..`------'`--'.`--'`--'.'--'
 * @link     https://lnear.dev
 * @contact  hi@lnear.dev
 */
namespace html;

class RenderResult implements RenderResultInterface
{
    protected array $chunks;
    protected bool $isEncoded = false;

    public function __construct(
        string|RenderResult ...$chunks,
    ) {
        $this->chunks = $chunks;
    }

    public static function wrap(string|RenderResult ...$chunks): RenderResult
    {
        return new self(...$chunks);
    }
    public static function encoded(string|RenderResult ...$chunks): RenderResult
    {
        $result            = new self(...$chunks);
        $result->isEncoded = true;
        return $result;
    }

    public function append(string|RenderResult ...$chunks): void
    {
        $this->chunks = array_merge($this->chunks, $chunks);
    }

    /**
     * Returns an iterator over the chunks
     * @return \Traversable<RenderResult|string>
     */
    public function getIterator(): \Traversable
    {
        yield from $this->chunks;
    }

    /**
     * Joins a RenderResult into a string
     */
    public function collect(): string
    {
        $value = '';
        foreach ($this as $chunk) {
            if (is_string($chunk)) {
                $value .= $this->isEncoded ? $chunk : htmlentities($chunk);
            } else {
                $value .= $chunk->collect();
            }
        }
        return $value;
    }

    public function __toString(): string
    {
        return $this->collect();
    }
}
