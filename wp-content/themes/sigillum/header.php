<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sigillum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

        <title>IASH</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <link rel="stylesheet" href="/wp-content/themes/sigillum/css/style.css">
        <script type="text/javascript" src="/wp-content/themes/sigillum/js/modernizr.custom.js">
        </script>
        <script id="genealogia-template" type="text/x-hanlebars-template">
            <div class="project project_columns"><div class="section-anons section"><div class="slides" id="gen_slides">{{#each genealogia}}
                        <div class="slides__item {{#if_even @index}}odd{{ else }}even{{/if_even}} {{#if @first}} active {{/if}}">
                            <div style="background-image:url({{ image }});" class="teaser-image videobox"></div>
                            <div class="separator icon iconpointer-{{#if_even @index}}down{{ else }}up{{/if_even}}"></div><a href="{{ url }}" class="teaser-content">
                                <div class="teaser-text">
                                    <svg viewbox="0 0 120 120" class="icon">
                                        <g>
                                            <clippath id="stamp_mask2">
                                                <polygon stroke="" points="0 0 60 0 35 60 0 60"></polygon>
                                            </clippath>
                                        </g>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/sigillum/img/icons.svg{{ iconNumber }}" clip-path="url(#stamp_mask2)" width="60" height="60" x="50" y="20"></use>
                                        <line x1="120" y1="0" x2="20" y2="240" stroke="black" style="stroke-width: 1px; fill: none;" class="liner"></line>
                                    </svg>
                                    <div class="title">{{ title }}</div>
                                </div></a>
                        </div>
                        {{/each}}</div></div></div></script>
        <script id="geraldika-template" type="text/x-hanlebars-template">
            <div class="project project_columns"><div class="section-anons section"><div class="blog-overview" id="ger_slides">{{#each geraldika}}
                        <div class="slides__item {{#if_even @index}}odd{{ else }}even{{/if_even}} {{#if @first}} active {{/if}}">
                            <div style="background-image:url({{ image }});" class="teaser-image videobox"></div>
                            <div class="separator icon iconpointer-{{#if_even @index}}down{{ else }}up{{/if_even}}"></div><a href="#" class="teaser-content">
                                <div class="teaser-text">
                                    <svg viewbox="0 0 120 120" class="icon">
                                        <g>
                                            <clippath id="stamp_mask2">
                                                <polygon stroke="" points="0 0 60 0 35 60 0 60"></polygon>
                                            </clippath>
                                        </g>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/sigillum/img/icons.svg{{ iconNumber }}" clip-path="url(#stamp_mask2)" width="60" height="60" x="50" y="20"></use>
                                        <line x1="120" y1="0" x2="20" y2="240" stroke="black" style="stroke-width: 1px; fill: none;" class="liner"></line>
                                    </svg>
                                    <div class="title">{{ title }}</div>
                                </div></a>
                        </div>
                        {{/each}}</div></div></div></script>
        <script id="projects-template" type="text/x-hanlebars-template">
            <div class="project project_columns"><div class="section-anons section"><div class="slides" id="pro_slides">{{#each projects}}
                        <div class="slides__item {{#if_even @index}}odd{{ else }}even{{/if_even}} {{#if @first}} active {{/if}}">
                            <div style="background-image:url({{ image }});" class="teaser-image videobox"></div>
                            <div class="separator icon iconpointer-{{#if_even @index}}down{{ else }}up{{/if_even}}"></div><a href="#" class="teaser-content">
                                <div class="teaser-text">
                                    <svg viewbox="0 0 120 120" class="icon">
                                        <g>
                                            <clippath id="stamp_mask2">
                                                <polygon stroke="" points="0 0 60 0 35 60 0 60"></polygon>
                                            </clippath>
                                        </g>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/sigillum/img/icons.svg{{ iconNumber }}" clip-path="url(#stamp_mask2)" width="60" height="60" x="50" y="20"></use>
                                        <line x1="120" y1="0" x2="20" y2="240" stroke="black" style="stroke-width: 1px; fill: none;" class="liner"></line>
                                    </svg>
                                    <div class="title">{{ title }}</div>
                                </div></a>
                        </div>
                        {{/each}}</div></div></div></script>
        <script id="publishing-template" type="text/x-hanlebars-template">
            <div class="project project_columns"><div class="section-anons section"><div class="slides" id="pub_slides">{{#each publishing}}
                        <div class="slides__item {{#if_even @index}}odd{{ else }}even{{/if_even}} {{#if @first}} active {{/if}}">
                            <div style="background-image:url({{ image }});" class="teaser-image videobox"></div>
                            <div class="separator icon iconpointer-{{#if_even @index}}down{{/if_even}}"></div><a href="#" class="teaser-content">
                                <div class="teaser-text">
                                    <svg viewbox="0 0 120 120" class="icon">
                                        <g>
                                            <clippath id="stamp_mask2">
                                                <polygon stroke="" points="0 0 60 0 35 60 0 60"></polygon>
                                            </clippath>
                                        </g>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/sigillum/img/icons.svg{{ iconNumber }}" clip-path="url(#stamp_mask2)" width="60" height="60" x="50" y="20"></use>
                                        {{#if_even @index}}<line x1="120" y1="0" x2="20" y2="240" stroke="black" style="stroke-width: 1px; fill: none;" class="liner"></line>{{/if_even}}
                                    </svg>
                                    <div class="title">{{ title }}</div>
                                </div></a>
                        </div>
                        {{/each}}</div></div></div></script>
        <script id="resources-template" type="text/x-hanlebars-template">
            <div class="project project_columns"><div class="section-anons section"><div class="slides" id="res_slides">{{#each resources}}
                        <div class="slides__item {{#if_even @index}}odd{{ else }}even{{/if_even}} {{#if @first}} active {{/if}}">
                            <div style="background-image:url({{ image }});" class="teaser-image videobox"></div>
                            <div class="separator icon iconpointer-{{#if_even @index}}down{{/if_even}}"></div><a href="#" class="teaser-content">
                                <div class="teaser-text">
                                    <svg viewbox="0 0 120 120" class="icon">
                                        <g>
                                            <clippath id="stamp_mask2">
                                                <polygon stroke="" points="0 0 60 0 35 60 0 60"></polygon>
                                            </clippath>
                                        </g>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/sigillum/img/icons.svg{{ iconNumber }}" clip-path="url(#stamp_mask2)" width="60" height="60" x="50" y="20"></use>
                                        {{#if_even @index}}<line x1="120" y1="0" x2="20" y2="240" stroke="black" style="stroke-width: 1px; fill: none;" class="liner"></line>{{/if_even}}
                                    </svg>
                                    <div class="title">{{ title }}</div>
                                </div></a>
                        </div>
                        {{/each}}</div></div></div></script>
        <script id="sfragistika-template" type="text/x-hanlebars-template">
            <div class="project project_columns"><div class="section-anons section"><div class="slides" id="sfr_slides">{{#each sfragistika}}
                        <div class="slides__item {{#if_even @index}}odd{{ else }}even{{/if_even}} {{#if @first}} active {{/if}}">
                            <div style="background-image:url({{ image }});" class="teaser-image videobox"></div>
                            <div class="separator icon iconpointer-{{#if_even @index}}down{{ else }}up{{/if_even}}"></div><a href="#" class="teaser-content">
                                <div class="teaser-text">
                                    <svg viewbox="0 0 120 120" class="icon">
                                        <g>
                                            <clippath id="stamp_mask2">
                                                <polygon stroke="" points="0 0 60 0 35 60 0 60"></polygon>
                                            </clippath>
                                        </g>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/sigillum/img/icons.svg{{ iconNumber }}" clip-path="url(#stamp_mask2)" width="60" height="60" x="50" y="20"></use>
                                        <line x1="120" y1="0" x2="20" y2="240" stroke="black" style="stroke-width: 1px; fill: none;" class="liner"></line>
                                    </svg>
                                    <div class="title">{{ title }}</div>
                                </div></a>
                        </div>
                        {{/each}}</div></div></div></script>
        <script id="events-template" type="text/x-hanlebars-template">
            <div class="project project_columns"><div class="section-anons section"><div class="slides" id="eve_slides">{{#each events}}
                        <div class="slides__item {{#if_even @index}}odd{{ else }}even{{/if_even}} {{#if @first}} active {{/if}}">
                            <div style="background-image:url({{ image }});" class="teaser-image videobox"></div>
                            <div class="separator icon iconpointer-{{#if_even @index}}down{{ else }}up{{/if_even}}"></div><a href="#" class="teaser-content">
                                <div class="teaser-text">
                                    <svg viewbox="0 0 120 120" class="icon">
                                        <g>
                                            <clippath id="stamp_mask2">
                                                <polygon stroke="" points="0 0 60 0 35 60 0 60"></polygon>
                                            </clippath>
                                        </g>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/sigillum/img/icons.svg{{ iconNumber }}" clip-path="url(#stamp_mask2)" width="60" height="60" x="50" y="20"></use>
                                        <line x1="120" y1="0" x2="20" y2="240" stroke="black" style="stroke-width: 1px; fill: none;" class="liner"></line>
                                    </svg>
                                    <div class="title">{{ title }}</div>
                                </div></a>
                        </div>
                        {{/each}}</div></div></div></script>
        <script id="grants-template" type="text/x-hanlebars-template">
            <div class="project project_columns"><div class="section-anons section"><div class="slides" id="gra_slides">{{#each grants}}
                        <div class="slides__item {{#if_even @index}}odd{{ else }}even{{/if_even}} {{#if @first}} active {{/if}}">
                            <div style="background-image:url({{ image }});" class="teaser-image videobox"></div>
                            <div class="separator icon iconpointer-{{#if_even @index}}down{{ else }}up{{/if_even}}"></div><a href="#" class="teaser-content">
                                <div class="teaser-text">
                                    <svg viewbox="0 0 120 120" class="icon">
                                        <g>
                                            <clippath id="stamp_mask2">
                                                <polygon stroke="" points="0 0 60 0 35 60 0 60"></polygon>
                                            </clippath>
                                        </g>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/sigillum/img/icons.svg{{ iconNumber }}" clip-path="url(#stamp_mask2)" width="60" height="60" x="50" y="20"></use>
                                        <line x1="120" y1="0" x2="20" y2="240" stroke="black" style="stroke-width: 1px; fill: none;" class="liner"></line>
                                    </svg>
                                    <div class="title">{{ title }}</div>
                                </div></a>
                        </div>
                        {{/each}}</div></div></div></script>


	<?php wp_head(); ?>
</head>

<body >
<header class="header">
    <div class="search-wrapper">
        <form>
            <input class="search-wrapper-input" id="search" placeholder="Введіть запит..." type="search" value="" name="search" style="display: none;">
            <input class="search-wrapper-submit" type="submit" value="">
            <span class="search-wrapper-icon" id="search-icon">
          </span>
        </form>
    </div>
    <button class="hamburger hamburger--spin js-hamburger" type="button" id="trigger-overlay">
        <span class="hamburger-box">
          <span class="hamburger-inner">
          </span>
        </span>
    </button>
    <div class="overlay overlay-hugeinc">
        <nav>
            <ul class="menu">
                <li class="block">
                    <a href="#abo_intro">Про інститут
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Історія
                            </a>
                        </li>
                        <li>
                            <a href="#">Місія
                            </a>
                        </li>
                        <li>
                            <a href="#">Цілі
                            </a>
                        </li>
                    </ul>
                    <a href="#res_intro">Ресурси
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Історіографія
                            </a>
                        </li>
                        <li>
                            <a href="#">Джерела
                            </a>
                        </li>
                    </ul>
                    <a href="#pub_intro">Видавництво
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Крамниця
                            </a>
                        </li>
                        <li>
                            <a href="#">Пропозиції співпраці
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="block">
                    <a href="#gen_intro">Генеалогія
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Майстерня
                            </a>
                        </li>
                        <li>
                            <a href="/alphabet.html">Алфавіт родів
                            </a>
                        </li>
                        <li>
                            <a href="#">Література з генеалогії
                            </a>
                        </li>
                    </ul>
                    <a href="#ger_intro">Геральдика
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Майстерня
                            </a>
                        </li>
                        <li>
                            <a href="#">Родові герби
                            </a>
                        </li>
                        <li>
                            <a href="#">Міські герби
                            </a>
                        </li>
                        <li>
                            <a href="#">Література з геральдики
                            </a>
                        </li>
                    </ul>
                    <a href="#sfr_intro">Сфрагістика
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Майстерня
                            </a>
                        </li>
                        <li>
                            <a href="#">Сфрагістичні колекції
                            </a>
                        </li>
                        <li>
                            <a href="#">Каталог "1000 років української печатки"
                            </a>
                        </li>
                        <li>
                            <a href="#">Література зі сфрагістики
                            </a>
                        </li>
                        <li>
                            <a href="#">Реставрація
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="block">
                    <a href="#pro_intro">Проекти
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Музей Шереметьєвих
                            </a>
                        </li>
                        <li>
                            <a href="#">Семінар СІД
                            </a>
                        </li>
                        <li>
                            <a href="#">Сфрагістичний семінар
                            </a>
                        </li>
                        <li>
                            <a href="#">Генеалогічна конференція
                            </a>
                        </li>
                        <li>
                            <a href="#">Виставки і презентації
                            </a>
                        </li>
                        <li>
                            <a href="#">Вікіпедія
                            </a>
                        </li>
                    </ul>
                    <a href="#eve_intro">Анонс подій
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="#">Графік семінарів СІД
                            </a>
                        </li>
                        <li>
                            <a href="#">Публікації
                            </a>
                        </li>
                        <li>
                            <a href="#">Виставки
                            </a>
                        </li>
                        <li>
                            <a href="#">Презентації
                            </a>
                        </li>
                        <li>
                            <a href="#">Конференції
                            </a>
                        </li>
                    </ul>
                    <a href="#gra_intro">Премії та гранти
                    </a>
                </li>
            </ul>
            <div class="container">
                <a class="btn-default" href="#">Контакти
                </a>
            </div>
        </nav>
    </div>
</header>