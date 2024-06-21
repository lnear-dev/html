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
use html\RenderResult;

describe('RenderResult', function () {

    test('construct with strings', function () {
        $result = new RenderResult('Hello', 'World');
        expect($result->collect())->toEqual('HelloWorld');
    });

    test('construct with render results', function () {
        $innerResult = new RenderResult('Inner');
        $result      = new RenderResult($innerResult, 'Outer');
        expect($result->collect())->toEqual('InnerOuter');
    });

    test('append + cast', function () {
        $result = new RenderResult('Hello');
        $result->append('World');
        expect((string) $result)->toEqual('HelloWorld');
    });

    test('collect with encoding', function () {
        expect(RenderResult::wrap('Hello', '<World>')->collect())->toEqual('Hello&lt;World&gt;');
        expect(RenderResult::encoded('Hello', '<World>')->collect())->toEqual('Hello<World>');
    });

    test('iterator', function () {
        $result = new RenderResult('Hello', 'World');
        $chunks = iterator_to_array($result);
        expect($chunks)->toEqual(['Hello', 'World']);
    });

    test('collect with nested render result', function () {
        $innerResult = new RenderResult('Nested');
        $result      = new RenderResult($innerResult, 'Outer');
        expect($result->collect())->toEqual('NestedOuter');
    });
});
