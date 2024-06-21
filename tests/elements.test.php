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


describe('common', function () {
    it('should generate HTML attributes', function () {
        expect(attr(class: 'btn', id: 'submit', type: 'submit'))
            ->toBe(" class='btn' id='submit' type='submit'");
    });

    it('should generate HTML element', function () {
        expect(element('button', 'Submit', class: 'btn', id: 'submit', type: 'submit')->collect())
            ->toBe("<button class='btn' id='submit' type='submit'>Submit</button>");
    });
    it('should generate HTML from array', function () {
        expect(element('button', [
            'Submit',
            RenderResult::wrap(' with ', 'Array'),
        ], class: 'btn', id: 'submit', type: 'submit')->collect())
            ->toBe("<button class='btn' id='submit' type='submit'>Submit with Array</button>");
    });

    it('should generate self-closing HTML element', function () {
        expect(selfClosingElement('img', src: 'image.jpg', alt: 'Image')->collect())
            ->toBe("<img src='image.jpg' alt='Image'/>");
    });
});

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
        test("{$tag} should generate by calling it's function" . $attributeString, function () use ($tag, $attributes, $selfClosing, $fn, $attributesMap) {
            if ($selfClosing) {
                expect($fn(...$attributesMap)->collect())
                    ->toBe("<{$tag}" . attr(...$attributesMap) . "/>");
            } else {
                expect($fn('Body', ...$attributesMap)->collect())
                    ->toBe("<{$tag}" . attr(...$attributesMap) . ">Body</{$tag}>");
            }
        });
        test("{$tag} should work with custom attributes", function () use ($tag, $attributes, $selfClosing, $fn, $attributesMap) {
            $attributesMap['dataCustom'] = 'custom';
            if ($selfClosing) {
                expect($fn(...$attributesMap)->collect())
                    ->toBe("<{$tag}" . attr(...$attributesMap) . "/>");
            } else {
                expect($fn('Body', ...$attributesMap)->collect())
                    ->toBe("<{$tag}" . attr(...$attributesMap) . ">Body</{$tag}>");
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
        it("should generate " . $tag . $attributeString, function () use ($tag, $attributes, $selfClosing) {
            if ($selfClosing) {
                expect(selfClosingElement($tag, ...$attributes)->collect())
                    ->toBe("<{$tag}" . attr(...$attributes) . "/>");
            } else {
                expect(element($tag, 'Body', ...$attributes)->collect())
                    ->toBe("<{$tag}" . attr(...$attributes) . ">Body</{$tag}>");
            }
        });
        $fn            = ($tag === 'var') ? "\\html\\strict\\variable" : "\\html\\strict\\{$tag}";
        $attributesMap = [];
        foreach ($attributes as $value) {
            $key                 = lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $value))));
            $attributesMap[$key] = $value;
        }
        test("{$tag} should generate by calling it's function" . $attributeString, function () use ($tag, $selfClosing, $fn, $attributesMap) {
            if ($selfClosing) {
                expect($fn(...$attributesMap)->collect())
                    ->toBe("<{$tag}" . attr(...$attributesMap) . "/>");
            } else {
                expect($fn('Body', ...$attributesMap)->collect())
                    ->toBe("<{$tag}" . attr(...$attributesMap) . ">Body</{$tag}>");
            }
        });

        test("{$tag} should throw with custom attributes", function () use ($tag, $selfClosing, $fn, $attributesMap) {
            $attributesMap['dataCustom'] = 'custom';
            expect(
                $selfClosing
                ? fn() => $fn(...$attributesMap)->collect()
                : fn() => $fn('Body', ...$attributesMap)->collect()
            )->toThrow("Unknown named parameter \$dataCustom");
        });
    }
});