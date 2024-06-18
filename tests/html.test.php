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

const kJSONInFile = __DIR__ . '/../src/elements.json';
define('kTestData', (function () {
    $data = json_decode(file_get_contents(kJSONInFile), true);
    usort($data, fn($a, $b) => count($a['attributes'] ?? []) <=> count($b['attributes'] ?? []));
    return $data;
})());


describe('html', function () {
    it('should generate HTML attributes', function () {
        expect(attr(class: 'btn', id: 'submit', type: 'submit'))
            ->toBe(" class='btn' id='submit' type='submit'");
    });

    it('should generate HTML element', function () {
        expect(element('button', 'Submit', class: 'btn', id: 'submit', type: 'submit'))
            ->toBe("<button class='btn' id='submit' type='submit'>Submit</button>");
    });

    it('should generate self-closing HTML element', function () {
        expect(selfClosingElement('img', src: 'image.jpg', alt: 'Image'))
            ->toBe("<img src='image.jpg' alt='Image'/>");
    });

    foreach (kTestData as $data) {
        $tag             = $data['tag'];
        $attributes      = $data['attributes'] ?? [];
        $selfClosing     = $data['selfClosing'] ?? false;
        $attributeString = join(', ', $data['attributes'] ?? []);
        $attributeString = $attributeString ? " : [$attributeString]" : '';
        it("should generate " . $tag . $attributeString, function () use ($tag, $attributes, $selfClosing) {
            if ($selfClosing) {
                expect(selfClosingElement($tag, ...$attributes))
                    ->toBe("<{$tag}" . attr(...$attributes) . "/>");
            } else {
                expect(element($tag, 'Body', ...$attributes))
                    ->toBe("<{$tag}" . attr(...$attributes) . ">Body</{$tag}>");
            }
        });
        it("should generate " . $tag . " by calling it's function" . $attributeString, function () use ($tag, $attributes, $selfClosing) {
            $fn            = ($tag === 'var') ? "\\html\\variable" : "\\html\\{$tag}";
            $attributesMap = [];
            foreach ($attributes as $value) {
                $key                 = lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $value))));
                $attributesMap[$key] = $value;
            }
            if ($selfClosing) {
                expect($fn(...$attributesMap))
                    ->toBe("<{$tag}" . attr(...$attributesMap) . "/>");
            } else {
                expect($fn('Body', ...$attributesMap))
                    ->toBe("<{$tag}" . attr(...$attributesMap) . ">Body</{$tag}>");
            }
        });
    }
});