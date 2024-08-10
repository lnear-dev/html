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


function bypass(string|RenderResult ...$content): RenderResult
{
    return RenderResult::encoded(...$content);
}

function a(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('a', $body, ...$attributes);
}

function abbr(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('abbr', $body, ...$attributes);
}

function address(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('address', $body, ...$attributes);
}

function area(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('area', ...$attributes);
}

function article(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('article', $body, ...$attributes);
}

function aside(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('aside', $body, ...$attributes);
}

function audio(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('audio', $body, ...$attributes);
}

function b(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('b', $body, ...$attributes);
}

function base(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('base', ...$attributes);
}

function bdi(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('bdi', $body, ...$attributes);
}

function bdo(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('bdo', $body, ...$attributes);
}

function blockquote(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('blockquote', $body, ...$attributes);
}

function body(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('body', $body, ...$attributes);
}

function br(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('br', ...$attributes);
}

function button(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('button', $body, ...$attributes);
}

function canvas(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('canvas', $body, ...$attributes);
}

function caption(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('caption', $body, ...$attributes);
}

function cite(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('cite', $body, ...$attributes);
}

function code(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('code', $body, ...$attributes);
}

function col(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('col', ...$attributes);
}

function colgroup(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('colgroup', $body, ...$attributes);
}

function data(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('data', $body, ...$attributes);
}

function datalist(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('datalist', $body, ...$attributes);
}

function dd(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('dd', $body, ...$attributes);
}

function del(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('del', $body, ...$attributes);
}

function details(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('details', $body, ...$attributes);
}

function dfn(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('dfn', $body, ...$attributes);
}

function dialog(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('dialog', $body, ...$attributes);
}

function div(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('div', $body, ...$attributes);
}

function dl(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('dl', $body, ...$attributes);
}

function dt(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('dt', $body, ...$attributes);
}

function em(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('em', $body, ...$attributes);
}

function embed(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('embed', ...$attributes);
}

function fieldset(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('fieldset', $body, ...$attributes);
}

function figcaption(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('figcaption', $body, ...$attributes);
}

function figure(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('figure', $body, ...$attributes);
}

function footer(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('footer', $body, ...$attributes);
}

function form(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('form', $body, ...$attributes);
}

function h1(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('h1', $body, ...$attributes);
}

function h2(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('h2', $body, ...$attributes);
}

function h3(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('h3', $body, ...$attributes);
}

function h4(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('h4', $body, ...$attributes);
}

function h5(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('h5', $body, ...$attributes);
}

function h6(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('h6', $body, ...$attributes);
}

function head(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('head', $body, ...$attributes);
}

function header(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('header', $body, ...$attributes);
}

function hgroup(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('hgroup', $body, ...$attributes);
}

function hr(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('hr', ...$attributes);
}

function html(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('html', $body, ...$attributes);
}

function i(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('i', $body, ...$attributes);
}

function iframe(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('iframe', ...$attributes);
}

function img(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('img', ...$attributes);
}

function input(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('input', ...$attributes);
}

function ins(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('ins', $body, ...$attributes);
}

function kbd(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('kbd', $body, ...$attributes);
}

function label(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('label', $body, ...$attributes);
}

function legend(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('legend', $body, ...$attributes);
}

function li(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('li', $body, ...$attributes);
}

function link(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('link', ...$attributes);
}

function main(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('main', $body, ...$attributes);
}

function map(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('map', $body, ...$attributes);
}

function mark(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('mark', $body, ...$attributes);
}

function math(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('math', $body, ...$attributes);
}

function menu(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('menu', $body, ...$attributes);
}

function meta(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('meta', ...$attributes);
}

function meter(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('meter', $body, ...$attributes);
}

function nav(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('nav', $body, ...$attributes);
}

function noscript(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('noscript', $body, ...$attributes);
}

function object(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('object', $body, ...$attributes);
}

function ol(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('ol', $body, ...$attributes);
}

function optgroup(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('optgroup', $body, ...$attributes);
}

function option(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('option', $body, ...$attributes);
}

function output(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('output', $body, ...$attributes);
}

function p(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('p', $body, ...$attributes);
}

function picture(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('picture', $body, ...$attributes);
}

function pre(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('pre', $body, ...$attributes);
}

function progress(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('progress', $body, ...$attributes);
}

function q(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('q', $body, ...$attributes);
}

function rp(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('rp', $body, ...$attributes);
}

function rt(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('rt', $body, ...$attributes);
}

function ruby(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('ruby', $body, ...$attributes);
}

function s(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('s', $body, ...$attributes);
}

function samp(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('samp', $body, ...$attributes);
}

function script(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('script', $body, ...$attributes);
}

function search(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('search', $body, ...$attributes);
}

function section(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('section', $body, ...$attributes);
}

function select(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('select', $body, ...$attributes);
}

function slot(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('slot', $body, ...$attributes);
}

function small(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('small', $body, ...$attributes);
}

function source(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('source', ...$attributes);
}

function span(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('span', $body, ...$attributes);
}

function strong(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('strong', $body, ...$attributes);
}

function style(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('style', $body, ...$attributes);
}

function sub(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('sub', $body, ...$attributes);
}

function summary(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('summary', $body, ...$attributes);
}

function sup(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('sup', $body, ...$attributes);
}

function svg(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('svg', $body, ...$attributes);
}

function table(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('table', $body, ...$attributes);
}

function tbody(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('tbody', $body, ...$attributes);
}

function td(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('td', $body, ...$attributes);
}

function template(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('template', $body, ...$attributes);
}

function textarea(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('textarea', $body, ...$attributes);
}

function tfoot(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('tfoot', $body, ...$attributes);
}

function th(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('th', $body, ...$attributes);
}

function thead(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('thead', $body, ...$attributes);
}

function time(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('time', $body, ...$attributes);
}

function title(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('title', $body, ...$attributes);
}

function tr(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('tr', $body, ...$attributes);
}

function track(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('track', ...$attributes);
}

function u(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('u', $body, ...$attributes);
}

function ul(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('ul', $body, ...$attributes);
}

function variable(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('var', $body, ...$attributes);
}

function video(
    string|array|RenderResult $body,
    string|bool ...$attributes,
): RenderResult {
    return Renderer::element('video', $body, ...$attributes);
}

function wbr(
    string|bool ...$attributes,
): RenderResult {
    return Renderer::void('wbr', ...$attributes);
}

