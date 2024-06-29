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


describe('Renderer', function () {
    it('should generate HTML attributes', function () {
        expect(Renderer::attributes(class: 'btn', id: 'submit', type: 'submit'))
            ->toBe(" class='btn' id='submit' type='submit'");
    });

    it('should generate HTML element', function () {
        expect(Renderer::element('button', 'Submit', class: 'btn', id: 'submit', type: 'submit')->collect())
            ->toBe("<button class='btn' id='submit' type='submit'>Submit</button>");
    });
    it('should generate HTML from array', function () {
        expect(Renderer::element('button', [
            'Submit',
            RenderResult::wrap(' with ', 'Array'),
        ], class: 'btn', id: 'submit', type: 'submit')->collect())
            ->toBe("<button class='btn' id='submit' type='submit'>Submit with Array</button>");
    });

    it('should generate self-closing HTML element', function () {
        expect(Renderer::void('img', src: 'image.jpg', alt: 'Image')->collect())
            ->toBe("<img src='image.jpg' alt='Image'/>");
    });

    test('bypass method', function () {
        expect(bypass('Hello', '<World>')->collect())->toEqual('Hello<World>');
    });
});