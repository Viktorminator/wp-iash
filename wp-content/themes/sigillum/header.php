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
	                <?php wp_nav_menu( array(
	                    'theme_location' => 'header-menu1',
                        'container' => 'li',
                        'container_class' => 'block',
                        'items_wrap' => '%3$s',
                        'items_class' => '',
                        'depth' => 2,
                        'walker' => new Nav_Header_Walker
                    ) );
	                ?>
                </li>
                <li class="block">
	                <?php wp_nav_menu( array(
		                'theme_location' => 'header-menu2',
		                'container' => 'li',
		                'container_class' => 'block',
		                'items_wrap' => '%3$s',
		                'items_class' => '',
		                'depth' => 2,
		                'walker' => new Nav_Header_Walker
	                ) );
	                ?>
                </li>
                <li class="block">
	                <?php wp_nav_menu( array(
		                'theme_location' => 'header-menu3',
		                'container' => 'li',
		                'container_class' => 'block',
		                'items_wrap' => '%3$s',
		                'items_class' => '',
		                'depth' => 2,
		                'walker' => new Nav_Header_Walker
	                ) );
	                ?>
                </li>
            </ul>
            <div class="container">
                <a class="btn-default" href="#">Контакти
                </a>
            </div>
        </nav>
    </div>
</header>