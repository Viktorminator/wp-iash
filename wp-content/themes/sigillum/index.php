<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sigillum
 */

get_header(); ?>

    <div class="main-container" id="main" role="main">
        <div class="intro" id="intro">
            <div class="intro__content">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="200" viewbox="0 0 400 200" aria-labelledby="title">
                    <title id="title">Інститут сфрагістики
                    </title>
                    <g>
                        <clippath id="introtext_mask">
                            <polygon id="intro_mask" stroke="" points="0 0 400 0 300 200 0 200">
                            </polygon>
                        </clippath>
                    </g>
                    <text id="intro_text" clip-path="url(#introtext_mask)" height="100%" width="100%" x="160" y="148" font-size="130" textLength="210" kerning="normal">IASH
                    </text>
                    <line id="intro_line" x1="400" y1="0" x2="300" y2="200" style="stroke:#6d6855;stroke-width:1;">
                    </line>
                </svg>
                <p>ІНСТИТУТ СПЕЦІАЛЬНИХ ІСТОРИЧНИХ ДИСЦИПЛІН МУЗЕЮ ШЕРЕМЕТЬЄВИХ
                </p>
            </div>
        </div>
        <div class="project project_about" id="abo_intro">
            <div class="project_about__bcg">
            </div>
            <div class="project_about__content">
                <div class="project_about__content--title">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="200" viewbox="0 0 400 200">
                        <g>
                            <clippath id="abouttext_mask">
                                <polygon id="about_mask" stroke="" points="0 0 400 0 300 200 0 200">
                                </polygon>
                            </clippath>
                        </g>
                        <text id="about_text" clip-path="url(#abouttext_mask)" font-size="80" height="100" width="400" x="190" y="80" style="stroke: #fff; fill: #fff;">ABOUT
                        </text>
                        <line id="about_line" x1="400" y1="0" x2="300" y2="200" style="stroke:#fff;stroke-width:1;">
                        </line>
                    </svg>
                </div>
                <div class="project_about__content--text">
                    <h1>ПРО ІНСТИТУТ
                    </h1>
                    <p>Інститут спеціальних історичних дисциплін Музею Шереметьєвих – це науково-дослідна установа, яка була створена з метою сприяння розвитку сфрагістики, геральдики, генеалогії та суміжних з ними дисциплін. До роботи в Інституті залучаються провідні вітчизняні науковці,
                        які активно займаються як прикладними дослідженнями, так і розвитком теоретичних підвалин зазначених галузей історичної науки.
                    </p>
                </div>
            </div>
        </div>
        <!-- ********************-->
        <!-- ** Genealogia intro-->
        <!-- ********************-->
        <div class="project project_genintro" id="gen_intro">
            <div class="project_genintro__bcg">
            </div>
            <div class="project__content">
                <img id="tubebad" src="/wp-content/themes/sigillum/img/498x84.png">
                <img id="tube" src="/wp-content/themes/sigillum/img/tube.png">
                <img id="swatch" src="/wp-content/themes/sigillum/img/switch.png">
                <img id="paper" src="/wp-content/themes/sigillum/img/paper.png">
                <img id="stamp" src="/wp-content/themes/sigillum/img/stamp.png">
                <img id="hat" src="/wp-content/themes/sigillum/img/hat.png">
                <img id="tail1" src="/wp-content/themes/sigillum/img/tail1.png">
                <img id="tail2" src="/wp-content/themes/sigillum/img/tail2.png">
                <svg id="gen_text" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="600" height="200" viewbox="0 0 600 190">
                    <text id="gen_text_content" height="100%" width="100%" x="110" y="60" font-size="80">ГЕНЕАЛОГІЯ
                    </text>
                </svg>
            </div>
        </div>
        <div id="genealogia">
        </div>
        <!-- ********************-->
        <!-- ** Sfragistika intro-->
        <!-- ********************-->
        <div class="project_sfragistikaintro" id="sfr_intro">
            <div class="project_sfragistikaintro__bcg">
            </div>
            <div class="project_sfragistikaintro__overlay" id="sfr_overlay">
            </div>
            <div class="project_sfragistikaintro__content">
                <img id="letter" src="/wp-content/themes/sigillum/img/letter.png">
                <img id="stampiron" src="/wp-content/themes/sigillum/img/stampiron.png">
                <img id="glove" src="/wp-content/themes/sigillum/img/glove.png">
                <img id="stamper" src="/wp-content/themes/sigillum/img/stamper.png">
                <svg id="sfr_text" width="475px" viewbox="0 0 475 90" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>СФРАГІСТИКА
                    </title>
                    <desc>СФРАГІСТИКА
                    </desc>
                    <defs>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="normal" font-size="90" font-family="HeliosCondLightC" font-style="condensed">
                        <text id="textio" fill="#fff" y="80">СФРАГІСТИКА
                        </text>
                    </g>
                </svg>
            </div>
        </div>
        <div id="sfragistika">
        </div>
        <!-- ********************-->
        <!-- ** Geraldika intro-->
        <!-- ********************-->
        <div class="project_geraldikaintro" id="ger_intro">
            <div class="project_geraldikaintro__bcg">
            </div>
            <div class="project_geraldikaintro__overlay" id="ger_overlay">
            </div>
            <div class="project_geraldikaintro__content">
                <img id="scabbard" src="/wp-content/themes/sigillum/img/scabbard.png">
                <img id="saber2" src="/wp-content/themes/sigillum/img/saber2.png">
                <img id="garda" src="/wp-content/themes/sigillum/img/garda.png">
                <!--img#knot(src='/img/knot.png')-->
                <!--img#scabbard(src='/img/saber.png')-->
                <svg id="ger_text" width="475px" viewbox="0 0 475 90" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>ГЕРАЛЬДИКА
                    </title>
                    <desc>ГЕРАЛЬДИКА
                    </desc>
                    <defs>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="normal" font-size="90" font-family="HeliosCondLightC" font-style="condensed">
                        <text id="" fill="#fff" y="80">ГЕРАЛЬДИКА
                        </text>
                    </g>
                </svg>
            </div>
        </div>
        <div id="geraldika">
        </div>
        <!-- ********************-->
        <!-- ** Resources intro-->
        <!-- ********************-->
        <div class="project_resourcesintro" id="res_intro">
            <div class="project_resourcesintro__bcg">
            </div>
            <div class="project_resourcesintro__content">
                <img id="paper3" src="/wp-content/themes/sigillum/img/paper3.png">
                <img id="paper1" src="/wp-content/themes/sigillum/img/paper1.png">
                <img id="paper2" src="/wp-content/themes/sigillum/img/paper2.png">
                <img id="glasses" src="/wp-content/themes/sigillum/img/glasses.png">
                <img id="tail3" src="/wp-content/themes/sigillum/img/tail3.png">
                <img id="knot2" src="/wp-content/themes/sigillum/img/knot2.png">
                <img id="signet" src="/wp-content/themes/sigillum/img/signet.png">
                <svg id="res_text" width="310px" viewbox="0 0 310 90" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>РЕСУРСИ
                    </title>
                    <desc>РЕСУРСИ
                    </desc>
                    <defs>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="normal" font-size="90" font-family="HeliosCondLightC" font-style="condensed">
                        <text id="" fill="#fff" y="80">РЕСУРСИ
                        </text>
                    </g>
                </svg>
            </div>
        </div>
        <div id="resources">
        </div>
        <!-- ********************-->
        <!-- ** Publishing intro-->
        <!-- ********************-->
        <div class="project_publishingintro" id="pub_intro">
            <div class="project_publishingintro__bcg">
            </div>
            <div class="project_publishingintro__overlay" id="pub_overlay">
            </div>
            <div class="project_publishingintro__content">
                <img id="book" src="/wp-content/themes/sigillum/img/book.png">
                <img id="lupa" src="/wp-content/themes/sigillum/img/lupa.png">
                <img id="hand" src="/wp-content/themes/sigillum/img/FFFFFF-0.png">
                <img id="paper5" src="/wp-content/themes/sigillum/img/paper1.png">
                <svg id="pub_text" width="520px" viewbox="0 0 520 90" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>ВИДАВНИЦТВО
                    </title>
                    <desc>ВИДАВНИЦТВО
                    </desc>
                    <defs>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="normal" font-size="90" font-family="HeliosCondLightC" font-style="condensed">
                        <text id="" fill="#fff" y="80">ВИДАВНИЦТВО
                        </text>
                    </g>
                </svg>
            </div>
        </div>
        <div id="publishing">
        </div>
        <!-- ********************-->
        <!-- ** Projects intro-->
        <!-- ********************-->
        <div class="project_projectsintro" id="pro_intro">
            <div class="project_projectsintro__bcg">
            </div>
            <div class="project_projectsintro__content">
                <img id="lupa2" src="/wp-content/themes/sigillum/img/lupa2.png">
                <img id="glass" src="/wp-content/themes/sigillum/img/glass.svg">
                <svg id="pro_text" width="305px" height="90px" viewbox="0 0 305 90" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>ПРОЕКТИ
                    </title>
                    <desc>ПРОЕКТИ
                    </desc>
                    <defs>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="normal" font-size="90" font-family="HeliosCondLightC" font-style="condensed">
                        <text id="" fill="#fff" y="80">ПРОЕКТИ
                        </text>
                    </g>
                </svg>
            </div>
        </div>
        <div id="projects">
        </div>
        <!-- ********************-->
        <!-- ** Events announces intro-->
        <!-- ********************-->
        <div class="project_eventsintro" id="eve_intro">
            <div class="project_eventsintro__bcg">
            </div>
            <div class="project_eventsintro__content">
                <svg id="eve_text" width="465px" height="100px" viewbox="0 0 465 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>АНОНС ПОДІЙ
                    </title>
                    <desc>АНОНС ПОДІЙ
                    </desc>
                    <defs>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="normal" font-size="90" font-family="HeliosCondLightC" font-style="condensed">
                        <text id="" fill="#fff" y="80">АНОНС ПОДІЙ
                        </text>
                    </g>
                </svg>
                <img id="arrow" src="/wp-content/themes/sigillum/img/arrow.png">
                <img id="knot3" src="/wp-content/themes/sigillum/img/knot.png">
                <img id="smoke1" src="/wp-content/themes/sigillum/img/smokes/1.png">
                <img id="smoke2" src="/wp-content/themes/sigillum/img/smokes/2.png">
                <img id="smoke3" src="/wp-content/themes/sigillum/img/smokes/3.png">
                <img id="smoke4" src="/wp-content/themes/sigillum/img/smokes/2.png">
                <img id="smoke5" src="/wp-content/themes/sigillum/img/smokes/5.png">
            </div>
        </div>
        <div id="events">
        </div>
        <!-- ********************-->
        <!-- ** Grants intro-->
        <!-- ********************-->
        <div class="project_grantsintro" id="gra_intro">
            <div class="project_grantsintro__bcg">
            </div>
            <div class="project_grantsintro__content">
                <svg id="gra_text" width="600px" height="100px" viewbox="0 0 600 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>ПРЕМІЇ ТА ГРАНТИ
                    </title>
                    <desc>ПРЕМІЇ ТА ГРАНТИ
                    </desc>
                    <defs>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-weight="normal" font-size="90" font-family="HeliosCondLightC" font-style="condensed">
                        <text id="" fill="red" y="80">ПРЕМІЇ ТА ГРАНТИ
                        </text>
                    </g>
                </svg>
                <img id="stamp2" src="/wp-content/themes/sigillum/img/stamp2.png">
                <img id="knot4" src="/wp-content/themes/sigillum/img/knot.png">
                <img id="paper4" src="/wp-content/themes/sigillum/img/paper2.png">
                <img id="hand3" src="/wp-content/themes/sigillum/img/glove.png">
                <img id="hand4" src="/wp-content/themes/sigillum/img/glove.png">
                <img class="wax" id="wax1" src="/wp-content/themes/sigillum/img/wax/1.png">
                <img class="wax" id="wax2" src="/wp-content/themes/sigillum/img/wax/2.png">
                <img class="wax" id="wax3" src="/wp-content/themes/sigillum/img/wax/3.png">
                <img class="wax" id="wax4" src="/wp-content/themes/sigillum/img/wax/4.png">
                <img class="wax" id="wax5" src="/wp-content/themes/sigillum/img/wax/5.png">
                <img class="wax" id="wax6" src="/wp-content/themes/sigillum/img/wax/6.png">
                <img class="wax" id="wax10" src="/wp-content/themes/sigillum/img/wax/10.png">
                <img class="wax" id="wax11" src="/wp-content/themes/sigillum/img/wax/11.png">
                <img id="smoke6" src="/wp-content/themes/sigillum/img/smokes/3.png">
            </div>
        </div>
        <div id="grants">
        </div>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--script(type="text/javascript" src="/wp-content/themes/sigillum/js/script.js")-->
    <script>window.jQuery || document.write('<script src="/wp-content/themes/sigillum/js/vendor/jquery-1.11.2.min.js"><\\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js">
    </script>
    <script src="/wp-content/themes/sigillum/js/ScrollMagic.min.js">
    </script>
    <script src="/wp-content/themes/sigillum/js/plugins/debug.addIndicators.min.js">
    </script>
    <script src="/wp-content/themes/sigillum/js/plugins/animation.gsap.min.js">
    </script>
    <script src="/wp-content/themes/sigillum/js/plugins/jquery.ScrollMagic.min.js">
    </script>
    <script src="/wp-content/themes/sigillum/js/DrawSVGPlugin.min.js">
    </script>
    <script src="/wp-content/themes/sigillum/js/SplitText.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/plugins/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/sigillum/js/handlebars.min.js">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js">
    </script>
    <script src="/wp-content/themes/sigillum/js/main.js">
    </script>
    <!--script(src='js/menu.js')-->


<?php
get_footer();
