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
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('a', $body, ...$attributes);
}

function abbr(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('abbr', $body, ...$attributes);
}

function address(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('address', $body, ...$attributes);
}

function area(
    string ...$attributes
): RenderResult {
    return selfClosingElement('area', ...$attributes);
}

function article(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('article', $body, ...$attributes);
}

function aside(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('aside', $body, ...$attributes);
}

function audio(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('audio', $body, ...$attributes);
}

function b(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('b', $body, ...$attributes);
}

function base(
    string ...$attributes
): RenderResult {
    return selfClosingElement('base', ...$attributes);
}

function bdi(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('bdi', $body, ...$attributes);
}

function bdo(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('bdo', $body, ...$attributes);
}

function blockquote(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('blockquote', $body, ...$attributes);
}

function body(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('body', $body, ...$attributes);
}

function br(
    string ...$attributes
): RenderResult {
    return selfClosingElement('br', ...$attributes);
}

function button(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('button', $body, ...$attributes);
}

function canvas(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('canvas', $body, ...$attributes);
}

function caption(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('caption', $body, ...$attributes);
}

function cite(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('cite', $body, ...$attributes);
}

function code(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('code', $body, ...$attributes);
}

function col(
    string ...$attributes
): RenderResult {
    return selfClosingElement('col', ...$attributes);
}

function colgroup(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('colgroup', $body, ...$attributes);
}

function data(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('data', $body, ...$attributes);
}

function datalist(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('datalist', $body, ...$attributes);
}

function dd(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('dd', $body, ...$attributes);
}

function del(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('del', $body, ...$attributes);
}

function details(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('details', $body, ...$attributes);
}

function dfn(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('dfn', $body, ...$attributes);
}

function dialog(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('dialog', $body, ...$attributes);
}

function div(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('div', $body, ...$attributes);
}

function dl(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('dl', $body, ...$attributes);
}

function dt(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('dt', $body, ...$attributes);
}

function em(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('em', $body, ...$attributes);
}

function embed(
    string ...$attributes
): RenderResult {
    return selfClosingElement('embed', ...$attributes);
}

function fieldset(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('fieldset', $body, ...$attributes);
}

function figcaption(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('figcaption', $body, ...$attributes);
}

function figure(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('figure', $body, ...$attributes);
}

function footer(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('footer', $body, ...$attributes);
}

function form(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('form', $body, ...$attributes);
}

function h1(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('h1', $body, ...$attributes);
}

function h2(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('h2', $body, ...$attributes);
}

function h3(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('h3', $body, ...$attributes);
}

function h4(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('h4', $body, ...$attributes);
}

function h5(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('h5', $body, ...$attributes);
}

function h6(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('h6', $body, ...$attributes);
}

function head(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('head', $body, ...$attributes);
}

function header(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('header', $body, ...$attributes);
}

function hgroup(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('hgroup', $body, ...$attributes);
}

function hr(
    string ...$attributes
): RenderResult {
    return selfClosingElement('hr', ...$attributes);
}

function html(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('html', $body, ...$attributes);
}

function i(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('i', $body, ...$attributes);
}

function iframe(
    string ...$attributes
): RenderResult {
    return selfClosingElement('iframe', ...$attributes);
}

function img(
    string ...$attributes
): RenderResult {
    return selfClosingElement('img', ...$attributes);
}

function input(
    string ...$attributes
): RenderResult {
    return selfClosingElement('input', ...$attributes);
}

function ins(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('ins', $body, ...$attributes);
}

function kbd(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('kbd', $body, ...$attributes);
}

function label(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('label', $body, ...$attributes);
}

function legend(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('legend', $body, ...$attributes);
}

function li(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('li', $body, ...$attributes);
}

function link(
    string ...$attributes
): RenderResult {
    return selfClosingElement('link', ...$attributes);
}

function main(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('main', $body, ...$attributes);
}

function map(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('map', $body, ...$attributes);
}

function mark(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('mark', $body, ...$attributes);
}

function math(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('math', $body, ...$attributes);
}

function menu(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('menu', $body, ...$attributes);
}

function meta(
    string ...$attributes
): RenderResult {
    return selfClosingElement('meta', ...$attributes);
}

function meter(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('meter', $body, ...$attributes);
}

function nav(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('nav', $body, ...$attributes);
}

function noscript(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('noscript', $body, ...$attributes);
}

function object(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('object', $body, ...$attributes);
}

function ol(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('ol', $body, ...$attributes);
}

function optgroup(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('optgroup', $body, ...$attributes);
}

function option(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('option', $body, ...$attributes);
}

function output(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('output', $body, ...$attributes);
}

function p(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('p', $body, ...$attributes);
}

function picture(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('picture', $body, ...$attributes);
}

function pre(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('pre', $body, ...$attributes);
}

function progress(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('progress', $body, ...$attributes);
}

function q(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('q', $body, ...$attributes);
}

function rp(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('rp', $body, ...$attributes);
}

function rt(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('rt', $body, ...$attributes);
}

function ruby(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('ruby', $body, ...$attributes);
}

function s(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('s', $body, ...$attributes);
}

function samp(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('samp', $body, ...$attributes);
}

function script(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('script', $body, ...$attributes);
}

function search(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('search', $body, ...$attributes);
}

function section(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('section', $body, ...$attributes);
}

function select(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('select', $body, ...$attributes);
}

function slot(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('slot', $body, ...$attributes);
}

function small(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('small', $body, ...$attributes);
}

function source(
    string ...$attributes
): RenderResult {
    return selfClosingElement('source', ...$attributes);
}

function span(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('span', $body, ...$attributes);
}

function strong(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('strong', $body, ...$attributes);
}

function style(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('style', $body, ...$attributes);
}

function sub(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('sub', $body, ...$attributes);
}

function summary(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('summary', $body, ...$attributes);
}

function sup(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('sup', $body, ...$attributes);
}

function svg(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('svg', $body, ...$attributes);
}

function table(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('table', $body, ...$attributes);
}

function tbody(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('tbody', $body, ...$attributes);
}

function td(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('td', $body, ...$attributes);
}

function template(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('template', $body, ...$attributes);
}

function textarea(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('textarea', $body, ...$attributes);
}

function tfoot(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('tfoot', $body, ...$attributes);
}

function th(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('th', $body, ...$attributes);
}

function thead(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('thead', $body, ...$attributes);
}

function time(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('time', $body, ...$attributes);
}

function title(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('title', $body, ...$attributes);
}

function tr(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('tr', $body, ...$attributes);
}

function track(
    string ...$attributes
): RenderResult {
    return selfClosingElement('track', ...$attributes);
}

function u(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('u', $body, ...$attributes);
}

function ul(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('ul', $body, ...$attributes);
}

function variable(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('var', $body, ...$attributes);
}

function video(
    string|array|RenderResult $body, string ...$attributes
): RenderResult {
    return element('video', $body, ...$attributes);
}

function wbr(
    string ...$attributes
): RenderResult {
    return selfClosingElement('wbr', ...$attributes);
}

