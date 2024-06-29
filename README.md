# lnear/html: A PHP Library for Generating HTML Elements

This library provides a collection of functions for generating HTML elements and their attributes based on the [HTML Living Standard](https://html.spec.whatwg.org/multipage/indices.html).

## Installation

To install the library, use the following command:

```bash
composer require lnear/html
```

## Usage

The library provides functions named after HTML elements, which accept attributes as named arguments. There are two namespaces available: `html` and `html\strict`.

- **`html\strict` Namespace:** Only allows attributes that are valid for the element according to the HTML Living Standard.
- **`html` Namespace:** More permissive, allowing any attribute to be passed to the function. Custom attribute names should be in camelCase.

### Examples

```php
// Using the strict namespace
html\strict\a(href: 'https://example.com', dataFoo: 'bar'); // Throws an InvalidArgumentException

// Using the permissive namespace
html\a(href: 'https://example.com', dataFoo: 'bar'); // <a href="https://example.com" data-foo="bar"></a>
```

Other than the attribute restrictions, the two namespaces function identically. The following examples use the `html` namespace, but you can use the `html\strict` namespace to enforce the HTML standard.

### `data-*` Attributes

To pass `data-*` attributes with the `html\strict` namespace, use the `dataset` attribute as an associative array with keys as the attribute names without the `data-` prefix.

```php
use function html\strict\a;

echo a(href: 'https://example.com', dataset: ['fooBar' => 'baz']); // <a href="https://example.com" data-foo-bar="baz"></a>
echo a(href: 'https://example.com', dataset: ['fooBar' => 'baz', 'barFoo' => 'qux']); // <a href="https://example.com" data-foo-bar="baz" data-bar-foo="qux"></a>
```

All functions return a `Stringable` class (`html\RenderResult`) of the HTML element they represent. The only exception is the `var` function, which is named `variable` to avoid conflicts with the reserved keyword `var`.

### Body Argument

The `body` argument is present in all non-self-closing elements, used to add text or other elements inside the element.

```php
use function html\div;

echo div(body: 'Hello, World!'); // <div>Hello, World!</div>
```

The `body` argument is also the first argument in these functions, so the argument name can be omitted.

```php
use function html\div;

echo div('Hello, World!'); // <div>Hello, World!</div>
```

### Nested Elements

More complex elements can be created by nesting functions, with the `body` argument as an array of elements.

```php
use function html\{div, a, p};

echo div(
    class: 'container', 
    body: [
        a('Click me!', href: 'https://example.com', target: '_blank', rel: 'noopener noreferrer'),
        p('This is a paragraph.')
    ]
);

// <div class="container"><a href="https://example.com" target="_blank" rel="noopener noreferrer">Click me!</a><p>This is a paragraph.</p></div>
```

## Encoding

The `html\RenderResult` class implements the `Stringable` interface, allowing its use in any context where a string is expected. It can also be used to bypass HTML encoding of a string.

```php
use function html\{div, RenderResult};

$unsafe = '<script>alert("XSS")</script>';

echo div(body: $unsafe); // Default encoding: &lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt;

$safe = RenderResult::wrap($unsafe); // Explicit encoding

echo div(body: $safe); // No double encoding: <div>&lt;script&gt;alert(&quot;XSS&quot;)&lt;/script&gt;</div>

$byPass = RenderResult::encoded($unsafe); // String already encoded

echo div(body: $byPass); // <div><script>alert("XSS")</script></div>

// Or use the bypass helper function
use function html\bypass;
echo div(body: bypass($unsafe)); // <div><script>alert("XSS")</script></div>
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