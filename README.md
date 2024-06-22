# lnear/html, a PHP library for generating HTML elements

This is a list of HTML elements and their attributes generated from the [HTML Living Standard](https://html.spec.whatwg.org/multipage/indices.html).

# Installation

```bash
composer require lnear/html
```

# Usage

The functions are named after the HTML elements, and they take the attributes as named arguments. There are two flavours of functions each with their own namespaces: `html` and `html\\strict`.

The `html\\strict` namespace only allows attributes that are valid for the element according to the HTML Living Standard.

The `html` namespace is more permissive and allows any attribute to be passed to the function. The custom attribute names should be camelCase when called with the `html` namespace.

For example:
```php
html\\strict\\a(href: 'https://example.com', dataFoo: 'bar'); // Throws an InvalidArgumentException

html\\a(href: 'https://example.com', dataFoo: 'bar'); // <a href="https://example.com" data-foo="bar"></a>
```

Other than that, the two namespaces are identical. The following examples use the `html` namespace, but you can use the `html\\strict` namespace if you want to enforce the HTML standard.

```php
use html\\a;

echo a(href: 'https://example.com', target: '_blank', rel: 'noopener noreferrer'); // <a href="https://example.com" target="_blank" rel="noopener noreferrer"></a>
```

All functions return a Stringable class (`html\\RenderResult`) of the HTML element that it is named after. The only exception is the `var` function, which is named `variable` to avoid conflicts with the reserved keyword `var`.

The `body` argument is present in all non-self-closing elements. It is used to add text or other elements inside the element.

```php
use html\\div;

echo div(body: 'Hello, World!'); // <div>Hello, World!</div>
```

It is also the first argument in those functions, so you can omit the argument name.

```php
use html\\div;

echo div('Hello, World!'); // <div>Hello, World!</div>
```

More complex elements can be created by nesting functions, and the `body` argument can be an array of elements.
```php
use html\\{div, a, p};

echo div(
    class: 'container', 
    body: [
        a('Click me!', href: 'https://example.com', target: '_blank', rel: 'noopener noreferrer'),
        p('This is a paragraph.')
    ]
);

// <div class="container"><a href="https://example.com" target="_blank" rel="noopener noreferrer">Click me!</a><p>This is a paragraph.</p></div>
```

# Encoding

The `html\\RenderResult` class implements the `Stringable` interface, so you can use it in any context where a string is expected. You can also use it to bypass the HTML encoding of a string.

```php
use html\\{div, RenderResult};

$unsafe = '<script>alert("XSS")</script>';

echo div(body: $unsafe); // Default encoding: &lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt;

$safe = RenderResult::wrap($unsafe); // Explicit encoding

echo div(body: $safe); // No double encoding: <div>&lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt;</div>

$byPass = RenderResult::encoded($unsafe); // String already encoded

echo div(body: $byPass); // <div><script>alert("XSS")</script></div>
```


# Elements

All elements share the following global attributes:

| Attribute |
| --------- |
| `accesskey` |
| `autocapitalize` |
| `class` |
| `contenteditable` |
| `contextmenu` |
| `dir` |
| `draggable` |
| `dropzone` |
| `hidden` |
| `id` |
| `itemid` |
| `itemprop` |
| `itemref` |
| `itemscope` |
| `itemtype` |
| `lang` |
| `spellcheck` |
| `style` |
| `tabindex` |
| `title` |
| `translate` |

The following elements only have the global attributes:

| Tag |
| --- |
| `abbr` |
| `address` |
| `article` |
| `aside` |
| `b` |
| `bdi` |
| `bdo` |
| `br` |
| `caption` |
| `cite` |
| `code` |
| `datalist` |
| `dd` |
| `dfn` |
| `div` |
| `dl` |
| `dt` |
| `em` |
| `figcaption` |
| `figure` |
| `footer` |
| `h1` |
| `h2` |
| `h3` |
| `h4` |
| `h5` |
| `h6` |
| `head` |
| `header` |
| `hgroup` |
| `hr` |
| `i` |
| `kbd` |
| `legend` |
| `main` |
| `mark` |
| `math` |
| `menu` |
| `nav` |
| `noscript` |
| `p` |
| `picture` |
| `pre` |
| `rp` |
| `rt` |
| `ruby` |
| `s` |
| `samp` |
| `search` |
| `section` |
| `small` |
| `span` |
| `strong` |
| `sub` |
| `summary` |
| `sup` |
| `svg` |
| `table` |
| `tbody` |
| `tfoot` |
| `thead` |
| `title` |
| `tr` |
| `u` |
| `ul` |
| `var` |
| `wbr` |

The following elements have additional attributes:

| Tag | Attributes |
| --- | ---------- |
| `a` | href, target, download, ping, rel, hreflang, type, referrerpolicy |
| `area` | alt, coords, shape, href, target, download, ping, rel, referrerpolicy |
| `audio` | src, crossorigin, preload, autoplay, loop, muted, controls |
| `base` | href, target |
| `blockquote` | cite |
| `body` | onafterprint, onbeforeprint, onbeforeunload, onhashchange, onlanguagechange, onmessage, onmessageerror, onoffline, ononline, onpageswap, onpagehide, onpagereveal, onpageshow, onpopstate, onrejectionhandled, onstorage, onunhandledrejection, onunload |
| `button` | disabled, form, formaction, formenctype, formmethod, formnovalidate, formtarget, name, popovertarget, popovertargetaction, type, value |
| `canvas` | width, height |
| `col` | span |
| `colgroup` | span |
| `data` | value |
| `del` | cite, datetime |
| `details` | name, open |
| `dialog` | open |
| `embed` | src, type, width, height |
| `fieldset` | disabled, form, name |
| `form` | accept-charset, action, autocomplete, enctype, method, name, novalidate, rel, target |
| `html` | manifest |
| `iframe` | src, srcdoc, name, sandbox, allow, allowfullscreen, width, height, referrerpolicy, loading |
| `img` | alt, src, srcset, sizes, crossorigin, usemap, ismap, width, height, referrerpolicy, decoding, loading, fetchpriority |
| `input` | accept, alt, autocomplete, checked, dirname, disabled, form, formaction, formenctype, formmethod, formnovalidate, formtarget, height, list, max, maxlength, min, minlength, multiple, name, pattern, placeholder, popovertarget, popovertargetaction, readonly, required, size, src, step, type, value, width |
| `ins` | cite, datetime |
| `label` | for |
| `li` | value |
| `link` | href, crossorigin, rel, as, media, hreflang, type, sizes, imagesrcset, imagesizes, referrerpolicy, integrity, blocking, color, disabled, fetchpriority |
| `map` | name |
| `meta` | name, http-equiv, content, charset, media |
| `meter` | value, min, max, low, high, optimum |
| `object` | data, type, name, form, width, height |
| `ol` | reversed, start, type |
| `optgroup` | disabled, label |
| `option` | disabled, label, selected, value |
| `output` | for, form, name |
| `progress` | value, max |
| `q` | cite |
| `script` | src, type, nomodule, async, defer, crossorigin, integrity, referrerpolicy, blocking, fetchpriority |
| `select` | autocomplete, disabled, form, multiple, name, required, size |
| `slot` | name |
| `source` | type, media, src, srcset, sizes, width, height |
| `style` | media, blocking |
| `td` | colspan, rowspan, headers |
| `template` | shadowrootmode, shadowrootdelegatesfocus, shadowrootclonable, shadowrootserializable |
| `textarea` | autocomplete, cols, dirname, disabled, form, maxlength, minlength, name, placeholder, readonly, required, rows, wrap |
| `th` | colspan, rowspan, headers, scope, abbr |
| `time` | datetime |
| `track` | default, kind, label, src, srclang |
| `video` | src, crossorigin, poster, preload, autoplay, playsinline, loop, muted, controls, width, height |