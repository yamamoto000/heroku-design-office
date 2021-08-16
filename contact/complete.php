<?php

?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/destyle.css" rel="stylesheet" type="text/css">
        <link href="../css/common.css" rel="stylesheet" type="text/css">
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
                            <li><a href="../index.html#concept">Concept</a></li>
                            <li><a href="../index.html#service">Service</a></li>
                            <li><a href="../index.html#works">Works</a></li>
                            <li><a href="../index.html#contact">Contact</a></li>
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
        <div class="top-image page-image contact" id="top-image">
            <div class="container">
                <div class="page-image-content">
                    <div class="title">
                        <p>Contact</p>
                    </div>
                    <div class="title-foot"><p>Contact us</p></div>
                </div>
            </div>
        </div>
        <div class="container">
            <p>送信完了しました。<br>ありがとうございました。</p>
                <div class="button yellow">
                    <a href="../">ホームに戻る</a>
                </div>
        </div>

 
        <footer>
          <small>&copy;cresta.design all rights reserved</small>  
        </footer>
    </body>
    <link href="js/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="js/slick.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="../js/jquery.bgswitcher.js"></script>
    <script src="../js/common.js"></script>
    <script>
    jQuery(function($) {
        $('.bg-slider').bgSwitcher({
            images: ['../img/fv-bgi_01@2x.jpg','../img/fv-bgi_02@2x.jpg','../img/fv-bgi_03@2x.jpg'], // 切り替える背景画像を指定
        });
    });
    </script>
</html>