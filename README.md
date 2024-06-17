# lnear/html, a PHP library for generating HTML elements

This is a list of HTML elements and their attributes generated from the [HTML Living Standard](https://html.spec.whatwg.org/multipage/indices.html).

# Installation

```bash
composer require lnear/html
```

# Usage

```php
use html\a;

echo a(href: 'https://example.com', target: '_blank', rel: 'noopener noreferrer'); // <a href="https://example.com" target="_blank" rel="noopener noreferrer"></a> 
```

All functions return a string of the HTML element that it is named after. The only exception is the `var` function, which is named `variable` to avoid conflicts with the reserved keyword `var`.

## Elements

| Tag | Attributes |
| --- | ---------- |
| `a` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, href, target, download, ping, rel, hreflang, type, referrerpolicy |
| `abbr` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `address` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `area` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, alt, coords, shape, href, target, download, ping, rel, referrerpolicy |
| `article` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `aside` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `audio` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, src, crossorigin, preload, autoplay, loop, muted, controls |
| `b` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `base` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, href, target |
| `bdi` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `bdo` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `blockquote` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, cite |
| `body` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, onafterprint, onbeforeprint, onbeforeunload, onhashchange, onlanguagechange, onmessage, onmessageerror, onoffline, ononline, onpageswap, onpagehide, onpagereveal, onpageshow, onpopstate, onrejectionhandled, onstorage, onunhandledrejection, onunload |
| `br` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `button` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, disabled, form, formaction, formenctype, formmethod, formnovalidate, formtarget, name, popovertarget, popovertargetaction, type, value |
| `canvas` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, width, height |
| `caption` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `cite` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `code` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `col` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, span |
| `colgroup` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, span |
| `data` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, value |
| `datalist` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `dd` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `del` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, cite, datetime |
| `details` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, name, open |
| `dfn` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `dialog` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, open |
| `div` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `dl` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `dt` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `em` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `embed` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, src, type, width, height |
| `fieldset` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, disabled, form, name |
| `figcaption` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `figure` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `footer` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `form` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, accept-charset, action, autocomplete, enctype, method, name, novalidate, rel, target |
| `h1` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `head` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `header` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `hgroup` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `hr` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `html` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, manifest |
| `i` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `iframe` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, src, srcdoc, name, sandbox, allow, allowfullscreen, width, height, referrerpolicy, loading |
| `img` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, alt, src, srcset, sizes, crossorigin, usemap, ismap, width, height, referrerpolicy, decoding, loading, fetchpriority |
| `input` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, accept, alt, autocomplete, checked, dirname, disabled, form, formaction, formenctype, formmethod, formnovalidate, formtarget, height, list, max, maxlength, min, minlength, multiple, name, pattern, placeholder, popovertarget, popovertargetaction, readonly, required, size, src, step, type, value, width |
| `ins` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, cite, datetime |
| `kbd` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `label` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, for |
| `legend` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `li` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, value |
| `link` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, href, crossorigin, rel, as, media, hreflang, type, sizes, imagesrcset, imagesizes, referrerpolicy, integrity, blocking, color, disabled, fetchpriority |
| `main` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `map` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, name |
| `mark` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `menu` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `meta` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, name, http-equiv, content, charset, media |
| `meter` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, value, min, max, low, high, optimum |
| `nav` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `noscript` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `object` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, data, type, name, form, width, height |
| `ol` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, reversed, start, type |
| `optgroup` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, disabled, label |
| `option` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, disabled, label, selected, value |
| `output` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, for, form, name |
| `p` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `picture` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `pre` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `progress` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, value, max |
| `q` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, cite |
| `rp` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `rt` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `ruby` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `s` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `samp` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `script` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, src, type, nomodule, async, defer, crossorigin, integrity, referrerpolicy, blocking, fetchpriority |
| `search` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `section` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `select` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, autocomplete, disabled, form, multiple, name, required, size |
| `slot` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, name |
| `small` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `source` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, type, media, src, srcset, sizes, width, height |
| `span` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `strong` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `style` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, media, blocking |
| `sub` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `summary` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `sup` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `table` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `tbody` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `td` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, colspan, rowspan, headers |
| `template` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, shadowrootmode, shadowrootdelegatesfocus, shadowrootclonable, shadowrootserializable |
| `textarea` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, autocomplete, cols, dirname, disabled, form, maxlength, minlength, name, placeholder, readonly, required, rows, wrap |
| `tfoot` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `th` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, colspan, rowspan, headers, scope, abbr |
| `thead` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `time` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, datetime |
| `title` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `tr` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `track` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, default, kind, label, src, srclang |
| `u` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `ul` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `var` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `video` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate, src, crossorigin, poster, preload, autoplay, playsinline, loop, muted, controls, width, height |
| `wbr` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
| `` | accesskey, autocapitalize, class, contenteditable, contextmenu, dir, draggable, dropzone, hidden, id, itemid, itemprop, itemref, itemscope, itemtype, lang, spellcheck, style, tabindex, title, translate |
