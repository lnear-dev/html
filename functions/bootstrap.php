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

/**
 * Generate HTML attributes
 * <code>
 * <?php
 * echo attr(class: 'btn', id: 'submit', type: 'submit');
 * // Output: class="btn" id="submit" type="submit"
 * </code>
 */
function attr(string ...$attributes): string
{
    $attrs = '';
    foreach ($attributes as $key => $value) {
        $key   = htmlspecialchars(
            preg_replace_callback(
                '/[A-Z]/',
                fn($match) => '-' . strtolower($match[0]),
                $key,
            ),
        );
        $value = htmlspecialchars($value);
        $attrs .= " {$key}='{$value}'";
    }

    return $attrs;
}

/**
 * Generate HTML element
 * <code>
 * <?php
 * echo element('button', 'Submit', class: 'btn', id: 'submit', type: 'submit');
 * // Output: <button class="btn" id="submit" type="submit">Submit</button>
 * </code>
 */
function element(string $tag, string|RenderResult|array $body, string ...$attributes): RenderResult
{
    $attrs          = attr(...$attributes);
    $content        = is_array($body) ? $body : [$body];
    $escapedContent = [];
    foreach ($content as $chunk) {
        if (is_string($chunk)) {
            $escapedContent[] = htmlentities($chunk);
        } else {
            $escapedContent[] = $chunk;
        }
    }
    $escapedContent[] = "</{$tag}>";
    return RenderResult::encoded("<{$tag}{$attrs}>", ...$escapedContent);
}

/**
 * Generate self-closing HTML element
 * <code>
 * <?php
 * echo selfClosingElement('img', src: 'image.jpg', alt: 'Image');
 * // Output: <img src="image.jpg" alt="Image" />
 * </code>
 */
function selfClosingElement(string $tag, string ...$attributes): RenderResult
{
    $attrs = attr(...$attributes);

    return RenderResult::encoded("<{$tag}{$attrs}/>");
}
