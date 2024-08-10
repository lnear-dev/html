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
        $attributeString = \join(', ', $data['attributes'] ?? []);
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
        $attributeString = \join(', ', $data['attributes'] ?? []);
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


describe('styleMap', function () {
    it('should return a string of CSS styles', function () {
        $styles = styleMap(fontFamily: 'Arial', fontSize: '12px', CustomColor: '#000000');
        expect($styles)->toBe('font-family: Arial; font-size: 12px; --custom-color: #000000;');
    });

    it('should return a string of CSS styles', function () {
        $styles = styleMap(font_family: 'Arial', font_size: '12px', CustomColor: '#000000');
        expect($styles)->toBe('font-family: Arial; font-size: 12px; --custom-color: #000000;');
    });

    it('should return a string of CSS styles', function () {
        $styles = styleMap(...['fontFamily' => 'Arial', 'fontSize' => '12px', 'CustomColor' => '#000000']);
        expect($styles)->toBe('font-family: Arial; font-size: 12px; --custom-color: #000000;');
    });

    it('should return a string of CSS styles', function () {
        $styles = styleMap(fontFamily: 'Arial', fontSize: '12px', CustomColor: '#000000', backgroundColor: 'red');
        expect($styles)->toBe('font-family: Arial; font-size: 12px; --custom-color: #000000; background-color: red;');
    });

});

describe('classMap', function () {
    it('should return a string of CSS classes', function () {
        $classes = classMap(class1: true, class2: false, class3: fn() => true);
        expect($classes)->toBe('class1 class3');
    });

    it('should return a string of CSS classes', function () {
        $classes = classMap(class1: true, class2: false, class3: true);
        expect($classes)->toBe('class1 class3');
    });

    it('should return a string of CSS classes', function () {
        $classes = classMap(class1: true, class2: false, class3: false);
        expect($classes)->toBe('class1');
    });

    it('should return a string of CSS classes', function () {
        $classes = classMap(...['syntax-not-allowed-as-a-named-parameter' => true, 'class2' => false, 'class3' => true]);
        expect($classes)->toBe('syntax-not-allowed-as-a-named-parameter class3');
    });

});

describe('when', function () {
    it('should return the result of the true case', function () {
        $result = when(true, fn() => 'True', fn() => 'False');
        expect($result)->toBe('True');
    });

    it('should return the result of the false case', function () {
        $result = when(false, fn() => 'True', fn() => 'False');
        expect($result)->toBe('False');
    });

    it('should return null', function () {
        $result = when(false, fn() => 'True');
        expect($result)->toBeNull();
    });

});

describe('choose', function () {
    it('should return the result of the first case', function () {
        $result = choose('case1', [['case1', fn() => 'Result1'], ['case2', fn() => 'Result2']]);
        expect($result)->toBe('Result1');
    });

    it('should return the result of the second case', function () {
        $result = choose('case2', [['case1', fn() => 'Result1'], ['case2', fn() => 'Result2']]);
        expect($result)->toBe('Result2');
    });

    it('should return the result of the default case', function () {
        $result = choose('case3', [['case1', fn() => 'Result1'], ['case2', fn() => 'Result2']], fn() => 'Default');
        expect($result)->toBe('Default');
    });

});

describe('join', function () {
    it('should return an iterable with the joiner', function () {
        $items = join(['item1', 'item2', 'item3'], ',');
        expect(iterator_to_array($items))->toBe(['item1', ',', 'item2', ',', 'item3', ',']);
    });

    it('should return an iterable with the joiner', function () {
        $items = join(['item1', 'item2', 'item3'], fn($index) => $index);
        expect(iterator_to_array($items))->toBe(['item1', 0, 'item2', 1, 'item3', 2]);
    });

    it('should return an iterable with the joiner', function () {
        $items = join(['item1', 'item2', 'item3'], fn($index) => $index + 1);
        expect(iterator_to_array($items))->toBe(['item1', 1, 'item2', 2, 'item3', 3]);
    });

});