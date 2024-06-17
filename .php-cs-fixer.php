<?php
return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        'declare_strict_types' => false,
        'header_comment'       => [
            'comment_type' => 'PHPDoc',
            'header'       => <<<'EOF'
            This file is part lnear.dev.
            
            (c) 2024 Lanre Ajao(lnear)
        
            For the full copyright and license information, please view the LICENSE
            file that was distributed with this source code.
            .........<-..(`-')_..(`-').._(`-').._....(`-').
            ...<-.......\(.OO).).(.OO).-/(OO.).-/.<-.(OO.).
            .,--..)..,--./.,--/.(,------./.,---...,------,)
            .|..(`-')|...\.|..|..|...---'|.\./`.\.|.../`..'
            .|..|OO.)|....'|..|)(|..'--..'-'|_.'.||..|_.'.|
            (|..'__.||..|\....|..|...--'(|...-...||.......'
            .|.....|'|..|.\...|..|..`---.|..|.|..||..|\..\.
            .`-----'.`--'..`--'..`------'`--'.`--'`--'.'--'
            @link     https://lnear.dev
            @contact  hi@lnear.dev
            EOF,
            'separate'     => 'none',
            'location'     => 'after_open',
        ],

    ])
    ->setFinder(PhpCsFixer\Finder::create()->exclude('bin')->exclude('vendor')->in(__DIR__ . '/.'))
    ->setUsingCache(false);
