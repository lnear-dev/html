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
 * Pure/Static class for generating HTML elements
 */
class Renderer
{
    private function __construct() {}

    /**
     * Generate HTML dataset attributes
     * <code>
     * <?php
     * echo dataset(key: 'value', anotherKey: 'another-value');
     * // Output: data-key='value' data-another-key='another-value'
     * </code>
     */
    public static function dataset(
        string ...$attributes,
    ): string {
        $attrs = '';
        foreach ($attributes as $dataKey => $dataValue) {
            $dataKey = htmlspecialchars(
                preg_replace_callback(
                    '/[A-Z]/',
                    fn($match) => '-' . strtolower($match[0]),
                    $dataKey,
                ),
            );
            $attrs .= " data-{$dataKey}='{$dataValue}'";
        }

        return $attrs;
    }



    /**
     * Generate HTML attributes
     * <code>
     * <?php
     * echo attr(class: 'btn', id: 'submit', type: 'submit');
     * // Output: class="btn" id="submit" type="submit"
     * </code>
     */
    public static function attributes(string ...$attributes): string
    {
        $attrs = '';
        foreach ($attributes as $key => $value) {
            $key = htmlspecialchars(
                preg_replace_callback(
                    '/[A-Z]/',
                    fn($match) => '-' . strtolower($match[0]),
                    $key,
                ),
            );
            if (is_array($value)) {
                $value = implode(' ', $value);
            }

            if( $value === true )
            {
                $attrs .= " {$key}='{$value}'";
            }
            else if ( $value !== false )
            {
                $value = htmlspecialchars($value);
                $attrs .= " {$key}='{$value}'";
            }
        }

        return $attrs;
    }


    /**
     * Generate self-closing(void) HTML element
     * <code>
     * <?php
     * echo Renderer::void('img', src: 'image.jpg', alt: 'Image');
     * // Output: <img src="image.jpg" alt="Image" />
     * </code>
     */
    public static function void(string $tag, string ...$attributes): RenderResult
    {
        $attrs = static::attributes(...$attributes);
        return RenderResult::encoded("<{$tag}{$attrs}/>");
    }


    /**
     * Generate HTML element
     * <code>
     * <?php
     * echo element('button', 'Submit', class: 'btn', id: 'submit', type: 'submit');
     * // Output: <button class="btn" id="submit" type="submit">Submit</button>
     * </code>
     */
    public static function element(string $tag, string|RenderResult|array $body, string ...$attributes): RenderResult
    {
        $attrs          = Renderer::attributes(...$attributes);
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
     * A shortcut to bypass the encoding of the content
     * <code>
     * <?php
     * echo Renderer::bypass('Hello', '<World>');
     * // Output: Hello<World>
     * </code>
     */
    public static function bypass(string|RenderResult ...$content): RenderResult
    {
        return RenderResult::encoded(...$content);
    }

}
