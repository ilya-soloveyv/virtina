<!doctype html>
<html lang="en">
<head>
    <title><?php if (isset($this->data['title']) && !empty($this->data['title'])) { echo $this->data['title']; } else {echo "Virtina"; } ?></title>
    <meta charset="utf-8">
    <link rel="icon" href="/images/favicon-16.png">
    <meta name="theme-color" content="#161616">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link href="/css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="/css/tingle.css?ver=<?php echo VIRTINA_VERSION; ?>" rel="stylesheet" type="text/css">
    <link href="/css/fp.css?ver=<?php echo VIRTINA_VERSION; ?>" rel="stylesheet" type="text/css">
    <link href="/css/jquery.arcticmodal-0.3.css" rel="stylesheet" type="text/css">
    <link href="/css/main.css?ver=<?php echo VIRTINA_VERSION; ?>" rel="stylesheet">
    <link href="/css/page_welcome.css?ver=<?php echo VIRTINA_VERSION; ?>" rel="stylesheet">
    <link href="/css/page_catalog.css?ver=<?php echo VIRTINA_VERSION; ?>" rel="stylesheet">
    <link href="/css/page_dom.css?ver=<?php echo VIRTINA_VERSION; ?>" rel="stylesheet">
</head>
<body oncontextmenu="return false" oncopy="return false;" oncontextmenu="return false" onselectstart="return false;">

<?php
    if (isset($this->data['preload']) && $this->data['preload'] === true && (get_cookie("preloader") != 1)) {
        echo '
            <div id="preloader">
                <div class="l"></div>
                <div class="r"></div>
                <div id="loader">
                    <img src="/images/logo.png">
                    <div id="perc">
                        <div id="full"></div>
                    </div>
                </div>
            </div>    
        ';
    }
?>

<header>
    <a href="/" class="logo"></a>
    <?php
        if(isset($this->data['h1']))
        {
            echo '<h1>'.$this->data['h1'].'</h1>';
        }
        if($this->uri->segment(1) == "catalog" && !empty($this->uri->segment(2)))
        {
            echo '
                <ul class="dopmenu">
                    <li><a href="/catalog">Каталог</a>
                        <ul>';
                        if ($this->uri->segment(2) == "dom1") {
                            echo '<li class="active"><a href="/catalog/dom1">1.100</a></li>';
                        } else {
                            echo '<li><a href="/catalog/dom1">1.100</a></li>';
                        }
                        if ($this->uri->segment(2) == "dom2") {
                            echo '<li class="active"><a href="/catalog/dom2">1.210</a></li>';
                        } else {
                            echo '<li><a href="/catalog/dom2">1.210</a></li>';
                        }
                        if ($this->uri->segment(2) == "dom4") {
                            echo '<li class="active"><a href="/catalog/dom4">2.190</a></li>';
                        } else {
                            echo '<li><a href="/catalog/dom4">2.190</a></li>';
                        }
                        if ($this->uri->segment(2) == "dom3") {
                            echo '<li class="active"><a href="/catalog/dom3">2.340</a></li>';
                        } else {
                            echo '<li><a href="/catalog/dom3">2.340</a></li>';
                        }
                            echo '
                        </ul>
                    </li>
                    <li><a href="/gallery">Галерея</a></li>
                </ul>
            ';
        }
    ?>
    <div class="menu" data-toggle="modal" data-target="#menu"></div>
    <div class="auth d-none d-md-block">Вход</div>
    <a class="phone_click d-block d-sm-none" href="tel:+74993919197">+7 (499) 391-91-97</a>
    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=79253919197&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5" target="_blank"><img src="/images/whatsapp.svg" alt="whatsapp"></a>
    <div class="phone d-none d-sm-block" data-toggle="modal" data-target="#perezvon">+7 (499) 391-91-97</div>
    <div class="search">
        <div class="ico"></div>
    </div>
</header>