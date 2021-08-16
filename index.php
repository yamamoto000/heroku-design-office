<?php ?>
<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"
        <link href="css/destyle.css" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        <link href=“https://fonts.googleapis.com/css?family=Noto+Serif|Noto+Serif+JP&display=swap” rel=“stylesheet”>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="flex">
                    <div class="header-left">
                        <a href="/">Cresta Design</a>
                    </div>
                    <div class="header-right">
                        <ul>
                            <li><a href="#concept">Concept</a></li>
                            <li><a href="#service">Service</a></li>
                            <li><a href="#works">Works</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <div class="menu">
                            <button class="menu__button">
                              <span class="menu__lineTop"></span>
                              <span class="menu__lineMiddle"></span>
                              <span class="menu__lineBottom"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header> 
        <div class="top-image bg-slider" id="top-image">
            <div class="container">
                <div class="top-title"><p>Design for Smile.</p></div>
                <div class="top-sub-title"><p>快適なオフィスを<br class="sp-show">デザインする</p></div>
            </div>
        </div>

        <div class="section concept" id="concept">
            <div class="container">
                <div class="container">
                    <div class="section-title"><p>CONCEPT</p></div>
                </div>
                <div class="tac"><p>“働きたくなる空間”をデザインすることで<br>人々を幸せにする。</p></div>
                <div class="container">
                    <div class="flex">
                        <div><p>私たちは、オフィスに特化した空間デザイン専門としております。その理由は、「働きたくなる空間で仕事ができれば多くの人を幸せにできるのではないか」と考えるためです。そんな想いの株式会社Cresta Designだからこそできる空間デザインを提供させていただきます。</p></div>
                        <div><img src="./img/concept-image@2x.jpg"></div>
                    </div>
                </div>
                <div class="section-foot right"><p>Our Concept</p></div>
            </div>
        </div>

        <div class="works-wrap" id="works">
        <div class="section works">
            <div class="container">
                <div class="section-title right"><p>Works</p></div>
                <div class="card-wrap">
                    <div class="flex">
                        <div class="card">
                            <img src="./img/card-img01@2x.jpg">
                            <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
                        </div>
                        <div class="card">
                            <img src="./img/card-img02@2x.jpg">
                            <p>新規サイトを公開しました。今回のサイトは白と黒を基調にした。</p>
                        </div>
                        <div class="card">
                            <img src="./img/card-img03@2x.jpg">
                            <p>新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
                        </div>
                    </div>
                </div>
                <div class="button yellow">
                    <a href="">View more</a>
                </div>
                <div class="section-foot"><p>Our Works</p></div>
            </div>
        </div>
        </div>

        <div class="section service" id="service">
            <div class="container">
                <div class="container">
                    <div class="section-title"><p>Service</p></div>
                </div>
            </div>
            <div class="service-img-wrap">
                <div class="flex">
                    <!-- <div class="img_wrap">
                        <img src="https://cotodama.co/wp-content/uploads/2018/09/css_mouseover_img03.png">
                        <p>Hearing</p>
                    </div>                       -->
                    <div class="service-img first"><div class="hover-box"><p>Hearing</p></div></div>
                    <div class="service-img second"><div class="hover-box"><p>Planning</p></div></div>
                    <div class="service-img third"><div class="hover-box"><p>Direction</p></div></div>
                </div>
            </div>
            <div class="container">
                <div class="section-foot right"><p>Our Service</p></div>
            </div>
        </div>

        <div class="section contact" id="contact">
            <div class="container">
                <div class="section-title right"><p>Contact</p></div>
                <div class="tac"><p>お気軽にご相談ください。</p></div>
                <div class="button yellow">
                    <a href="./contact">Contact</a>
                </div>
                <div class="section-foot"><p>Contact us</p></div>
            </div>
        </div>
 
        <footer>
          <small>&copy;cresta.design all rights reserved</small>  
        </footer>
    </body>
    <!-- <link href="js/slick-theme.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="js/slick.css" rel="stylesheet" type="text/css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="js/slick.min.js"></script> -->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
    <script src="./js/jquery.bgswitcher.js"></script>
    <script src="./js/common.js"></script>
    <script>
    jQuery(function($) {
        $('.bg-slider').bgSwitcher({
            images: ['./img/fv-bgi_01@2x.jpg','./img/fv-bgi_02@2x.jpg','./img/fv-bgi_03@2x.jpg'], // 切り替える背景画像を指定
        });
    });
    </script>
</html>