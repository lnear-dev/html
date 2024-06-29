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
namespace html\strict;
use html\{RenderResult, Renderer};

function a(
    string|array|RenderResult $body,
    string $href= "",
    string $target= "",
    string $download= "",
    string $ping= "",
    string $rel= "",
    string $hreflang= "",
    string $type= "",
    string $referrerpolicy= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<a" .     ($href !== '' ? " href='" . htmlspecialchars($href, ENT_QUOTES) . "'" : '').
        ($target !== '' ? " target='" . htmlspecialchars($target, ENT_QUOTES) . "'" : '').
        ($download !== '' ? " download='" . htmlspecialchars($download, ENT_QUOTES) . "'" : '').
        ($ping !== '' ? " ping='" . htmlspecialchars($ping, ENT_QUOTES) . "'" : '').
        ($rel !== '' ? " rel='" . htmlspecialchars($rel, ENT_QUOTES) . "'" : '').
        ($hreflang !== '' ? " hreflang='" . htmlspecialchars($hreflang, ENT_QUOTES) . "'" : '').
        ($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
        ($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</a>");
    
}

function abbr(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<abbr" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</abbr>");
    
}

function address(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<address" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</address>");
    
}

function area(
    string $alt= "",
    string $coords= "",
    string $shape= "",
    string $href= "",
    string $target= "",
    string $download= "",
    string $ping= "",
    string $rel= "",
    string $referrerpolicy= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<area" .     ($alt !== '' ? " alt='" . htmlspecialchars($alt, ENT_QUOTES) . "'" : '').
        ($coords !== '' ? " coords='" . htmlspecialchars($coords, ENT_QUOTES) . "'" : '').
        ($shape !== '' ? " shape='" . htmlspecialchars($shape, ENT_QUOTES) . "'" : '').
        ($href !== '' ? " href='" . htmlspecialchars($href, ENT_QUOTES) . "'" : '').
        ($target !== '' ? " target='" . htmlspecialchars($target, ENT_QUOTES) . "'" : '').
        ($download !== '' ? " download='" . htmlspecialchars($download, ENT_QUOTES) . "'" : '').
        ($ping !== '' ? " ping='" . htmlspecialchars($ping, ENT_QUOTES) . "'" : '').
        ($rel !== '' ? " rel='" . htmlspecialchars($rel, ENT_QUOTES) . "'" : '').
        ($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function article(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<article" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</article>");
    
}

function aside(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<aside" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</aside>");
    
}

function audio(
    string|array|RenderResult $body,
    string $src= "",
    string $crossorigin= "",
    string $preload= "",
    string $autoplay= "",
    string $loop= "",
    string $muted= "",
    string $controls= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<audio" .     ($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
        ($crossorigin !== '' ? " crossorigin='" . htmlspecialchars($crossorigin, ENT_QUOTES) . "'" : '').
        ($preload !== '' ? " preload='" . htmlspecialchars($preload, ENT_QUOTES) . "'" : '').
        ($autoplay !== '' ? " autoplay='" . htmlspecialchars($autoplay, ENT_QUOTES) . "'" : '').
        ($loop !== '' ? " loop='" . htmlspecialchars($loop, ENT_QUOTES) . "'" : '').
        ($muted !== '' ? " muted='" . htmlspecialchars($muted, ENT_QUOTES) . "'" : '').
        ($controls !== '' ? " controls='" . htmlspecialchars($controls, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</audio>");
    
}

function b(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<b" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</b>");
    
}

function base(
    string $href= "",
    string $target= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<base" .     ($href !== '' ? " href='" . htmlspecialchars($href, ENT_QUOTES) . "'" : '').
        ($target !== '' ? " target='" . htmlspecialchars($target, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function bdi(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<bdi" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</bdi>");
    
}

function bdo(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<bdo" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</bdo>");
    
}

function blockquote(
    string|array|RenderResult $body,
    string $cite= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<blockquote" .     ($cite !== '' ? " cite='" . htmlspecialchars($cite, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</blockquote>");
    
}

function body(
    string|array|RenderResult $body,
    string $onafterprint= "",
    string $onbeforeprint= "",
    string $onbeforeunload= "",
    string $onhashchange= "",
    string $onlanguagechange= "",
    string $onmessage= "",
    string $onmessageerror= "",
    string $onoffline= "",
    string $ononline= "",
    string $onpageswap= "",
    string $onpagehide= "",
    string $onpagereveal= "",
    string $onpageshow= "",
    string $onpopstate= "",
    string $onrejectionhandled= "",
    string $onstorage= "",
    string $onunhandledrejection= "",
    string $onunload= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<body" .     ($onafterprint !== '' ? " onafterprint='" . htmlspecialchars($onafterprint, ENT_QUOTES) . "'" : '').
        ($onbeforeprint !== '' ? " onbeforeprint='" . htmlspecialchars($onbeforeprint, ENT_QUOTES) . "'" : '').
        ($onbeforeunload !== '' ? " onbeforeunload='" . htmlspecialchars($onbeforeunload, ENT_QUOTES) . "'" : '').
        ($onhashchange !== '' ? " onhashchange='" . htmlspecialchars($onhashchange, ENT_QUOTES) . "'" : '').
        ($onlanguagechange !== '' ? " onlanguagechange='" . htmlspecialchars($onlanguagechange, ENT_QUOTES) . "'" : '').
        ($onmessage !== '' ? " onmessage='" . htmlspecialchars($onmessage, ENT_QUOTES) . "'" : '').
        ($onmessageerror !== '' ? " onmessageerror='" . htmlspecialchars($onmessageerror, ENT_QUOTES) . "'" : '').
        ($onoffline !== '' ? " onoffline='" . htmlspecialchars($onoffline, ENT_QUOTES) . "'" : '').
        ($ononline !== '' ? " ononline='" . htmlspecialchars($ononline, ENT_QUOTES) . "'" : '').
        ($onpageswap !== '' ? " onpageswap='" . htmlspecialchars($onpageswap, ENT_QUOTES) . "'" : '').
        ($onpagehide !== '' ? " onpagehide='" . htmlspecialchars($onpagehide, ENT_QUOTES) . "'" : '').
        ($onpagereveal !== '' ? " onpagereveal='" . htmlspecialchars($onpagereveal, ENT_QUOTES) . "'" : '').
        ($onpageshow !== '' ? " onpageshow='" . htmlspecialchars($onpageshow, ENT_QUOTES) . "'" : '').
        ($onpopstate !== '' ? " onpopstate='" . htmlspecialchars($onpopstate, ENT_QUOTES) . "'" : '').
        ($onrejectionhandled !== '' ? " onrejectionhandled='" . htmlspecialchars($onrejectionhandled, ENT_QUOTES) . "'" : '').
        ($onstorage !== '' ? " onstorage='" . htmlspecialchars($onstorage, ENT_QUOTES) . "'" : '').
        ($onunhandledrejection !== '' ? " onunhandledrejection='" . htmlspecialchars($onunhandledrejection, ENT_QUOTES) . "'" : '').
        ($onunload !== '' ? " onunload='" . htmlspecialchars($onunload, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</body>");
    
}

function br(
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<br" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function button(
    string|array|RenderResult $body,
    string $disabled= "",
    string $form= "",
    string $formaction= "",
    string $formenctype= "",
    string $formmethod= "",
    string $formnovalidate= "",
    string $formtarget= "",
    string $name= "",
    string $popovertarget= "",
    string $popovertargetaction= "",
    string $type= "",
    string $value= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<button" .     ($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
        ($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
        ($formaction !== '' ? " formaction='" . htmlspecialchars($formaction, ENT_QUOTES) . "'" : '').
        ($formenctype !== '' ? " formenctype='" . htmlspecialchars($formenctype, ENT_QUOTES) . "'" : '').
        ($formmethod !== '' ? " formmethod='" . htmlspecialchars($formmethod, ENT_QUOTES) . "'" : '').
        ($formnovalidate !== '' ? " formnovalidate='" . htmlspecialchars($formnovalidate, ENT_QUOTES) . "'" : '').
        ($formtarget !== '' ? " formtarget='" . htmlspecialchars($formtarget, ENT_QUOTES) . "'" : '').
        ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($popovertarget !== '' ? " popovertarget='" . htmlspecialchars($popovertarget, ENT_QUOTES) . "'" : '').
        ($popovertargetaction !== '' ? " popovertargetaction='" . htmlspecialchars($popovertargetaction, ENT_QUOTES) . "'" : '').
        ($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
        ($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</button>");
    
}

function canvas(
    string|array|RenderResult $body,
    string $width= "",
    string $height= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<canvas" .     ($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
        ($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</canvas>");
    
}

function caption(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<caption" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</caption>");
    
}

function cite(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<cite" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</cite>");
    
}

function code(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<code" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</code>");
    
}

function col(
    string $span= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<col" .     ($span !== '' ? " span='" . htmlspecialchars($span, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function colgroup(
    string|array|RenderResult $body,
    string $span= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<colgroup" .     ($span !== '' ? " span='" . htmlspecialchars($span, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</colgroup>");
    
}

function data(
    string|array|RenderResult $body,
    string $value= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<data" .     ($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</data>");
    
}

function datalist(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<datalist" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</datalist>");
    
}

function dd(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<dd" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</dd>");
    
}

function del(
    string|array|RenderResult $body,
    string $cite= "",
    string $datetime= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<del" .     ($cite !== '' ? " cite='" . htmlspecialchars($cite, ENT_QUOTES) . "'" : '').
        ($datetime !== '' ? " datetime='" . htmlspecialchars($datetime, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</del>");
    
}

function details(
    string|array|RenderResult $body,
    string $name= "",
    string $open= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<details" .     ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($open !== '' ? " open='" . htmlspecialchars($open, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</details>");
    
}

function dfn(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<dfn" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</dfn>");
    
}

function dialog(
    string|array|RenderResult $body,
    string $open= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<dialog" .     ($open !== '' ? " open='" . htmlspecialchars($open, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</dialog>");
    
}

function div(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<div" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</div>");
    
}

function dl(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<dl" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</dl>");
    
}

function dt(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<dt" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</dt>");
    
}

function em(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<em" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</em>");
    
}

function embed(
    string $src= "",
    string $type= "",
    string $width= "",
    string $height= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<embed" .     ($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
        ($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
        ($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
        ($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function fieldset(
    string|array|RenderResult $body,
    string $disabled= "",
    string $form= "",
    string $name= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<fieldset" .     ($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
        ($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
        ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</fieldset>");
    
}

function figcaption(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<figcaption" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</figcaption>");
    
}

function figure(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<figure" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</figure>");
    
}

function footer(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<footer" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</footer>");
    
}

function form(
    string|array|RenderResult $body,
    string $acceptCharset= "",
    string $action= "",
    string $autocomplete= "",
    string $enctype= "",
    string $method= "",
    string $name= "",
    string $novalidate= "",
    string $rel= "",
    string $target= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<form" .     ($acceptCharset !== '' ? " accept-charset='" . htmlspecialchars($acceptCharset, ENT_QUOTES) . "'" : '').
        ($action !== '' ? " action='" . htmlspecialchars($action, ENT_QUOTES) . "'" : '').
        ($autocomplete !== '' ? " autocomplete='" . htmlspecialchars($autocomplete, ENT_QUOTES) . "'" : '').
        ($enctype !== '' ? " enctype='" . htmlspecialchars($enctype, ENT_QUOTES) . "'" : '').
        ($method !== '' ? " method='" . htmlspecialchars($method, ENT_QUOTES) . "'" : '').
        ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($novalidate !== '' ? " novalidate='" . htmlspecialchars($novalidate, ENT_QUOTES) . "'" : '').
        ($rel !== '' ? " rel='" . htmlspecialchars($rel, ENT_QUOTES) . "'" : '').
        ($target !== '' ? " target='" . htmlspecialchars($target, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</form>");
    
}

function h1(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<h1" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</h1>");
    
}

function h2(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<h2" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</h2>");
    
}

function h3(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<h3" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</h3>");
    
}

function h4(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<h4" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</h4>");
    
}

function h5(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<h5" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</h5>");
    
}

function h6(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<h6" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</h6>");
    
}

function head(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<head" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</head>");
    
}

function header(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<header" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</header>");
    
}

function hgroup(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<hgroup" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</hgroup>");
    
}

function hr(
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<hr" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function html(
    string|array|RenderResult $body,
    string $manifest= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<html" .     ($manifest !== '' ? " manifest='" . htmlspecialchars($manifest, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</html>");
    
}

function i(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<i" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</i>");
    
}

function iframe(
    string $src= "",
    string $srcdoc= "",
    string $name= "",
    string $sandbox= "",
    string $allow= "",
    string $allowfullscreen= "",
    string $width= "",
    string $height= "",
    string $referrerpolicy= "",
    string $loading= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<iframe" .     ($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
        ($srcdoc !== '' ? " srcdoc='" . htmlspecialchars($srcdoc, ENT_QUOTES) . "'" : '').
        ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($sandbox !== '' ? " sandbox='" . htmlspecialchars($sandbox, ENT_QUOTES) . "'" : '').
        ($allow !== '' ? " allow='" . htmlspecialchars($allow, ENT_QUOTES) . "'" : '').
        ($allowfullscreen !== '' ? " allowfullscreen='" . htmlspecialchars($allowfullscreen, ENT_QUOTES) . "'" : '').
        ($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
        ($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
        ($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : '').
        ($loading !== '' ? " loading='" . htmlspecialchars($loading, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function img(
    string $alt= "",
    string $src= "",
    string $srcset= "",
    string $sizes= "",
    string $crossorigin= "",
    string $usemap= "",
    string $ismap= "",
    string $width= "",
    string $height= "",
    string $referrerpolicy= "",
    string $decoding= "",
    string $loading= "",
    string $fetchpriority= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<img" .     ($alt !== '' ? " alt='" . htmlspecialchars($alt, ENT_QUOTES) . "'" : '').
        ($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
        ($srcset !== '' ? " srcset='" . htmlspecialchars($srcset, ENT_QUOTES) . "'" : '').
        ($sizes !== '' ? " sizes='" . htmlspecialchars($sizes, ENT_QUOTES) . "'" : '').
        ($crossorigin !== '' ? " crossorigin='" . htmlspecialchars($crossorigin, ENT_QUOTES) . "'" : '').
        ($usemap !== '' ? " usemap='" . htmlspecialchars($usemap, ENT_QUOTES) . "'" : '').
        ($ismap !== '' ? " ismap='" . htmlspecialchars($ismap, ENT_QUOTES) . "'" : '').
        ($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
        ($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
        ($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : '').
        ($decoding !== '' ? " decoding='" . htmlspecialchars($decoding, ENT_QUOTES) . "'" : '').
        ($loading !== '' ? " loading='" . htmlspecialchars($loading, ENT_QUOTES) . "'" : '').
        ($fetchpriority !== '' ? " fetchpriority='" . htmlspecialchars($fetchpriority, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function input(
    string $accept= "",
    string $alt= "",
    string $autocomplete= "",
    string $checked= "",
    string $dirname= "",
    string $disabled= "",
    string $form= "",
    string $formaction= "",
    string $formenctype= "",
    string $formmethod= "",
    string $formnovalidate= "",
    string $formtarget= "",
    string $height= "",
    string $list= "",
    string $max= "",
    string $maxlength= "",
    string $min= "",
    string $minlength= "",
    string $multiple= "",
    string $name= "",
    string $pattern= "",
    string $placeholder= "",
    string $popovertarget= "",
    string $popovertargetaction= "",
    string $readonly= "",
    string $required= "",
    string $size= "",
    string $src= "",
    string $step= "",
    string $type= "",
    string $value= "",
    string $width= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<input" .     ($accept !== '' ? " accept='" . htmlspecialchars($accept, ENT_QUOTES) . "'" : '').
        ($alt !== '' ? " alt='" . htmlspecialchars($alt, ENT_QUOTES) . "'" : '').
        ($autocomplete !== '' ? " autocomplete='" . htmlspecialchars($autocomplete, ENT_QUOTES) . "'" : '').
        ($checked !== '' ? " checked='" . htmlspecialchars($checked, ENT_QUOTES) . "'" : '').
        ($dirname !== '' ? " dirname='" . htmlspecialchars($dirname, ENT_QUOTES) . "'" : '').
        ($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
        ($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
        ($formaction !== '' ? " formaction='" . htmlspecialchars($formaction, ENT_QUOTES) . "'" : '').
        ($formenctype !== '' ? " formenctype='" . htmlspecialchars($formenctype, ENT_QUOTES) . "'" : '').
        ($formmethod !== '' ? " formmethod='" . htmlspecialchars($formmethod, ENT_QUOTES) . "'" : '').
        ($formnovalidate !== '' ? " formnovalidate='" . htmlspecialchars($formnovalidate, ENT_QUOTES) . "'" : '').
        ($formtarget !== '' ? " formtarget='" . htmlspecialchars($formtarget, ENT_QUOTES) . "'" : '').
        ($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
        ($list !== '' ? " list='" . htmlspecialchars($list, ENT_QUOTES) . "'" : '').
        ($max !== '' ? " max='" . htmlspecialchars($max, ENT_QUOTES) . "'" : '').
        ($maxlength !== '' ? " maxlength='" . htmlspecialchars($maxlength, ENT_QUOTES) . "'" : '').
        ($min !== '' ? " min='" . htmlspecialchars($min, ENT_QUOTES) . "'" : '').
        ($minlength !== '' ? " minlength='" . htmlspecialchars($minlength, ENT_QUOTES) . "'" : '').
        ($multiple !== '' ? " multiple='" . htmlspecialchars($multiple, ENT_QUOTES) . "'" : '').
        ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($pattern !== '' ? " pattern='" . htmlspecialchars($pattern, ENT_QUOTES) . "'" : '').
        ($placeholder !== '' ? " placeholder='" . htmlspecialchars($placeholder, ENT_QUOTES) . "'" : '').
        ($popovertarget !== '' ? " popovertarget='" . htmlspecialchars($popovertarget, ENT_QUOTES) . "'" : '').
        ($popovertargetaction !== '' ? " popovertargetaction='" . htmlspecialchars($popovertargetaction, ENT_QUOTES) . "'" : '').
        ($readonly !== '' ? " readonly='" . htmlspecialchars($readonly, ENT_QUOTES) . "'" : '').
        ($required !== '' ? " required='" . htmlspecialchars($required, ENT_QUOTES) . "'" : '').
        ($size !== '' ? " size='" . htmlspecialchars($size, ENT_QUOTES) . "'" : '').
        ($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
        ($step !== '' ? " step='" . htmlspecialchars($step, ENT_QUOTES) . "'" : '').
        ($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
        ($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
        ($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function ins(
    string|array|RenderResult $body,
    string $cite= "",
    string $datetime= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<ins" .     ($cite !== '' ? " cite='" . htmlspecialchars($cite, ENT_QUOTES) . "'" : '').
        ($datetime !== '' ? " datetime='" . htmlspecialchars($datetime, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</ins>");
    
}

function kbd(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<kbd" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</kbd>");
    
}

function label(
    string|array|RenderResult $body,
    string $for= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<label" .     ($for !== '' ? " for='" . htmlspecialchars($for, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</label>");
    
}

function legend(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<legend" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</legend>");
    
}

function li(
    string|array|RenderResult $body,
    string $value= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<li" .     ($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</li>");
    
}

function link(
    string $href= "",
    string $crossorigin= "",
    string $rel= "",
    string $as= "",
    string $media= "",
    string $hreflang= "",
    string $type= "",
    string $sizes= "",
    string $imagesrcset= "",
    string $imagesizes= "",
    string $referrerpolicy= "",
    string $integrity= "",
    string $blocking= "",
    string $color= "",
    string $disabled= "",
    string $fetchpriority= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<link" .     ($href !== '' ? " href='" . htmlspecialchars($href, ENT_QUOTES) . "'" : '').
        ($crossorigin !== '' ? " crossorigin='" . htmlspecialchars($crossorigin, ENT_QUOTES) . "'" : '').
        ($rel !== '' ? " rel='" . htmlspecialchars($rel, ENT_QUOTES) . "'" : '').
        ($as !== '' ? " as='" . htmlspecialchars($as, ENT_QUOTES) . "'" : '').
        ($media !== '' ? " media='" . htmlspecialchars($media, ENT_QUOTES) . "'" : '').
        ($hreflang !== '' ? " hreflang='" . htmlspecialchars($hreflang, ENT_QUOTES) . "'" : '').
        ($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
        ($sizes !== '' ? " sizes='" . htmlspecialchars($sizes, ENT_QUOTES) . "'" : '').
        ($imagesrcset !== '' ? " imagesrcset='" . htmlspecialchars($imagesrcset, ENT_QUOTES) . "'" : '').
        ($imagesizes !== '' ? " imagesizes='" . htmlspecialchars($imagesizes, ENT_QUOTES) . "'" : '').
        ($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : '').
        ($integrity !== '' ? " integrity='" . htmlspecialchars($integrity, ENT_QUOTES) . "'" : '').
        ($blocking !== '' ? " blocking='" . htmlspecialchars($blocking, ENT_QUOTES) . "'" : '').
        ($color !== '' ? " color='" . htmlspecialchars($color, ENT_QUOTES) . "'" : '').
        ($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
        ($fetchpriority !== '' ? " fetchpriority='" . htmlspecialchars($fetchpriority, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function main(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<main" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</main>");
    
}

function map(
    string|array|RenderResult $body,
    string $name= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<map" .     ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</map>");
    
}

function mark(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<mark" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</mark>");
    
}

function math(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<math" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</math>");
    
}

function menu(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<menu" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</menu>");
    
}

function meta(
    string $name= "",
    string $httpEquiv= "",
    string $content= "",
    string $charset= "",
    string $media= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<meta" .     ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($httpEquiv !== '' ? " http-equiv='" . htmlspecialchars($httpEquiv, ENT_QUOTES) . "'" : '').
        ($content !== '' ? " content='" . htmlspecialchars($content, ENT_QUOTES) . "'" : '').
        ($charset !== '' ? " charset='" . htmlspecialchars($charset, ENT_QUOTES) . "'" : '').
        ($media !== '' ? " media='" . htmlspecialchars($media, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function meter(
    string|array|RenderResult $body,
    string $value= "",
    string $min= "",
    string $max= "",
    string $low= "",
    string $high= "",
    string $optimum= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<meter" .     ($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
        ($min !== '' ? " min='" . htmlspecialchars($min, ENT_QUOTES) . "'" : '').
        ($max !== '' ? " max='" . htmlspecialchars($max, ENT_QUOTES) . "'" : '').
        ($low !== '' ? " low='" . htmlspecialchars($low, ENT_QUOTES) . "'" : '').
        ($high !== '' ? " high='" . htmlspecialchars($high, ENT_QUOTES) . "'" : '').
        ($optimum !== '' ? " optimum='" . htmlspecialchars($optimum, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</meter>");
    
}

function nav(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<nav" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</nav>");
    
}

function noscript(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<noscript" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</noscript>");
    
}

function object(
    string|array|RenderResult $body,
    string $data= "",
    string $type= "",
    string $name= "",
    string $form= "",
    string $width= "",
    string $height= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<object" .     ($data !== '' ? " data='" . htmlspecialchars($data, ENT_QUOTES) . "'" : '').
        ($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
        ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
        ($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
        ($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</object>");
    
}

function ol(
    string|array|RenderResult $body,
    string $reversed= "",
    string $start= "",
    string $type= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<ol" .     ($reversed !== '' ? " reversed='" . htmlspecialchars($reversed, ENT_QUOTES) . "'" : '').
        ($start !== '' ? " start='" . htmlspecialchars($start, ENT_QUOTES) . "'" : '').
        ($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</ol>");
    
}

function optgroup(
    string|array|RenderResult $body,
    string $disabled= "",
    string $label= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<optgroup" .     ($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
        ($label !== '' ? " label='" . htmlspecialchars($label, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</optgroup>");
    
}

function option(
    string|array|RenderResult $body,
    string $disabled= "",
    string $label= "",
    string $selected= "",
    string $value= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<option" .     ($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
        ($label !== '' ? " label='" . htmlspecialchars($label, ENT_QUOTES) . "'" : '').
        ($selected !== '' ? " selected='" . htmlspecialchars($selected, ENT_QUOTES) . "'" : '').
        ($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</option>");
    
}

function output(
    string|array|RenderResult $body,
    string $for= "",
    string $form= "",
    string $name= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<output" .     ($for !== '' ? " for='" . htmlspecialchars($for, ENT_QUOTES) . "'" : '').
        ($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
        ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</output>");
    
}

function p(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<p" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</p>");
    
}

function picture(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<picture" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</picture>");
    
}

function pre(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<pre" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</pre>");
    
}

function progress(
    string|array|RenderResult $body,
    string $value= "",
    string $max= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<progress" .     ($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
        ($max !== '' ? " max='" . htmlspecialchars($max, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</progress>");
    
}

function q(
    string|array|RenderResult $body,
    string $cite= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<q" .     ($cite !== '' ? " cite='" . htmlspecialchars($cite, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</q>");
    
}

function rp(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<rp" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</rp>");
    
}

function rt(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<rt" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</rt>");
    
}

function ruby(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<ruby" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</ruby>");
    
}

function s(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<s" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</s>");
    
}

function samp(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<samp" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</samp>");
    
}

function script(
    string|array|RenderResult $body,
    string $src= "",
    string $type= "",
    string $nomodule= "",
    string $async= "",
    string $defer= "",
    string $crossorigin= "",
    string $integrity= "",
    string $referrerpolicy= "",
    string $blocking= "",
    string $fetchpriority= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<script" .     ($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
        ($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
        ($nomodule !== '' ? " nomodule='" . htmlspecialchars($nomodule, ENT_QUOTES) . "'" : '').
        ($async !== '' ? " async='" . htmlspecialchars($async, ENT_QUOTES) . "'" : '').
        ($defer !== '' ? " defer='" . htmlspecialchars($defer, ENT_QUOTES) . "'" : '').
        ($crossorigin !== '' ? " crossorigin='" . htmlspecialchars($crossorigin, ENT_QUOTES) . "'" : '').
        ($integrity !== '' ? " integrity='" . htmlspecialchars($integrity, ENT_QUOTES) . "'" : '').
        ($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : '').
        ($blocking !== '' ? " blocking='" . htmlspecialchars($blocking, ENT_QUOTES) . "'" : '').
        ($fetchpriority !== '' ? " fetchpriority='" . htmlspecialchars($fetchpriority, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</script>");
    
}

function search(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<search" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</search>");
    
}

function section(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<section" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</section>");
    
}

function select(
    string|array|RenderResult $body,
    string $autocomplete= "",
    string $disabled= "",
    string $form= "",
    string $multiple= "",
    string $name= "",
    string $required= "",
    string $size= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<select" .     ($autocomplete !== '' ? " autocomplete='" . htmlspecialchars($autocomplete, ENT_QUOTES) . "'" : '').
        ($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
        ($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
        ($multiple !== '' ? " multiple='" . htmlspecialchars($multiple, ENT_QUOTES) . "'" : '').
        ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($required !== '' ? " required='" . htmlspecialchars($required, ENT_QUOTES) . "'" : '').
        ($size !== '' ? " size='" . htmlspecialchars($size, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</select>");
    
}

function slot(
    string|array|RenderResult $body,
    string $name= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<slot" .     ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</slot>");
    
}

function small(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<small" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</small>");
    
}

function source(
    string $type= "",
    string $media= "",
    string $src= "",
    string $srcset= "",
    string $sizes= "",
    string $width= "",
    string $height= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<source" .     ($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
        ($media !== '' ? " media='" . htmlspecialchars($media, ENT_QUOTES) . "'" : '').
        ($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
        ($srcset !== '' ? " srcset='" . htmlspecialchars($srcset, ENT_QUOTES) . "'" : '').
        ($sizes !== '' ? " sizes='" . htmlspecialchars($sizes, ENT_QUOTES) . "'" : '').
        ($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
        ($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function span(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<span" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</span>");
    
}

function strong(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<strong" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</strong>");
    
}

function style(
    string|array|RenderResult $body,
    string $media= "",
    string $blocking= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<style" .     ($media !== '' ? " media='" . htmlspecialchars($media, ENT_QUOTES) . "'" : '').
        ($blocking !== '' ? " blocking='" . htmlspecialchars($blocking, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</style>");
    
}

function sub(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<sub" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</sub>");
    
}

function summary(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<summary" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</summary>");
    
}

function sup(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<sup" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</sup>");
    
}

function svg(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<svg" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</svg>");
    
}

function table(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<table" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</table>");
    
}

function tbody(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<tbody" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</tbody>");
    
}

function td(
    string|array|RenderResult $body,
    string $colspan= "",
    string $rowspan= "",
    string $headers= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<td" .     ($colspan !== '' ? " colspan='" . htmlspecialchars($colspan, ENT_QUOTES) . "'" : '').
        ($rowspan !== '' ? " rowspan='" . htmlspecialchars($rowspan, ENT_QUOTES) . "'" : '').
        ($headers !== '' ? " headers='" . htmlspecialchars($headers, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</td>");
    
}

function template(
    string|array|RenderResult $body,
    string $shadowrootmode= "",
    string $shadowrootdelegatesfocus= "",
    string $shadowrootclonable= "",
    string $shadowrootserializable= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<template" .     ($shadowrootmode !== '' ? " shadowrootmode='" . htmlspecialchars($shadowrootmode, ENT_QUOTES) . "'" : '').
        ($shadowrootdelegatesfocus !== '' ? " shadowrootdelegatesfocus='" . htmlspecialchars($shadowrootdelegatesfocus, ENT_QUOTES) . "'" : '').
        ($shadowrootclonable !== '' ? " shadowrootclonable='" . htmlspecialchars($shadowrootclonable, ENT_QUOTES) . "'" : '').
        ($shadowrootserializable !== '' ? " shadowrootserializable='" . htmlspecialchars($shadowrootserializable, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</template>");
    
}

function textarea(
    string|array|RenderResult $body,
    string $autocomplete= "",
    string $cols= "",
    string $dirname= "",
    string $disabled= "",
    string $form= "",
    string $maxlength= "",
    string $minlength= "",
    string $name= "",
    string $placeholder= "",
    string $readonly= "",
    string $required= "",
    string $rows= "",
    string $wrap= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<textarea" .     ($autocomplete !== '' ? " autocomplete='" . htmlspecialchars($autocomplete, ENT_QUOTES) . "'" : '').
        ($cols !== '' ? " cols='" . htmlspecialchars($cols, ENT_QUOTES) . "'" : '').
        ($dirname !== '' ? " dirname='" . htmlspecialchars($dirname, ENT_QUOTES) . "'" : '').
        ($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
        ($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
        ($maxlength !== '' ? " maxlength='" . htmlspecialchars($maxlength, ENT_QUOTES) . "'" : '').
        ($minlength !== '' ? " minlength='" . htmlspecialchars($minlength, ENT_QUOTES) . "'" : '').
        ($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
        ($placeholder !== '' ? " placeholder='" . htmlspecialchars($placeholder, ENT_QUOTES) . "'" : '').
        ($readonly !== '' ? " readonly='" . htmlspecialchars($readonly, ENT_QUOTES) . "'" : '').
        ($required !== '' ? " required='" . htmlspecialchars($required, ENT_QUOTES) . "'" : '').
        ($rows !== '' ? " rows='" . htmlspecialchars($rows, ENT_QUOTES) . "'" : '').
        ($wrap !== '' ? " wrap='" . htmlspecialchars($wrap, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</textarea>");
    
}

function tfoot(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<tfoot" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</tfoot>");
    
}

function th(
    string|array|RenderResult $body,
    string $colspan= "",
    string $rowspan= "",
    string $headers= "",
    string $scope= "",
    string $abbr= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<th" .     ($colspan !== '' ? " colspan='" . htmlspecialchars($colspan, ENT_QUOTES) . "'" : '').
        ($rowspan !== '' ? " rowspan='" . htmlspecialchars($rowspan, ENT_QUOTES) . "'" : '').
        ($headers !== '' ? " headers='" . htmlspecialchars($headers, ENT_QUOTES) . "'" : '').
        ($scope !== '' ? " scope='" . htmlspecialchars($scope, ENT_QUOTES) . "'" : '').
        ($abbr !== '' ? " abbr='" . htmlspecialchars($abbr, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</th>");
    
}

function thead(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<thead" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</thead>");
    
}

function time(
    string|array|RenderResult $body,
    string $datetime= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<time" .     ($datetime !== '' ? " datetime='" . htmlspecialchars($datetime, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</time>");
    
}

function title(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<title" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</title>");
    
}

function tr(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<tr" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</tr>");
    
}

function track(
    string $default= "",
    string $kind= "",
    string $label= "",
    string $src= "",
    string $srclang= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<track" .     ($default !== '' ? " default='" . htmlspecialchars($default, ENT_QUOTES) . "'" : '').
        ($kind !== '' ? " kind='" . htmlspecialchars($kind, ENT_QUOTES) . "'" : '').
        ($label !== '' ? " label='" . htmlspecialchars($label, ENT_QUOTES) . "'" : '').
        ($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
        ($srclang !== '' ? " srclang='" . htmlspecialchars($srclang, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

function u(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<u" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</u>");
    
}

function ul(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<ul" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</ul>");
    
}

function variable(
    string|array|RenderResult $body,
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<var" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</var>");
    
}

function video(
    string|array|RenderResult $body,
    string $src= "",
    string $crossorigin= "",
    string $poster= "",
    string $preload= "",
    string $autoplay= "",
    string $playsinline= "",
    string $loop= "",
    string $muted= "",
    string $controls= "",
    string $width= "",
    string $height= "",
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<video" .     ($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
        ($crossorigin !== '' ? " crossorigin='" . htmlspecialchars($crossorigin, ENT_QUOTES) . "'" : '').
        ($poster !== '' ? " poster='" . htmlspecialchars($poster, ENT_QUOTES) . "'" : '').
        ($preload !== '' ? " preload='" . htmlspecialchars($preload, ENT_QUOTES) . "'" : '').
        ($autoplay !== '' ? " autoplay='" . htmlspecialchars($autoplay, ENT_QUOTES) . "'" : '').
        ($playsinline !== '' ? " playsinline='" . htmlspecialchars($playsinline, ENT_QUOTES) . "'" : '').
        ($loop !== '' ? " loop='" . htmlspecialchars($loop, ENT_QUOTES) . "'" : '').
        ($muted !== '' ? " muted='" . htmlspecialchars($muted, ENT_QUOTES) . "'" : '').
        ($controls !== '' ? " controls='" . htmlspecialchars($controls, ENT_QUOTES) . "'" : '').
        ($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
        ($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
        ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). ">{$body}</video>");
    
}

function wbr(
    string $accesskey= "",
    string $autocapitalize= "",
    string $class= "",
    string $contenteditable= "",
    string $contextmenu= "",
    string $dir= "",
    string $draggable= "",
    string $dropzone= "",
    string $hidden= "",
    string $id= "",
    string $itemid= "",
    string $itemprop= "",
    string $itemref= "",
    string $itemscope= "",
    string $itemtype= "",
    string $lang= "",
    string $spellcheck= "",
    string $style= "",
    string $tabindex= "",
    string $title= "",
    string $translate= "",
    array $dataset = []
): RenderResult {
    return RenderResult::encoded("<wbr" .     ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
        ($autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($autocapitalize, ENT_QUOTES) . "'" : '').
        ($class !== '' ? " class='" . htmlspecialchars($class, ENT_QUOTES) . "'" : '').
        ($contenteditable !== '' ? " contenteditable='" . htmlspecialchars($contenteditable, ENT_QUOTES) . "'" : '').
        ($contextmenu !== '' ? " contextmenu='" . htmlspecialchars($contextmenu, ENT_QUOTES) . "'" : '').
        ($dir !== '' ? " dir='" . htmlspecialchars($dir, ENT_QUOTES) . "'" : '').
        ($draggable !== '' ? " draggable='" . htmlspecialchars($draggable, ENT_QUOTES) . "'" : '').
        ($dropzone !== '' ? " dropzone='" . htmlspecialchars($dropzone, ENT_QUOTES) . "'" : '').
        ($hidden !== '' ? " hidden='" . htmlspecialchars($hidden, ENT_QUOTES) . "'" : '').
        ($id !== '' ? " id='" . htmlspecialchars($id, ENT_QUOTES) . "'" : '').
        ($itemid !== '' ? " itemid='" . htmlspecialchars($itemid, ENT_QUOTES) . "'" : '').
        ($itemprop !== '' ? " itemprop='" . htmlspecialchars($itemprop, ENT_QUOTES) . "'" : '').
        ($itemref !== '' ? " itemref='" . htmlspecialchars($itemref, ENT_QUOTES) . "'" : '').
        ($itemscope !== '' ? " itemscope='" . htmlspecialchars($itemscope, ENT_QUOTES) . "'" : '').
        ($itemtype !== '' ? " itemtype='" . htmlspecialchars($itemtype, ENT_QUOTES) . "'" : '').
        ($lang !== '' ? " lang='" . htmlspecialchars($lang, ENT_QUOTES) . "'" : '').
        ($spellcheck !== '' ? " spellcheck='" . htmlspecialchars($spellcheck, ENT_QUOTES) . "'" : '').
        ($style !== '' ? " style='" . htmlspecialchars($style, ENT_QUOTES) . "'" : '').
        ($tabindex !== '' ? " tabindex='" . htmlspecialchars($tabindex, ENT_QUOTES) . "'" : '').
        ($title !== '' ? " title='" . htmlspecialchars($title, ENT_QUOTES) . "'" : '').
        ($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : '').
        Renderer::dataset(...$dataset). "/>");
    
}

