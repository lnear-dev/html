<?php

namespace html;

function a(string $accesskey= "",
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
string $href= "",
string $target= "",
string $download= "",
string $ping= "",
string $rel= "",
string $hreflang= "",
string $type= "",
string $referrerpolicy= "",
string $body= "") { return "<a" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($href !== '' ? " href='" . htmlspecialchars($href, ENT_QUOTES) . "'" : '').
($target !== '' ? " target='" . htmlspecialchars($target, ENT_QUOTES) . "'" : '').
($download !== '' ? " download='" . htmlspecialchars($download, ENT_QUOTES) . "'" : '').
($ping !== '' ? " ping='" . htmlspecialchars($ping, ENT_QUOTES) . "'" : '').
($rel !== '' ? " rel='" . htmlspecialchars($rel, ENT_QUOTES) . "'" : '').
($hreflang !== '' ? " hreflang='" . htmlspecialchars($hreflang, ENT_QUOTES) . "'" : '').
($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</a>"; }

function abbr(string $accesskey= "",
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
string $body= "") { return "<abbr" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</abbr>"; }

function address(string $accesskey= "",
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
string $body= "") { return "<address" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</address>"; }

function area(string $accesskey= "",
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
string $alt= "",
string $coords= "",
string $shape= "",
string $href= "",
string $target= "",
string $download= "",
string $ping= "",
string $rel= "",
string $referrerpolicy= "") { return "<area" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($alt !== '' ? " alt='" . htmlspecialchars($alt, ENT_QUOTES) . "'" : '').
($coords !== '' ? " coords='" . htmlspecialchars($coords, ENT_QUOTES) . "'" : '').
($shape !== '' ? " shape='" . htmlspecialchars($shape, ENT_QUOTES) . "'" : '').
($href !== '' ? " href='" . htmlspecialchars($href, ENT_QUOTES) . "'" : '').
($target !== '' ? " target='" . htmlspecialchars($target, ENT_QUOTES) . "'" : '').
($download !== '' ? " download='" . htmlspecialchars($download, ENT_QUOTES) . "'" : '').
($ping !== '' ? " ping='" . htmlspecialchars($ping, ENT_QUOTES) . "'" : '').
($rel !== '' ? " rel='" . htmlspecialchars($rel, ENT_QUOTES) . "'" : '').
($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : ''). "/>"; }

function article(string $accesskey= "",
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
string $body= "") { return "<article" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</article>"; }

function aside(string $accesskey= "",
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
string $body= "") { return "<aside" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</aside>"; }

function audio(string $accesskey= "",
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
string $src= "",
string $crossorigin= "",
string $preload= "",
string $autoplay= "",
string $loop= "",
string $muted= "",
string $controls= "",
string $body= "") { return "<audio" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
($crossorigin !== '' ? " crossorigin='" . htmlspecialchars($crossorigin, ENT_QUOTES) . "'" : '').
($preload !== '' ? " preload='" . htmlspecialchars($preload, ENT_QUOTES) . "'" : '').
($autoplay !== '' ? " autoplay='" . htmlspecialchars($autoplay, ENT_QUOTES) . "'" : '').
($loop !== '' ? " loop='" . htmlspecialchars($loop, ENT_QUOTES) . "'" : '').
($muted !== '' ? " muted='" . htmlspecialchars($muted, ENT_QUOTES) . "'" : '').
($controls !== '' ? " controls='" . htmlspecialchars($controls, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</audio>"; }

function b(string $accesskey= "",
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
string $body= "") { return "<b" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</b>"; }

function base(string $accesskey= "",
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
string $href= "",
string $target= "") { return "<base" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($href !== '' ? " href='" . htmlspecialchars($href, ENT_QUOTES) . "'" : '').
($target !== '' ? " target='" . htmlspecialchars($target, ENT_QUOTES) . "'" : ''). "/>"; }

function bdi(string $accesskey= "",
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
string $body= "") { return "<bdi" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</bdi>"; }

function bdo(string $accesskey= "",
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
string $body= "") { return "<bdo" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</bdo>"; }

function blockquote(string $accesskey= "",
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
string $cite= "",
string $body= "") { return "<blockquote" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($cite !== '' ? " cite='" . htmlspecialchars($cite, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</blockquote>"; }

function body(string $accesskey= "",
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
string $body= "") { return "<body" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($onafterprint !== '' ? " onafterprint='" . htmlspecialchars($onafterprint, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</body>"; }

function br(string $accesskey= "",
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
string $translate= "") { return "<br" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : ''). "/>"; }

function button(string $accesskey= "",
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
string $body= "") { return "<button" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</button>"; }

function canvas(string $accesskey= "",
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
string $width= "",
string $height= "",
string $body= "") { return "<canvas" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</canvas>"; }

function caption(string $accesskey= "",
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
string $body= "") { return "<caption" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</caption>"; }

function cite(string $accesskey= "",
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
string $body= "") { return "<cite" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</cite>"; }

function code(string $accesskey= "",
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
string $body= "") { return "<code" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</code>"; }

function col(string $accesskey= "",
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
string $span= "") { return "<col" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($span !== '' ? " span='" . htmlspecialchars($span, ENT_QUOTES) . "'" : ''). "/>"; }

function colgroup(string $accesskey= "",
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
string $span= "",
string $body= "") { return "<colgroup" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($span !== '' ? " span='" . htmlspecialchars($span, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</colgroup>"; }

function data(string $accesskey= "",
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
string $value= "",
string $body= "") { return "<data" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</data>"; }

function datalist(string $accesskey= "",
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
string $body= "") { return "<datalist" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</datalist>"; }

function dd(string $accesskey= "",
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
string $body= "") { return "<dd" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</dd>"; }

function del(string $accesskey= "",
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
string $cite= "",
string $datetime= "",
string $body= "") { return "<del" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($cite !== '' ? " cite='" . htmlspecialchars($cite, ENT_QUOTES) . "'" : '').
($datetime !== '' ? " datetime='" . htmlspecialchars($datetime, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</del>"; }

function details(string $accesskey= "",
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
string $name= "",
string $open= "",
string $body= "") { return "<details" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($open !== '' ? " open='" . htmlspecialchars($open, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</details>"; }

function dfn(string $accesskey= "",
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
string $body= "") { return "<dfn" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</dfn>"; }

function dialog(string $accesskey= "",
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
string $open= "",
string $body= "") { return "<dialog" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($open !== '' ? " open='" . htmlspecialchars($open, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</dialog>"; }

function div(string $accesskey= "",
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
string $body= "") { return "<div" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</div>"; }

function dl(string $accesskey= "",
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
string $body= "") { return "<dl" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</dl>"; }

function dt(string $accesskey= "",
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
string $body= "") { return "<dt" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</dt>"; }

function em(string $accesskey= "",
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
string $body= "") { return "<em" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</em>"; }

function embed(string $accesskey= "",
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
string $src= "",
string $type= "",
string $width= "",
string $height= "") { return "<embed" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : ''). "/>"; }

function fieldset(string $accesskey= "",
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
string $disabled= "",
string $form= "",
string $name= "",
string $body= "") { return "<fieldset" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</fieldset>"; }

function figcaption(string $accesskey= "",
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
string $body= "") { return "<figcaption" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</figcaption>"; }

function figure(string $accesskey= "",
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
string $body= "") { return "<figure" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</figure>"; }

function footer(string $accesskey= "",
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
string $body= "") { return "<footer" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</footer>"; }

function form(string $accesskey= "",
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
string $acceptCharset= "",
string $action= "",
string $autocomplete= "",
string $enctype= "",
string $method= "",
string $name= "",
string $novalidate= "",
string $rel= "",
string $target= "",
string $body= "") { return "<form" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($acceptCharset !== '' ? " accept-charset='" . htmlspecialchars($acceptCharset, ENT_QUOTES) . "'" : '').
($action !== '' ? " action='" . htmlspecialchars($action, ENT_QUOTES) . "'" : '').
($autocomplete !== '' ? " autocomplete='" . htmlspecialchars($autocomplete, ENT_QUOTES) . "'" : '').
($enctype !== '' ? " enctype='" . htmlspecialchars($enctype, ENT_QUOTES) . "'" : '').
($method !== '' ? " method='" . htmlspecialchars($method, ENT_QUOTES) . "'" : '').
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($novalidate !== '' ? " novalidate='" . htmlspecialchars($novalidate, ENT_QUOTES) . "'" : '').
($rel !== '' ? " rel='" . htmlspecialchars($rel, ENT_QUOTES) . "'" : '').
($target !== '' ? " target='" . htmlspecialchars($target, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</form>"; }

function h1(string $accesskey= "",
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
string $body= "") { return "<h1" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</h1>"; }

function head(string $accesskey= "",
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
string $body= "") { return "<head" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</head>"; }

function header(string $accesskey= "",
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
string $body= "") { return "<header" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</header>"; }

function hgroup(string $accesskey= "",
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
string $body= "") { return "<hgroup" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</hgroup>"; }

function hr(string $accesskey= "",
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
string $translate= "") { return "<hr" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : ''). "/>"; }

function html(string $accesskey= "",
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
string $manifest= "",
string $body= "") { return "<html" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($manifest !== '' ? " manifest='" . htmlspecialchars($manifest, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</html>"; }

function i(string $accesskey= "",
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
string $body= "") { return "<i" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</i>"; }

function iframe(string $accesskey= "",
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
string $src= "",
string $srcdoc= "",
string $name= "",
string $sandbox= "",
string $allow= "",
string $allowfullscreen= "",
string $width= "",
string $height= "",
string $referrerpolicy= "",
string $loading= "") { return "<iframe" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
($srcdoc !== '' ? " srcdoc='" . htmlspecialchars($srcdoc, ENT_QUOTES) . "'" : '').
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($sandbox !== '' ? " sandbox='" . htmlspecialchars($sandbox, ENT_QUOTES) . "'" : '').
($allow !== '' ? " allow='" . htmlspecialchars($allow, ENT_QUOTES) . "'" : '').
($allowfullscreen !== '' ? " allowfullscreen='" . htmlspecialchars($allowfullscreen, ENT_QUOTES) . "'" : '').
($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : '').
($loading !== '' ? " loading='" . htmlspecialchars($loading, ENT_QUOTES) . "'" : ''). "/>"; }

function img(string $accesskey= "",
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
string $fetchpriority= "") { return "<img" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($alt !== '' ? " alt='" . htmlspecialchars($alt, ENT_QUOTES) . "'" : '').
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
($fetchpriority !== '' ? " fetchpriority='" . htmlspecialchars($fetchpriority, ENT_QUOTES) . "'" : ''). "/>"; }

function input(string $accesskey= "",
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
string $width= "") { return "<input" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($accept !== '' ? " accept='" . htmlspecialchars($accept, ENT_QUOTES) . "'" : '').
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
($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : ''). "/>"; }

function ins(string $accesskey= "",
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
string $cite= "",
string $datetime= "",
string $body= "") { return "<ins" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($cite !== '' ? " cite='" . htmlspecialchars($cite, ENT_QUOTES) . "'" : '').
($datetime !== '' ? " datetime='" . htmlspecialchars($datetime, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</ins>"; }

function kbd(string $accesskey= "",
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
string $body= "") { return "<kbd" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</kbd>"; }

function label(string $accesskey= "",
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
string $for= "",
string $body= "") { return "<label" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($for !== '' ? " for='" . htmlspecialchars($for, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</label>"; }

function legend(string $accesskey= "",
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
string $body= "") { return "<legend" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</legend>"; }

function li(string $accesskey= "",
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
string $value= "",
string $body= "") { return "<li" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</li>"; }

function link(string $accesskey= "",
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
string $fetchpriority= "") { return "<link" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($href !== '' ? " href='" . htmlspecialchars($href, ENT_QUOTES) . "'" : '').
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
($fetchpriority !== '' ? " fetchpriority='" . htmlspecialchars($fetchpriority, ENT_QUOTES) . "'" : ''). "/>"; }

function main(string $accesskey= "",
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
string $body= "") { return "<main" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</main>"; }

function map(string $accesskey= "",
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
string $name= "",
string $body= "") { return "<map" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</map>"; }

function mark(string $accesskey= "",
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
string $body= "") { return "<mark" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</mark>"; }



function menu(string $accesskey= "",
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
string $body= "") { return "<menu" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</menu>"; }

function meta(string $accesskey= "",
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
string $name= "",
string $httpEquiv= "",
string $content= "",
string $charset= "",
string $media= "") { return "<meta" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($httpEquiv !== '' ? " http-equiv='" . htmlspecialchars($httpEquiv, ENT_QUOTES) . "'" : '').
($content !== '' ? " content='" . htmlspecialchars($content, ENT_QUOTES) . "'" : '').
($charset !== '' ? " charset='" . htmlspecialchars($charset, ENT_QUOTES) . "'" : '').
($media !== '' ? " media='" . htmlspecialchars($media, ENT_QUOTES) . "'" : ''). "/>"; }

function meter(string $accesskey= "",
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
string $value= "",
string $min= "",
string $max= "",
string $low= "",
string $high= "",
string $optimum= "",
string $body= "") { return "<meter" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
($min !== '' ? " min='" . htmlspecialchars($min, ENT_QUOTES) . "'" : '').
($max !== '' ? " max='" . htmlspecialchars($max, ENT_QUOTES) . "'" : '').
($low !== '' ? " low='" . htmlspecialchars($low, ENT_QUOTES) . "'" : '').
($high !== '' ? " high='" . htmlspecialchars($high, ENT_QUOTES) . "'" : '').
($optimum !== '' ? " optimum='" . htmlspecialchars($optimum, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</meter>"; }

function nav(string $accesskey= "",
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
string $body= "") { return "<nav" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</nav>"; }

function noscript(string $accesskey= "",
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
string $body= "") { return "<noscript" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</noscript>"; }

function object(string $accesskey= "",
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
string $data= "",
string $type= "",
string $name= "",
string $form= "",
string $width= "",
string $height= "",
string $body= "") { return "<object" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($data !== '' ? " data='" . htmlspecialchars($data, ENT_QUOTES) . "'" : '').
($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</object>"; }

function ol(string $accesskey= "",
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
string $reversed= "",
string $start= "",
string $type= "",
string $body= "") { return "<ol" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($reversed !== '' ? " reversed='" . htmlspecialchars($reversed, ENT_QUOTES) . "'" : '').
($start !== '' ? " start='" . htmlspecialchars($start, ENT_QUOTES) . "'" : '').
($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</ol>"; }

function optgroup(string $accesskey= "",
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
string $disabled= "",
string $label= "",
string $body= "") { return "<optgroup" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
($label !== '' ? " label='" . htmlspecialchars($label, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</optgroup>"; }

function option(string $accesskey= "",
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
string $disabled= "",
string $label= "",
string $selected= "",
string $value= "",
string $body= "") { return "<option" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
($label !== '' ? " label='" . htmlspecialchars($label, ENT_QUOTES) . "'" : '').
($selected !== '' ? " selected='" . htmlspecialchars($selected, ENT_QUOTES) . "'" : '').
($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</option>"; }

function output(string $accesskey= "",
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
string $for= "",
string $form= "",
string $name= "",
string $body= "") { return "<output" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($for !== '' ? " for='" . htmlspecialchars($for, ENT_QUOTES) . "'" : '').
($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</output>"; }

function p(string $accesskey= "",
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
string $body= "") { return "<p" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</p>"; }

function picture(string $accesskey= "",
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
string $body= "") { return "<picture" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</picture>"; }

function pre(string $accesskey= "",
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
string $body= "") { return "<pre" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</pre>"; }

function progress(string $accesskey= "",
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
string $value= "",
string $max= "",
string $body= "") { return "<progress" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($value !== '' ? " value='" . htmlspecialchars($value, ENT_QUOTES) . "'" : '').
($max !== '' ? " max='" . htmlspecialchars($max, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</progress>"; }

function q(string $accesskey= "",
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
string $cite= "",
string $body= "") { return "<q" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($cite !== '' ? " cite='" . htmlspecialchars($cite, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</q>"; }

function rp(string $accesskey= "",
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
string $body= "") { return "<rp" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</rp>"; }

function rt(string $accesskey= "",
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
string $body= "") { return "<rt" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</rt>"; }

function ruby(string $accesskey= "",
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
string $body= "") { return "<ruby" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</ruby>"; }

function s(string $accesskey= "",
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
string $body= "") { return "<s" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</s>"; }

function samp(string $accesskey= "",
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
string $body= "") { return "<samp" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</samp>"; }

function script(string $accesskey= "",
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
string $body= "") { return "<script" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
($nomodule !== '' ? " nomodule='" . htmlspecialchars($nomodule, ENT_QUOTES) . "'" : '').
($async !== '' ? " async='" . htmlspecialchars($async, ENT_QUOTES) . "'" : '').
($defer !== '' ? " defer='" . htmlspecialchars($defer, ENT_QUOTES) . "'" : '').
($crossorigin !== '' ? " crossorigin='" . htmlspecialchars($crossorigin, ENT_QUOTES) . "'" : '').
($integrity !== '' ? " integrity='" . htmlspecialchars($integrity, ENT_QUOTES) . "'" : '').
($referrerpolicy !== '' ? " referrerpolicy='" . htmlspecialchars($referrerpolicy, ENT_QUOTES) . "'" : '').
($blocking !== '' ? " blocking='" . htmlspecialchars($blocking, ENT_QUOTES) . "'" : '').
($fetchpriority !== '' ? " fetchpriority='" . htmlspecialchars($fetchpriority, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</script>"; }

function search(string $accesskey= "",
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
string $body= "") { return "<search" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</search>"; }

function section(string $accesskey= "",
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
string $body= "") { return "<section" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</section>"; }

function select(string $accesskey= "",
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
string $autocomplete= "",
string $disabled= "",
string $form= "",
string $multiple= "",
string $name= "",
string $required= "",
string $size= "",
string $body= "") { return "<select" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($autocomplete !== '' ? " autocomplete='" . htmlspecialchars($autocomplete, ENT_QUOTES) . "'" : '').
($disabled !== '' ? " disabled='" . htmlspecialchars($disabled, ENT_QUOTES) . "'" : '').
($form !== '' ? " form='" . htmlspecialchars($form, ENT_QUOTES) . "'" : '').
($multiple !== '' ? " multiple='" . htmlspecialchars($multiple, ENT_QUOTES) . "'" : '').
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($required !== '' ? " required='" . htmlspecialchars($required, ENT_QUOTES) . "'" : '').
($size !== '' ? " size='" . htmlspecialchars($size, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</select>"; }

function slot(string $accesskey= "",
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
string $name= "",
string $body= "") { return "<slot" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($name !== '' ? " name='" . htmlspecialchars($name, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</slot>"; }

function small(string $accesskey= "",
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
string $body= "") { return "<small" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</small>"; }

function source(string $accesskey= "",
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
string $type= "",
string $media= "",
string $src= "",
string $srcset= "",
string $sizes= "",
string $width= "",
string $height= "") { return "<source" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($type !== '' ? " type='" . htmlspecialchars($type, ENT_QUOTES) . "'" : '').
($media !== '' ? " media='" . htmlspecialchars($media, ENT_QUOTES) . "'" : '').
($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
($srcset !== '' ? " srcset='" . htmlspecialchars($srcset, ENT_QUOTES) . "'" : '').
($sizes !== '' ? " sizes='" . htmlspecialchars($sizes, ENT_QUOTES) . "'" : '').
($width !== '' ? " width='" . htmlspecialchars($width, ENT_QUOTES) . "'" : '').
($height !== '' ? " height='" . htmlspecialchars($height, ENT_QUOTES) . "'" : ''). "/>"; }

function span(string $accesskey= "",
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
string $body= "") { return "<span" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</span>"; }

function strong(string $accesskey= "",
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
string $body= "") { return "<strong" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</strong>"; }

function style(string $accesskey= "",
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
string $media= "",
string $blocking= "",
string $body= "") { return "<style" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($media !== '' ? " media='" . htmlspecialchars($media, ENT_QUOTES) . "'" : '').
($blocking !== '' ? " blocking='" . htmlspecialchars($blocking, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</style>"; }

function sub(string $accesskey= "",
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
string $body= "") { return "<sub" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</sub>"; }

function summary(string $accesskey= "",
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
string $body= "") { return "<summary" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</summary>"; }

function sup(string $accesskey= "",
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
string $body= "") { return "<sup" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</sup>"; }



function table(string $accesskey= "",
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
string $body= "") { return "<table" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</table>"; }

function tbody(string $accesskey= "",
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
string $body= "") { return "<tbody" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</tbody>"; }

function td(string $accesskey= "",
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
string $colspan= "",
string $rowspan= "",
string $headers= "",
string $body= "") { return "<td" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($colspan !== '' ? " colspan='" . htmlspecialchars($colspan, ENT_QUOTES) . "'" : '').
($rowspan !== '' ? " rowspan='" . htmlspecialchars($rowspan, ENT_QUOTES) . "'" : '').
($headers !== '' ? " headers='" . htmlspecialchars($headers, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</td>"; }

function template(string $accesskey= "",
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
string $shadowrootmode= "",
string $shadowrootdelegatesfocus= "",
string $shadowrootclonable= "",
string $shadowrootserializable= "") { return "<template" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($shadowrootmode !== '' ? " shadowrootmode='" . htmlspecialchars($shadowrootmode, ENT_QUOTES) . "'" : '').
($shadowrootdelegatesfocus !== '' ? " shadowrootdelegatesfocus='" . htmlspecialchars($shadowrootdelegatesfocus, ENT_QUOTES) . "'" : '').
($shadowrootclonable !== '' ? " shadowrootclonable='" . htmlspecialchars($shadowrootclonable, ENT_QUOTES) . "'" : '').
($shadowrootserializable !== '' ? " shadowrootserializable='" . htmlspecialchars($shadowrootserializable, ENT_QUOTES) . "'" : ''). "/>"; }

function textarea(string $accesskey= "",
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
string $body= "") { return "<textarea" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($autocomplete !== '' ? " autocomplete='" . htmlspecialchars($autocomplete, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</textarea>"; }

function tfoot(string $accesskey= "",
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
string $body= "") { return "<tfoot" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</tfoot>"; }

function th(string $accesskey= "",
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
string $colspan= "",
string $rowspan= "",
string $headers= "",
string $scope= "",
string $abbr= "",
string $body= "") { return "<th" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($colspan !== '' ? " colspan='" . htmlspecialchars($colspan, ENT_QUOTES) . "'" : '').
($rowspan !== '' ? " rowspan='" . htmlspecialchars($rowspan, ENT_QUOTES) . "'" : '').
($headers !== '' ? " headers='" . htmlspecialchars($headers, ENT_QUOTES) . "'" : '').
($scope !== '' ? " scope='" . htmlspecialchars($scope, ENT_QUOTES) . "'" : '').
($abbr !== '' ? " abbr='" . htmlspecialchars($abbr, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</th>"; }

function thead(string $accesskey= "",
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
string $body= "") { return "<thead" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</thead>"; }

function time(string $accesskey= "",
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
string $datetime= "",
string $body= "") { return "<time" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($datetime !== '' ? " datetime='" . htmlspecialchars($datetime, ENT_QUOTES) . "'" : '').
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</time>"; }

function title(string $accesskey= "",
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
string $body= "") { return "<title" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</title>"; }

function tr(string $accesskey= "",
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
string $body= "") { return "<tr" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</tr>"; }

function track(string $accesskey= "",
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
string $default= "",
string $kind= "",
string $label= "",
string $src= "",
string $srclang= "") { return "<track" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($default !== '' ? " default='" . htmlspecialchars($default, ENT_QUOTES) . "'" : '').
($kind !== '' ? " kind='" . htmlspecialchars($kind, ENT_QUOTES) . "'" : '').
($label !== '' ? " label='" . htmlspecialchars($label, ENT_QUOTES) . "'" : '').
($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
($srclang !== '' ? " srclang='" . htmlspecialchars($srclang, ENT_QUOTES) . "'" : ''). "/>"; }

function u(string $accesskey= "",
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
string $body= "") { return "<u" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</u>"; }

function ul(string $accesskey= "",
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
string $body= "") { return "<ul" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</ul>"; }

function variable(string $accesskey= "",
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
string $body= "") { return "<var" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</var>"; }

function video(string $accesskey= "",
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
string $body= "") { return "<video" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($src !== '' ? " src='" . htmlspecialchars($src, ENT_QUOTES) . "'" : '').
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
($body !== '' ? " body='" . htmlspecialchars($body, ENT_QUOTES) . "'" : ''). ">{$body}</video>"; }

function wbr(string $accesskey= "",
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
string $translate= "") { return "<wbr" . ($accesskey !== '' ? " accesskey='" . htmlspecialchars($accesskey, ENT_QUOTES) . "'" : '').
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
($translate !== '' ? " translate='" . htmlspecialchars($translate, ENT_QUOTES) . "'" : ''). "/>"; }



