<div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <ul class="line">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="menubg">
                <ul class="menu">
                    <li class="item"><a href="/"><span>01</span>Главная</a></li>
                    <li class="item"><a href="/catalog"><span>02</span>Каталог</a></li>
                    <li class="item"><a href="/gallery"><span>03</span>Галлерея домов</a></li>
                    <li class="item"><a href="/blog"><span>04</span>Энциклопедия</a></li>
                    <li class="item"><a href="/news"><span>05</span>Новости</a></li>
                    <li class="item"><a href="/contact"><span>06</span>Контакты</a></li>
                    <li class="socs">
                        <ul class="soc">
                            <li class="ico ico1"><a href="#"></a></li>
                            <li class="ico ico2"><a href="#"></a></li>
                            <li class="ico ico3"><a href="#"></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="search">
                <input type="text" value="" placeholder="Введите поисковый запрос...">
                <div class="button"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close" data-dismiss="modal" aria-label="Close"></div>
            <div class="success"><span>Спасибо</span><br>Ваш запрос отправлен, в ближайшее время с Вами свяжется наш специалист</div>
            <form action="#" method="POST" id="zay">
                <div class="form">
                    <div class="line">
                        <label for="message_name">Имя</label>
                        <input type="text" id="message_name" value="">
                    </div>
                    <div class="line">
                        <label for="message_phone">Телефон</label>
                        <input type="text" id="message_phone" value="">
                    </div>
                    <div class="line">
                        <label for="message_email">Email</label>
                        <input type="text" id="message_email" value="">
                    </div>
                    <div class="line line2">
                        <label for="message_text">Запрос</label>
                        <textarea id="message_text"></textarea>
                    </div>
                    <button type="submit" class="send">Отправить запрос</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="perezvon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close" data-dismiss="modal" aria-label="Close"></div>
            <div class="success"><span>Спасибо</span><br>Ваш запрос отправлен, в ближайшее время с Вами свяжется наш специалист</div>
            <form action="#" method="POST" id="zay_perezvon">
                <div class="form">
                    <div class="line">
                        <label for="perezvon_name">Имя</label>
                        <input type="text" id="perezvon_name" value="">
                    </div>
                    <div class="line">
                        <label for="perezvon_phone">Телефон</label>
                        <input type="text" id="perezvon_phone" value="">
                    </div>
                    <div class="line">
                        <label for="calltime">Время звонка</label>
                        <div class="time_range">
                            <input type="text" id="call_from" value="10:00">
                            <div class="chertochka">-</div>
                            <input type="text" id="call_to" value="21:00">
                        </div>
                    </div>
                    <button type="submit" class="send">Заказать звонок</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade my_modal" id="modal_staff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>

<div class="modal fade my_modal" id="modal_preim" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>

<div class="modal fade" id="room_zoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <a class="close" href="#" data-dismiss="modal" aria-label="Close"></a>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>    
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_welcome_s2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="close" data-dismiss="modal"></div>
            <div class="textMore">

            </div>
        </div>
    </div>
</div>

<div id="search_bg">
    <img src='/images/search_logo.svg' class='logo'>
    <i class="material-icons">close</i>
    <div class='bg'>
        <div class='inp'>
            <input type='text' value='' placeholder='Введите поисковый запрос...'>
            <img src='/images/search.svg'>
        </div>
    </div>
</div>

<div id="rotateplz">
    <div class="rotate"></div>
    <div class="desc">Переверните устройство<br> для корректного отображения сайта</div>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/jquery.sticky-kit.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/jquery.ui.touch-punch.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easings.min.js"></script>
<script src="/js/scrolloverflow.min.js"></script>
<script src="/js/jquery.mousewheel.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.touchSwipe.min.js"></script>
<script src="/js/jquery.reel.js"></script>
<script src="/js/jquery.arcticmodal-0.3.min.js"></script>
<script src="/js/tingle.js"></script>
<script src="/js/wheel-indicator.js"></script>
<script src="/js/jquery.transit.min.js"></script>
<script src="/js/fp.js?ver=<?php echo VIRTINA_VERSION; ?>"></script>


<script src="/js/main.js?ver=<?php echo VIRTINA_VERSION; ?>"></script>
<?php
    if (isset($page_js) && !empty($page_js)) {
        echo '<script src="/js/'.$page_js.'?ver='.VIRTINA_VERSION.'"></script>';
    }
?>

<?php
    if (isset($this->data['preload']) && $this->data['preload'] === true) {
        echo '<script src="/js/preloader.js?ver='.VIRTINA_VERSION.'"></script>';
    }
?>

</body>
</html>