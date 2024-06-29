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

describe('html', function () {
    foreach (kTestData as $data) {
        $tag             = $data['tag'];
        $attributes      = $data['attributes'] ?? [];
        $selfClosing     = $data['selfClosing'] ?? false;
        $attributeString = join(', ', $data['attributes'] ?? []);
        $attributeString = $attributeString ? " : [$attributeString]" : '';
        $fn              = ($tag === 'var') ? "\\html\\variable" : "\\html\\{$tag}";
        $attributesMap   = [];
        foreach ($attributes as $value) {
            $key                 = lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $value))));
            $attributesMap[$key] = $value;
        }
        test("`{$tag}` should generate with `{$attributeString}`", function () use ($tag, $attributes, $selfClosing, $fn, $attributesMap) {
            if ($selfClosing) {
                expect($fn(...$attributesMap)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributesMap) . "/>");
            } else {
                expect($fn('Body', ...$attributesMap)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributesMap) . ">Body</{$tag}>");
            }
        });
        test("`{$tag}` should work with custom attributes", function () use ($tag, $attributes, $selfClosing, $fn, $attributesMap) {
            $attributesMap['dataCustom'] = 'custom';
            if ($selfClosing) {
                expect($fn(...$attributesMap)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributesMap) . "/>");
            } else {
                expect($fn('Body', ...$attributesMap)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributesMap) . ">Body</{$tag}>");
            }
        });


    }

});

describe('html\\strict', function () {

    foreach (kTestData as $data) {
        $tag             = $data['tag'];
        $attributes      = $data['attributes'] ?? [];
        $selfClosing     = $data['selfClosing'] ?? false;
        $attributeString = join(', ', $data['attributes'] ?? []);
        $attributeString = $attributeString ? " : [$attributeString]" : '';
        $fn              = ($tag === 'var') ? "\\html\\strict\\variable" : "\\html\\strict\\{$tag}";
        $attributesMap   = [];
        foreach ($attributes as $value) {
            $key                 = lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $value))));
            $attributesMap[$key] = $value;
        }
        test("`{$tag}` should generate with `{$attributeString}`", function () use ($tag, $attributes, $selfClosing) {
            if ($selfClosing) {
                expect(Renderer::void($tag, ...$attributes)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributes) . "/>");
            } else {
                expect(Renderer::element($tag, 'Body', ...$attributes)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributes) . ">Body</{$tag}>");
            }
        });
        test("`{$tag}` should generate by calling it's function with `{$attributeString}`", function () use ($tag, $selfClosing, $fn, $attributesMap) {
            if ($selfClosing) {
                expect($fn(...$attributesMap)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributesMap) . "/>");
            } else {
                expect($fn('Body', ...$attributesMap)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributesMap) . ">Body</{$tag}>");
            }
        });

        test("`{$tag}` should throw with custom attributes", function () use ($selfClosing, $fn, $attributesMap) {
            $attributesMap['dataCustom'] = 'custom';
            expect(
                $selfClosing
                ? fn() => $fn(...$attributesMap)->collect()
                : fn() => $fn('Body', ...$attributesMap)->collect()
            )->toThrow("Unknown named parameter \$dataCustom");
        });

        test("`{$tag}` should allow data-* attributes via `dataset`", function () use ($tag, $selfClosing, $fn, $attributesMap) {
            $args            = $attributesMap;
            $args['dataset'] = ['custom' => 'custom'];
            if ($selfClosing) {
                expect($fn(...$args)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributesMap) . Renderer::dataset(...$args['dataset']) . "/>");
            } else {
                expect($fn('Body', ...$args)->collect())
                    ->toBe("<{$tag}" . Renderer::attributes(...$attributesMap) . Renderer::dataset(...$args['dataset']) . ">Body</{$tag}>");
            }
        });
    }
});