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

function a(
    string $body= "",
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
    string $translate= ""
) {
    return "<a" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$href !== '' ? " href='" . htmlspecialchars($$href, ENT_QUOTES) . "'" : '').
        ($$target !== '' ? " target='" . htmlspecialchars($$target, ENT_QUOTES) . "'" : '').
        ($$download !== '' ? " download='" . htmlspecialchars($$download, ENT_QUOTES) . "'" : '').
        ($$ping !== '' ? " ping='" . htmlspecialchars($$ping, ENT_QUOTES) . "'" : '').
        ($$rel !== '' ? " rel='" . htmlspecialchars($$rel, ENT_QUOTES) . "'" : '').
        ($$hreflang !== '' ? " hreflang='" . htmlspecialchars($$hreflang, ENT_QUOTES) . "'" : '').
        ($$type !== '' ? " type='" . htmlspecialchars($$type, ENT_QUOTES) . "'" : '').
        ($$referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($$referrerpolicy, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</a>";
    
}

function abbr(
    string $body= "",
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
    string $translate= ""
) {
    return "<abbr" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</abbr>";
    
}

function address(
    string $body= "",
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
    string $translate= ""
) {
    return "<address" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</address>";
    
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
    string $translate= ""
) {
    return "<area" .     ($$alt !== '' ? " alt='" . htmlspecialchars($$alt, ENT_QUOTES) . "'" : '').
        ($$coords !== '' ? " coords='" . htmlspecialchars($$coords, ENT_QUOTES) . "'" : '').
        ($$shape !== '' ? " shape='" . htmlspecialchars($$shape, ENT_QUOTES) . "'" : '').
        ($$href !== '' ? " href='" . htmlspecialchars($$href, ENT_QUOTES) . "'" : '').
        ($$target !== '' ? " target='" . htmlspecialchars($$target, ENT_QUOTES) . "'" : '').
        ($$download !== '' ? " download='" . htmlspecialchars($$download, ENT_QUOTES) . "'" : '').
        ($$ping !== '' ? " ping='" . htmlspecialchars($$ping, ENT_QUOTES) . "'" : '').
        ($$rel !== '' ? " rel='" . htmlspecialchars($$rel, ENT_QUOTES) . "'" : '').
        ($$referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($$referrerpolicy, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function article(
    string $body= "",
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
    string $translate= ""
) {
    return "<article" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</article>";
    
}

function aside(
    string $body= "",
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
    string $translate= ""
) {
    return "<aside" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</aside>";
    
}

function audio(
    string $body= "",
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
    string $translate= ""
) {
    return "<audio" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$src !== '' ? " src='" . htmlspecialchars($$src, ENT_QUOTES) . "'" : '').
        ($$crossorigin !== '' ? " crossorigin='" . htmlspecialchars($$crossorigin, ENT_QUOTES) . "'" : '').
        ($$preload !== '' ? " preload='" . htmlspecialchars($$preload, ENT_QUOTES) . "'" : '').
        ($$autoplay !== '' ? " autoplay='" . htmlspecialchars($$autoplay, ENT_QUOTES) . "'" : '').
        ($$loop !== '' ? " loop='" . htmlspecialchars($$loop, ENT_QUOTES) . "'" : '').
        ($$muted !== '' ? " muted='" . htmlspecialchars($$muted, ENT_QUOTES) . "'" : '').
        ($$controls !== '' ? " controls='" . htmlspecialchars($$controls, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</audio>";
    
}

function b(
    string $body= "",
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
    string $translate= ""
) {
    return "<b" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</b>";
    
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
    string $translate= ""
) {
    return "<base" .     ($$href !== '' ? " href='" . htmlspecialchars($$href, ENT_QUOTES) . "'" : '').
        ($$target !== '' ? " target='" . htmlspecialchars($$target, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function bdi(
    string $body= "",
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
    string $translate= ""
) {
    return "<bdi" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</bdi>";
    
}

function bdo(
    string $body= "",
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
    string $translate= ""
) {
    return "<bdo" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</bdo>";
    
}

function blockquote(
    string $body= "",
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
    string $translate= ""
) {
    return "<blockquote" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$cite !== '' ? " cite='" . htmlspecialchars($$cite, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</blockquote>";
    
}

function body(
    string $body= "",
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
    string $translate= ""
) {
    return "<body" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$onafterprint !== '' ? " onafterprint='" . htmlspecialchars($$onafterprint, ENT_QUOTES) . "'" : '').
        ($$onbeforeprint !== '' ? " onbeforeprint='" . htmlspecialchars($$onbeforeprint, ENT_QUOTES) . "'" : '').
        ($$onbeforeunload !== '' ? " onbeforeunload='" . htmlspecialchars($$onbeforeunload, ENT_QUOTES) . "'" : '').
        ($$onhashchange !== '' ? " onhashchange='" . htmlspecialchars($$onhashchange, ENT_QUOTES) . "'" : '').
        ($$onlanguagechange !== '' ? " onlanguagechange='" . htmlspecialchars($$onlanguagechange, ENT_QUOTES) . "'" : '').
        ($$onmessage !== '' ? " onmessage='" . htmlspecialchars($$onmessage, ENT_QUOTES) . "'" : '').
        ($$onmessageerror !== '' ? " onmessageerror='" . htmlspecialchars($$onmessageerror, ENT_QUOTES) . "'" : '').
        ($$onoffline !== '' ? " onoffline='" . htmlspecialchars($$onoffline, ENT_QUOTES) . "'" : '').
        ($$ononline !== '' ? " ononline='" . htmlspecialchars($$ononline, ENT_QUOTES) . "'" : '').
        ($$onpageswap !== '' ? " onpageswap='" . htmlspecialchars($$onpageswap, ENT_QUOTES) . "'" : '').
        ($$onpagehide !== '' ? " onpagehide='" . htmlspecialchars($$onpagehide, ENT_QUOTES) . "'" : '').
        ($$onpagereveal !== '' ? " onpagereveal='" . htmlspecialchars($$onpagereveal, ENT_QUOTES) . "'" : '').
        ($$onpageshow !== '' ? " onpageshow='" . htmlspecialchars($$onpageshow, ENT_QUOTES) . "'" : '').
        ($$onpopstate !== '' ? " onpopstate='" . htmlspecialchars($$onpopstate, ENT_QUOTES) . "'" : '').
        ($$onrejectionhandled !== '' ? " onrejectionhandled='" . htmlspecialchars($$onrejectionhandled, ENT_QUOTES) . "'" : '').
        ($$onstorage !== '' ? " onstorage='" . htmlspecialchars($$onstorage, ENT_QUOTES) . "'" : '').
        ($$onunhandledrejection !== '' ? " onunhandledrejection='" . htmlspecialchars($$onunhandledrejection, ENT_QUOTES) . "'" : '').
        ($$onunload !== '' ? " onunload='" . htmlspecialchars($$onunload, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</body>";
    
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
    string $translate= ""
) {
    return "<br" .     ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function button(
    string $body= "",
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
    string $translate= ""
) {
    return "<button" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$disabled !== '' ? " disabled='" . htmlspecialchars($$disabled, ENT_QUOTES) . "'" : '').
        ($$form !== '' ? " form='" . htmlspecialchars($$form, ENT_QUOTES) . "'" : '').
        ($$formaction !== '' ? " formaction='" . htmlspecialchars($$formaction, ENT_QUOTES) . "'" : '').
        ($$formenctype !== '' ? " formenctype='" . htmlspecialchars($$formenctype, ENT_QUOTES) . "'" : '').
        ($$formmethod !== '' ? " formmethod='" . htmlspecialchars($$formmethod, ENT_QUOTES) . "'" : '').
        ($$formnovalidate !== '' ? " formnovalidate='" . htmlspecialchars($$formnovalidate, ENT_QUOTES) . "'" : '').
        ($$formtarget !== '' ? " formtarget='" . htmlspecialchars($$formtarget, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$popovertarget !== '' ? " popovertarget='" . htmlspecialchars($$popovertarget, ENT_QUOTES) . "'" : '').
        ($$popovertargetaction !== '' ? " popovertargetaction='" . htmlspecialchars($$popovertargetaction, ENT_QUOTES) . "'" : '').
        ($$type !== '' ? " type='" . htmlspecialchars($$type, ENT_QUOTES) . "'" : '').
        ($$value !== '' ? " value='" . htmlspecialchars($$value, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</button>";
    
}

function canvas(
    string $body= "",
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
    string $translate= ""
) {
    return "<canvas" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$width !== '' ? " width='" . htmlspecialchars($$width, ENT_QUOTES) . "'" : '').
        ($$height !== '' ? " height='" . htmlspecialchars($$height, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</canvas>";
    
}

function caption(
    string $body= "",
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
    string $translate= ""
) {
    return "<caption" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</caption>";
    
}

function cite(
    string $body= "",
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
    string $translate= ""
) {
    return "<cite" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</cite>";
    
}

function code(
    string $body= "",
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
    string $translate= ""
) {
    return "<code" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</code>";
    
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
    string $translate= ""
) {
    return "<col" .     ($$span !== '' ? " span='" . htmlspecialchars($$span, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function colgroup(
    string $body= "",
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
    string $translate= ""
) {
    return "<colgroup" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$span !== '' ? " span='" . htmlspecialchars($$span, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</colgroup>";
    
}

function data(
    string $body= "",
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
    string $translate= ""
) {
    return "<data" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$value !== '' ? " value='" . htmlspecialchars($$value, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</data>";
    
}

function datalist(
    string $body= "",
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
    string $translate= ""
) {
    return "<datalist" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</datalist>";
    
}

function dd(
    string $body= "",
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
    string $translate= ""
) {
    return "<dd" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</dd>";
    
}

function del(
    string $body= "",
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
    string $translate= ""
) {
    return "<del" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$cite !== '' ? " cite='" . htmlspecialchars($$cite, ENT_QUOTES) . "'" : '').
        ($$datetime !== '' ? " datetime='" . htmlspecialchars($$datetime, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</del>";
    
}

function details(
    string $body= "",
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
    string $translate= ""
) {
    return "<details" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$open !== '' ? " open='" . htmlspecialchars($$open, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</details>";
    
}

function dfn(
    string $body= "",
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
    string $translate= ""
) {
    return "<dfn" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</dfn>";
    
}

function dialog(
    string $body= "",
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
    string $translate= ""
) {
    return "<dialog" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$open !== '' ? " open='" . htmlspecialchars($$open, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</dialog>";
    
}

function div(
    string $body= "",
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
    string $translate= ""
) {
    return "<div" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</div>";
    
}

function dl(
    string $body= "",
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
    string $translate= ""
) {
    return "<dl" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</dl>";
    
}

function dt(
    string $body= "",
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
    string $translate= ""
) {
    return "<dt" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</dt>";
    
}

function em(
    string $body= "",
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
    string $translate= ""
) {
    return "<em" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</em>";
    
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
    string $translate= ""
) {
    return "<embed" .     ($$src !== '' ? " src='" . htmlspecialchars($$src, ENT_QUOTES) . "'" : '').
        ($$type !== '' ? " type='" . htmlspecialchars($$type, ENT_QUOTES) . "'" : '').
        ($$width !== '' ? " width='" . htmlspecialchars($$width, ENT_QUOTES) . "'" : '').
        ($$height !== '' ? " height='" . htmlspecialchars($$height, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function fieldset(
    string $body= "",
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
    string $translate= ""
) {
    return "<fieldset" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$disabled !== '' ? " disabled='" . htmlspecialchars($$disabled, ENT_QUOTES) . "'" : '').
        ($$form !== '' ? " form='" . htmlspecialchars($$form, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</fieldset>";
    
}

function figcaption(
    string $body= "",
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
    string $translate= ""
) {
    return "<figcaption" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</figcaption>";
    
}

function figure(
    string $body= "",
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
    string $translate= ""
) {
    return "<figure" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</figure>";
    
}

function footer(
    string $body= "",
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
    string $translate= ""
) {
    return "<footer" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</footer>";
    
}

function form(
    string $body= "",
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
    string $translate= ""
) {
    return "<form" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$acceptCharset !== '' ? " accept-charset='" . htmlspecialchars($$acceptCharset, ENT_QUOTES) . "'" : '').
        ($$action !== '' ? " action='" . htmlspecialchars($$action, ENT_QUOTES) . "'" : '').
        ($$autocomplete !== '' ? " autocomplete='" . htmlspecialchars($$autocomplete, ENT_QUOTES) . "'" : '').
        ($$enctype !== '' ? " enctype='" . htmlspecialchars($$enctype, ENT_QUOTES) . "'" : '').
        ($$method !== '' ? " method='" . htmlspecialchars($$method, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$novalidate !== '' ? " novalidate='" . htmlspecialchars($$novalidate, ENT_QUOTES) . "'" : '').
        ($$rel !== '' ? " rel='" . htmlspecialchars($$rel, ENT_QUOTES) . "'" : '').
        ($$target !== '' ? " target='" . htmlspecialchars($$target, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</form>";
    
}

function h1(
    string $body= "",
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
    string $translate= ""
) {
    return "<h1" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</h1>";
    
}

function head(
    string $body= "",
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
    string $translate= ""
) {
    return "<head" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</head>";
    
}

function header(
    string $body= "",
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
    string $translate= ""
) {
    return "<header" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</header>";
    
}

function hgroup(
    string $body= "",
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
    string $translate= ""
) {
    return "<hgroup" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</hgroup>";
    
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
    string $translate= ""
) {
    return "<hr" .     ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function html(
    string $body= "",
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
    string $translate= ""
) {
    return "<html" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$manifest !== '' ? " manifest='" . htmlspecialchars($$manifest, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</html>";
    
}

function i(
    string $body= "",
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
    string $translate= ""
) {
    return "<i" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</i>";
    
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
    string $translate= ""
) {
    return "<iframe" .     ($$src !== '' ? " src='" . htmlspecialchars($$src, ENT_QUOTES) . "'" : '').
        ($$srcdoc !== '' ? " srcdoc='" . htmlspecialchars($$srcdoc, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$sandbox !== '' ? " sandbox='" . htmlspecialchars($$sandbox, ENT_QUOTES) . "'" : '').
        ($$allow !== '' ? " allow='" . htmlspecialchars($$allow, ENT_QUOTES) . "'" : '').
        ($$allowfullscreen !== '' ? " allowfullscreen='" . htmlspecialchars($$allowfullscreen, ENT_QUOTES) . "'" : '').
        ($$width !== '' ? " width='" . htmlspecialchars($$width, ENT_QUOTES) . "'" : '').
        ($$height !== '' ? " height='" . htmlspecialchars($$height, ENT_QUOTES) . "'" : '').
        ($$referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($$referrerpolicy, ENT_QUOTES) . "'" : '').
        ($$loading !== '' ? " loading='" . htmlspecialchars($$loading, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
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
    string $translate= ""
) {
    return "<img" .     ($$alt !== '' ? " alt='" . htmlspecialchars($$alt, ENT_QUOTES) . "'" : '').
        ($$src !== '' ? " src='" . htmlspecialchars($$src, ENT_QUOTES) . "'" : '').
        ($$srcset !== '' ? " srcset='" . htmlspecialchars($$srcset, ENT_QUOTES) . "'" : '').
        ($$sizes !== '' ? " sizes='" . htmlspecialchars($$sizes, ENT_QUOTES) . "'" : '').
        ($$crossorigin !== '' ? " crossorigin='" . htmlspecialchars($$crossorigin, ENT_QUOTES) . "'" : '').
        ($$usemap !== '' ? " usemap='" . htmlspecialchars($$usemap, ENT_QUOTES) . "'" : '').
        ($$ismap !== '' ? " ismap='" . htmlspecialchars($$ismap, ENT_QUOTES) . "'" : '').
        ($$width !== '' ? " width='" . htmlspecialchars($$width, ENT_QUOTES) . "'" : '').
        ($$height !== '' ? " height='" . htmlspecialchars($$height, ENT_QUOTES) . "'" : '').
        ($$referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($$referrerpolicy, ENT_QUOTES) . "'" : '').
        ($$decoding !== '' ? " decoding='" . htmlspecialchars($$decoding, ENT_QUOTES) . "'" : '').
        ($$loading !== '' ? " loading='" . htmlspecialchars($$loading, ENT_QUOTES) . "'" : '').
        ($$fetchpriority !== '' ? " fetchpriority='" . htmlspecialchars($$fetchpriority, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
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
    string $translate= ""
) {
    return "<input" .     ($$accept !== '' ? " accept='" . htmlspecialchars($$accept, ENT_QUOTES) . "'" : '').
        ($$alt !== '' ? " alt='" . htmlspecialchars($$alt, ENT_QUOTES) . "'" : '').
        ($$autocomplete !== '' ? " autocomplete='" . htmlspecialchars($$autocomplete, ENT_QUOTES) . "'" : '').
        ($$checked !== '' ? " checked='" . htmlspecialchars($$checked, ENT_QUOTES) . "'" : '').
        ($$dirname !== '' ? " dirname='" . htmlspecialchars($$dirname, ENT_QUOTES) . "'" : '').
        ($$disabled !== '' ? " disabled='" . htmlspecialchars($$disabled, ENT_QUOTES) . "'" : '').
        ($$form !== '' ? " form='" . htmlspecialchars($$form, ENT_QUOTES) . "'" : '').
        ($$formaction !== '' ? " formaction='" . htmlspecialchars($$formaction, ENT_QUOTES) . "'" : '').
        ($$formenctype !== '' ? " formenctype='" . htmlspecialchars($$formenctype, ENT_QUOTES) . "'" : '').
        ($$formmethod !== '' ? " formmethod='" . htmlspecialchars($$formmethod, ENT_QUOTES) . "'" : '').
        ($$formnovalidate !== '' ? " formnovalidate='" . htmlspecialchars($$formnovalidate, ENT_QUOTES) . "'" : '').
        ($$formtarget !== '' ? " formtarget='" . htmlspecialchars($$formtarget, ENT_QUOTES) . "'" : '').
        ($$height !== '' ? " height='" . htmlspecialchars($$height, ENT_QUOTES) . "'" : '').
        ($$list !== '' ? " list='" . htmlspecialchars($$list, ENT_QUOTES) . "'" : '').
        ($$max !== '' ? " max='" . htmlspecialchars($$max, ENT_QUOTES) . "'" : '').
        ($$maxlength !== '' ? " maxlength='" . htmlspecialchars($$maxlength, ENT_QUOTES) . "'" : '').
        ($$min !== '' ? " min='" . htmlspecialchars($$min, ENT_QUOTES) . "'" : '').
        ($$minlength !== '' ? " minlength='" . htmlspecialchars($$minlength, ENT_QUOTES) . "'" : '').
        ($$multiple !== '' ? " multiple='" . htmlspecialchars($$multiple, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$pattern !== '' ? " pattern='" . htmlspecialchars($$pattern, ENT_QUOTES) . "'" : '').
        ($$placeholder !== '' ? " placeholder='" . htmlspecialchars($$placeholder, ENT_QUOTES) . "'" : '').
        ($$popovertarget !== '' ? " popovertarget='" . htmlspecialchars($$popovertarget, ENT_QUOTES) . "'" : '').
        ($$popovertargetaction !== '' ? " popovertargetaction='" . htmlspecialchars($$popovertargetaction, ENT_QUOTES) . "'" : '').
        ($$readonly !== '' ? " readonly='" . htmlspecialchars($$readonly, ENT_QUOTES) . "'" : '').
        ($$required !== '' ? " required='" . htmlspecialchars($$required, ENT_QUOTES) . "'" : '').
        ($$size !== '' ? " size='" . htmlspecialchars($$size, ENT_QUOTES) . "'" : '').
        ($$src !== '' ? " src='" . htmlspecialchars($$src, ENT_QUOTES) . "'" : '').
        ($$step !== '' ? " step='" . htmlspecialchars($$step, ENT_QUOTES) . "'" : '').
        ($$type !== '' ? " type='" . htmlspecialchars($$type, ENT_QUOTES) . "'" : '').
        ($$value !== '' ? " value='" . htmlspecialchars($$value, ENT_QUOTES) . "'" : '').
        ($$width !== '' ? " width='" . htmlspecialchars($$width, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function ins(
    string $body= "",
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
    string $translate= ""
) {
    return "<ins" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$cite !== '' ? " cite='" . htmlspecialchars($$cite, ENT_QUOTES) . "'" : '').
        ($$datetime !== '' ? " datetime='" . htmlspecialchars($$datetime, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</ins>";
    
}

function kbd(
    string $body= "",
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
    string $translate= ""
) {
    return "<kbd" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</kbd>";
    
}

function label(
    string $body= "",
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
    string $translate= ""
) {
    return "<label" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$for !== '' ? " for='" . htmlspecialchars($$for, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</label>";
    
}

function legend(
    string $body= "",
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
    string $translate= ""
) {
    return "<legend" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</legend>";
    
}

function li(
    string $body= "",
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
    string $translate= ""
) {
    return "<li" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$value !== '' ? " value='" . htmlspecialchars($$value, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</li>";
    
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
    string $translate= ""
) {
    return "<link" .     ($$href !== '' ? " href='" . htmlspecialchars($$href, ENT_QUOTES) . "'" : '').
        ($$crossorigin !== '' ? " crossorigin='" . htmlspecialchars($$crossorigin, ENT_QUOTES) . "'" : '').
        ($$rel !== '' ? " rel='" . htmlspecialchars($$rel, ENT_QUOTES) . "'" : '').
        ($$as !== '' ? " as='" . htmlspecialchars($$as, ENT_QUOTES) . "'" : '').
        ($$media !== '' ? " media='" . htmlspecialchars($$media, ENT_QUOTES) . "'" : '').
        ($$hreflang !== '' ? " hreflang='" . htmlspecialchars($$hreflang, ENT_QUOTES) . "'" : '').
        ($$type !== '' ? " type='" . htmlspecialchars($$type, ENT_QUOTES) . "'" : '').
        ($$sizes !== '' ? " sizes='" . htmlspecialchars($$sizes, ENT_QUOTES) . "'" : '').
        ($$imagesrcset !== '' ? " imagesrcset='" . htmlspecialchars($$imagesrcset, ENT_QUOTES) . "'" : '').
        ($$imagesizes !== '' ? " imagesizes='" . htmlspecialchars($$imagesizes, ENT_QUOTES) . "'" : '').
        ($$referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($$referrerpolicy, ENT_QUOTES) . "'" : '').
        ($$integrity !== '' ? " integrity='" . htmlspecialchars($$integrity, ENT_QUOTES) . "'" : '').
        ($$blocking !== '' ? " blocking='" . htmlspecialchars($$blocking, ENT_QUOTES) . "'" : '').
        ($$color !== '' ? " color='" . htmlspecialchars($$color, ENT_QUOTES) . "'" : '').
        ($$disabled !== '' ? " disabled='" . htmlspecialchars($$disabled, ENT_QUOTES) . "'" : '').
        ($$fetchpriority !== '' ? " fetchpriority='" . htmlspecialchars($$fetchpriority, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function main(
    string $body= "",
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
    string $translate= ""
) {
    return "<main" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</main>";
    
}

function map(
    string $body= "",
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
    string $translate= ""
) {
    return "<map" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</map>";
    
}

function mark(
    string $body= "",
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
    string $translate= ""
) {
    return "<mark" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</mark>";
    
}

function math(
    string $body= "",
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
    string $translate= ""
) {
    return "<math" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</math>";
    
}

function menu(
    string $body= "",
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
    string $translate= ""
) {
    return "<menu" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</menu>";
    
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
    string $translate= ""
) {
    return "<meta" .     ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$httpEquiv !== '' ? " http-equiv='" . htmlspecialchars($$httpEquiv, ENT_QUOTES) . "'" : '').
        ($$content !== '' ? " content='" . htmlspecialchars($$content, ENT_QUOTES) . "'" : '').
        ($$charset !== '' ? " charset='" . htmlspecialchars($$charset, ENT_QUOTES) . "'" : '').
        ($$media !== '' ? " media='" . htmlspecialchars($$media, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function meter(
    string $body= "",
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
    string $translate= ""
) {
    return "<meter" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$value !== '' ? " value='" . htmlspecialchars($$value, ENT_QUOTES) . "'" : '').
        ($$min !== '' ? " min='" . htmlspecialchars($$min, ENT_QUOTES) . "'" : '').
        ($$max !== '' ? " max='" . htmlspecialchars($$max, ENT_QUOTES) . "'" : '').
        ($$low !== '' ? " low='" . htmlspecialchars($$low, ENT_QUOTES) . "'" : '').
        ($$high !== '' ? " high='" . htmlspecialchars($$high, ENT_QUOTES) . "'" : '').
        ($$optimum !== '' ? " optimum='" . htmlspecialchars($$optimum, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</meter>";
    
}

function nav(
    string $body= "",
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
    string $translate= ""
) {
    return "<nav" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</nav>";
    
}

function noscript(
    string $body= "",
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
    string $translate= ""
) {
    return "<noscript" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</noscript>";
    
}

function object(
    string $body= "",
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
    string $translate= ""
) {
    return "<object" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$data !== '' ? " data='" . htmlspecialchars($$data, ENT_QUOTES) . "'" : '').
        ($$type !== '' ? " type='" . htmlspecialchars($$type, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$form !== '' ? " form='" . htmlspecialchars($$form, ENT_QUOTES) . "'" : '').
        ($$width !== '' ? " width='" . htmlspecialchars($$width, ENT_QUOTES) . "'" : '').
        ($$height !== '' ? " height='" . htmlspecialchars($$height, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</object>";
    
}

function ol(
    string $body= "",
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
    string $translate= ""
) {
    return "<ol" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$reversed !== '' ? " reversed='" . htmlspecialchars($$reversed, ENT_QUOTES) . "'" : '').
        ($$start !== '' ? " start='" . htmlspecialchars($$start, ENT_QUOTES) . "'" : '').
        ($$type !== '' ? " type='" . htmlspecialchars($$type, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</ol>";
    
}

function optgroup(
    string $body= "",
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
    string $translate= ""
) {
    return "<optgroup" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$disabled !== '' ? " disabled='" . htmlspecialchars($$disabled, ENT_QUOTES) . "'" : '').
        ($$label !== '' ? " label='" . htmlspecialchars($$label, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</optgroup>";
    
}

function option(
    string $body= "",
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
    string $translate= ""
) {
    return "<option" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$disabled !== '' ? " disabled='" . htmlspecialchars($$disabled, ENT_QUOTES) . "'" : '').
        ($$label !== '' ? " label='" . htmlspecialchars($$label, ENT_QUOTES) . "'" : '').
        ($$selected !== '' ? " selected='" . htmlspecialchars($$selected, ENT_QUOTES) . "'" : '').
        ($$value !== '' ? " value='" . htmlspecialchars($$value, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</option>";
    
}

function output(
    string $body= "",
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
    string $translate= ""
) {
    return "<output" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$for !== '' ? " for='" . htmlspecialchars($$for, ENT_QUOTES) . "'" : '').
        ($$form !== '' ? " form='" . htmlspecialchars($$form, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</output>";
    
}

function p(
    string $body= "",
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
    string $translate= ""
) {
    return "<p" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</p>";
    
}

function picture(
    string $body= "",
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
    string $translate= ""
) {
    return "<picture" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</picture>";
    
}

function pre(
    string $body= "",
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
    string $translate= ""
) {
    return "<pre" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</pre>";
    
}

function progress(
    string $body= "",
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
    string $translate= ""
) {
    return "<progress" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$value !== '' ? " value='" . htmlspecialchars($$value, ENT_QUOTES) . "'" : '').
        ($$max !== '' ? " max='" . htmlspecialchars($$max, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</progress>";
    
}

function q(
    string $body= "",
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
    string $translate= ""
) {
    return "<q" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$cite !== '' ? " cite='" . htmlspecialchars($$cite, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</q>";
    
}

function rp(
    string $body= "",
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
    string $translate= ""
) {
    return "<rp" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</rp>";
    
}

function rt(
    string $body= "",
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
    string $translate= ""
) {
    return "<rt" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</rt>";
    
}

function ruby(
    string $body= "",
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
    string $translate= ""
) {
    return "<ruby" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</ruby>";
    
}

function s(
    string $body= "",
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
    string $translate= ""
) {
    return "<s" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</s>";
    
}

function samp(
    string $body= "",
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
    string $translate= ""
) {
    return "<samp" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</samp>";
    
}

function script(
    string $body= "",
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
    string $translate= ""
) {
    return "<script" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$src !== '' ? " src='" . htmlspecialchars($$src, ENT_QUOTES) . "'" : '').
        ($$type !== '' ? " type='" . htmlspecialchars($$type, ENT_QUOTES) . "'" : '').
        ($$nomodule !== '' ? " nomodule='" . htmlspecialchars($$nomodule, ENT_QUOTES) . "'" : '').
        ($$async !== '' ? " async='" . htmlspecialchars($$async, ENT_QUOTES) . "'" : '').
        ($$defer !== '' ? " defer='" . htmlspecialchars($$defer, ENT_QUOTES) . "'" : '').
        ($$crossorigin !== '' ? " crossorigin='" . htmlspecialchars($$crossorigin, ENT_QUOTES) . "'" : '').
        ($$integrity !== '' ? " integrity='" . htmlspecialchars($$integrity, ENT_QUOTES) . "'" : '').
        ($$referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($$referrerpolicy, ENT_QUOTES) . "'" : '').
        ($$blocking !== '' ? " blocking='" . htmlspecialchars($$blocking, ENT_QUOTES) . "'" : '').
        ($$fetchpriority !== '' ? " fetchpriority='" . htmlspecialchars($$fetchpriority, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</script>";
    
}

function search(
    string $body= "",
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
    string $translate= ""
) {
    return "<search" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</search>";
    
}

function section(
    string $body= "",
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
    string $translate= ""
) {
    return "<section" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</section>";
    
}

function select(
    string $body= "",
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
    string $translate= ""
) {
    return "<select" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$autocomplete !== '' ? " autocomplete='" . htmlspecialchars($$autocomplete, ENT_QUOTES) . "'" : '').
        ($$disabled !== '' ? " disabled='" . htmlspecialchars($$disabled, ENT_QUOTES) . "'" : '').
        ($$form !== '' ? " form='" . htmlspecialchars($$form, ENT_QUOTES) . "'" : '').
        ($$multiple !== '' ? " multiple='" . htmlspecialchars($$multiple, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$required !== '' ? " required='" . htmlspecialchars($$required, ENT_QUOTES) . "'" : '').
        ($$size !== '' ? " size='" . htmlspecialchars($$size, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</select>";
    
}

function slot(
    string $body= "",
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
    string $translate= ""
) {
    return "<slot" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</slot>";
    
}

function small(
    string $body= "",
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
    string $translate= ""
) {
    return "<small" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</small>";
    
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
    string $translate= ""
) {
    return "<source" .     ($$type !== '' ? " type='" . htmlspecialchars($$type, ENT_QUOTES) . "'" : '').
        ($$media !== '' ? " media='" . htmlspecialchars($$media, ENT_QUOTES) . "'" : '').
        ($$src !== '' ? " src='" . htmlspecialchars($$src, ENT_QUOTES) . "'" : '').
        ($$srcset !== '' ? " srcset='" . htmlspecialchars($$srcset, ENT_QUOTES) . "'" : '').
        ($$sizes !== '' ? " sizes='" . htmlspecialchars($$sizes, ENT_QUOTES) . "'" : '').
        ($$width !== '' ? " width='" . htmlspecialchars($$width, ENT_QUOTES) . "'" : '').
        ($$height !== '' ? " height='" . htmlspecialchars($$height, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function span(
    string $body= "",
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
    string $translate= ""
) {
    return "<span" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</span>";
    
}

function strong(
    string $body= "",
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
    string $translate= ""
) {
    return "<strong" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</strong>";
    
}

function style(
    string $body= "",
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
    string $translate= ""
) {
    return "<style" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$media !== '' ? " media='" . htmlspecialchars($$media, ENT_QUOTES) . "'" : '').
        ($$blocking !== '' ? " blocking='" . htmlspecialchars($$blocking, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</style>";
    
}

function sub(
    string $body= "",
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
    string $translate= ""
) {
    return "<sub" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</sub>";
    
}

function summary(
    string $body= "",
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
    string $translate= ""
) {
    return "<summary" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</summary>";
    
}

function sup(
    string $body= "",
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
    string $translate= ""
) {
    return "<sup" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</sup>";
    
}

function svg(
    string $body= "",
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
    string $translate= ""
) {
    return "<svg" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</svg>";
    
}

function table(
    string $body= "",
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
    string $translate= ""
) {
    return "<table" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</table>";
    
}

function tbody(
    string $body= "",
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
    string $translate= ""
) {
    return "<tbody" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</tbody>";
    
}

function td(
    string $body= "",
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
    string $translate= ""
) {
    return "<td" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$colspan !== '' ? " colspan='" . htmlspecialchars($$colspan, ENT_QUOTES) . "'" : '').
        ($$rowspan !== '' ? " rowspan='" . htmlspecialchars($$rowspan, ENT_QUOTES) . "'" : '').
        ($$headers !== '' ? " headers='" . htmlspecialchars($$headers, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</td>";
    
}

function template(
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
    string $translate= ""
) {
    return "<template" .     ($$shadowrootmode !== '' ? " shadowrootmode='" . htmlspecialchars($$shadowrootmode, ENT_QUOTES) . "'" : '').
        ($$shadowrootdelegatesfocus !== '' ? " shadowrootdelegatesfocus='" . htmlspecialchars($$shadowrootdelegatesfocus, ENT_QUOTES) . "'" : '').
        ($$shadowrootclonable !== '' ? " shadowrootclonable='" . htmlspecialchars($$shadowrootclonable, ENT_QUOTES) . "'" : '').
        ($$shadowrootserializable !== '' ? " shadowrootserializable='" . htmlspecialchars($$shadowrootserializable, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function textarea(
    string $body= "",
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
    string $translate= ""
) {
    return "<textarea" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$autocomplete !== '' ? " autocomplete='" . htmlspecialchars($$autocomplete, ENT_QUOTES) . "'" : '').
        ($$cols !== '' ? " cols='" . htmlspecialchars($$cols, ENT_QUOTES) . "'" : '').
        ($$dirname !== '' ? " dirname='" . htmlspecialchars($$dirname, ENT_QUOTES) . "'" : '').
        ($$disabled !== '' ? " disabled='" . htmlspecialchars($$disabled, ENT_QUOTES) . "'" : '').
        ($$form !== '' ? " form='" . htmlspecialchars($$form, ENT_QUOTES) . "'" : '').
        ($$maxlength !== '' ? " maxlength='" . htmlspecialchars($$maxlength, ENT_QUOTES) . "'" : '').
        ($$minlength !== '' ? " minlength='" . htmlspecialchars($$minlength, ENT_QUOTES) . "'" : '').
        ($$name !== '' ? " name='" . htmlspecialchars($$name, ENT_QUOTES) . "'" : '').
        ($$placeholder !== '' ? " placeholder='" . htmlspecialchars($$placeholder, ENT_QUOTES) . "'" : '').
        ($$readonly !== '' ? " readonly='" . htmlspecialchars($$readonly, ENT_QUOTES) . "'" : '').
        ($$required !== '' ? " required='" . htmlspecialchars($$required, ENT_QUOTES) . "'" : '').
        ($$rows !== '' ? " rows='" . htmlspecialchars($$rows, ENT_QUOTES) . "'" : '').
        ($$wrap !== '' ? " wrap='" . htmlspecialchars($$wrap, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</textarea>";
    
}

function tfoot(
    string $body= "",
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
    string $translate= ""
) {
    return "<tfoot" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</tfoot>";
    
}

function th(
    string $body= "",
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
    string $translate= ""
) {
    return "<th" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$colspan !== '' ? " colspan='" . htmlspecialchars($$colspan, ENT_QUOTES) . "'" : '').
        ($$rowspan !== '' ? " rowspan='" . htmlspecialchars($$rowspan, ENT_QUOTES) . "'" : '').
        ($$headers !== '' ? " headers='" . htmlspecialchars($$headers, ENT_QUOTES) . "'" : '').
        ($$scope !== '' ? " scope='" . htmlspecialchars($$scope, ENT_QUOTES) . "'" : '').
        ($$abbr !== '' ? " abbr='" . htmlspecialchars($$abbr, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</th>";
    
}

function thead(
    string $body= "",
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
    string $translate= ""
) {
    return "<thead" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</thead>";
    
}

function time(
    string $body= "",
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
    string $translate= ""
) {
    return "<time" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$datetime !== '' ? " datetime='" . htmlspecialchars($$datetime, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</time>";
    
}

function title(
    string $body= "",
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
    string $translate= ""
) {
    return "<title" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</title>";
    
}

function tr(
    string $body= "",
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
    string $translate= ""
) {
    return "<tr" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</tr>";
    
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
    string $translate= ""
) {
    return "<track" .     ($$default !== '' ? " default='" . htmlspecialchars($$default, ENT_QUOTES) . "'" : '').
        ($$kind !== '' ? " kind='" . htmlspecialchars($$kind, ENT_QUOTES) . "'" : '').
        ($$label !== '' ? " label='" . htmlspecialchars($$label, ENT_QUOTES) . "'" : '').
        ($$src !== '' ? " src='" . htmlspecialchars($$src, ENT_QUOTES) . "'" : '').
        ($$srclang !== '' ? " srclang='" . htmlspecialchars($$srclang, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

function u(
    string $body= "",
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
    string $translate= ""
) {
    return "<u" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</u>";
    
}

function ul(
    string $body= "",
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
    string $translate= ""
) {
    return "<ul" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</ul>";
    
}

function variable(
    string $body= "",
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
    string $translate= ""
) {
    return "<var" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</var>";
    
}

function video(
    string $body= "",
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
    string $translate= ""
) {
    return "<video" .     ($$body !== '' ? " body='" . htmlspecialchars($$body, ENT_QUOTES) . "'" : '').
        ($$src !== '' ? " src='" . htmlspecialchars($$src, ENT_QUOTES) . "'" : '').
        ($$crossorigin !== '' ? " crossorigin='" . htmlspecialchars($$crossorigin, ENT_QUOTES) . "'" : '').
        ($$poster !== '' ? " poster='" . htmlspecialchars($$poster, ENT_QUOTES) . "'" : '').
        ($$preload !== '' ? " preload='" . htmlspecialchars($$preload, ENT_QUOTES) . "'" : '').
        ($$autoplay !== '' ? " autoplay='" . htmlspecialchars($$autoplay, ENT_QUOTES) . "'" : '').
        ($$playsinline !== '' ? " playsinline='" . htmlspecialchars($$playsinline, ENT_QUOTES) . "'" : '').
        ($$loop !== '' ? " loop='" . htmlspecialchars($$loop, ENT_QUOTES) . "'" : '').
        ($$muted !== '' ? " muted='" . htmlspecialchars($$muted, ENT_QUOTES) . "'" : '').
        ($$controls !== '' ? " controls='" . htmlspecialchars($$controls, ENT_QUOTES) . "'" : '').
        ($$width !== '' ? " width='" . htmlspecialchars($$width, ENT_QUOTES) . "'" : '').
        ($$height !== '' ? " height='" . htmlspecialchars($$height, ENT_QUOTES) . "'" : '').
        ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). ">{$body}</video>";
    
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
    string $translate= ""
) {
    return "<wbr" .     ($$accesskey !== '' ? " accesskey='" . htmlspecialchars($$accesskey, ENT_QUOTES) . "'" : '').
        ($$autocapitalize !== '' ? " autocapitalize='" . htmlspecialchars($$autocapitalize, ENT_QUOTES) . "'" : '').
        ($$class !== '' ? " class='" . htmlspecialchars($$class, ENT_QUOTES) . "'" : '').
        ($$contenteditable !== '' ? " contenteditable='" . htmlspecialchars($$contenteditable, ENT_QUOTES) . "'" : '').
        ($$contextmenu !== '' ? " contextmenu='" . htmlspecialchars($$contextmenu, ENT_QUOTES) . "'" : '').
        ($$dir !== '' ? " dir='" . htmlspecialchars($$dir, ENT_QUOTES) . "'" : '').
        ($$draggable !== '' ? " draggable='" . htmlspecialchars($$draggable, ENT_QUOTES) . "'" : '').
        ($$dropzone !== '' ? " dropzone='" . htmlspecialchars($$dropzone, ENT_QUOTES) . "'" : '').
        ($$hidden !== '' ? " hidden='" . htmlspecialchars($$hidden, ENT_QUOTES) . "'" : '').
        ($$id !== '' ? " id='" . htmlspecialchars($$id, ENT_QUOTES) . "'" : '').
        ($$itemid !== '' ? " itemid='" . htmlspecialchars($$itemid, ENT_QUOTES) . "'" : '').
        ($$itemprop !== '' ? " itemprop='" . htmlspecialchars($$itemprop, ENT_QUOTES) . "'" : '').
        ($$itemref !== '' ? " itemref='" . htmlspecialchars($$itemref, ENT_QUOTES) . "'" : '').
        ($$itemscope !== '' ? " itemscope='" . htmlspecialchars($$itemscope, ENT_QUOTES) . "'" : '').
        ($$itemtype !== '' ? " itemtype='" . htmlspecialchars($$itemtype, ENT_QUOTES) . "'" : '').
        ($$lang !== '' ? " lang='" . htmlspecialchars($$lang, ENT_QUOTES) . "'" : '').
        ($$spellcheck !== '' ? " spellcheck='" . htmlspecialchars($$spellcheck, ENT_QUOTES) . "'" : '').
        ($$style !== '' ? " style='" . htmlspecialchars($$style, ENT_QUOTES) . "'" : '').
        ($$tabindex !== '' ? " tabindex='" . htmlspecialchars($$tabindex, ENT_QUOTES) . "'" : '').
        ($$title !== '' ? " title='" . htmlspecialchars($$title, ENT_QUOTES) . "'" : '').
        ($$translate !== '' ? " translate='" . htmlspecialchars($$translate, ENT_QUOTES) . "'" : ''). "/>";
    
}

