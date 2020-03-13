<?php $this->load->view('basic/header'); ?>

<div id="preloader2">
    <ul>
        <li class="preloader2_item"></li>
        <li class="preloader2_item"></li>
        <li class="preloader2_item"></li>
        <li class="preloader2_item"></li>
        <li class="preloader2_item"></li>
        <li class="preloader2_item"></li>
        <li class="preloader2_item"></li>
        <li class="preloader2_item"></li>
        <li class="preloader2_item"></li>
        <li class="preloader2_item"></li>
    </ul>
</div>

<ul id="myMenu" class="black">
    <li data-section="dom1" class="active"><a href="#dom1"><span class="line"></span><span class="number">01</span><span class="title">Обзор</span></a></li>
    <li data-section="dom2"><a href="#dom2"><span class="line"></span><span class="number">02</span><span class="title">О доме</span></a></li>
    <li data-section="dom3"><a href="#dom3"><span class="line"></span><span class="number">03</span><span class="title">Экстерьер</span></a></li>
    <li data-section="dom4"><a href="#dom4"><span class="line"></span><span class="number">04</span><span class="title">Виды</span></a></li>
    <li data-section="dom5"><a href="#dom5"><span class="line"></span><span class="number">05</span><span class="title">Детали</span></a></li>
    <li data-section="dom6"><a href="#dom6"><span class="line"></span><span class="number">06</span><span class="title">Интерьер</span></a></li>
    <li data-section="dom7"><a href="#dom7"><span class="line"></span><span class="number">07</span><span class="title">Планировка</span></a></li>
    <li data-section="dom8"><a href="#dom8"><span class="line"></span><span class="number">08</span><span class="title">Контакты</span></a></li>
</ul>


<div id="fp">
    <section class="section dom1" data-headerDark="0" data-hiddenHeader="0" data-menuDark="0"  data-hiddenMenu="0" data-menuActive="0">
        <div class="day">
            <img src="/images/dom/<?php echo $this->data['dom'][0]->iDomID; ?>/1.jpg">
        </div>
        <div class="night_bg">
            <div class="st animated infinite rubberBand delay-2s"></div>
            <div class="night_overflow">
                <div class="night" style="background-image: url('/images/dom/<?php echo $this->data['dom'][0]->iDomID; ?>/2.jpg');">
                </div>
            </div>
        </div>
        <div class="data">
            <div class="title"><?php echo $this->data['dom'][0]->dom1_title; ?></div>
            <div class="items">
                <div class="item"><img src="/images/dom/dom1/square.svg"><span><?php echo $this->data['dom'][0]->iDomArea; ?></span><span>м<sup><small>2</small></sup></span></div>
                <div class="item"><img src="/images/dom/dom1/flats.svg"><span><?php echo $this->data['dom'][0]->iDomFloor; ?></span><span><?php echo $this->my->plural($this->data['dom'][0]->iDomFloor, array('этаж', 'этажа', 'этажей')); ?></span></div>
                <div class="item"><img src="/images/dom/dom1/bedroom.svg"><span><?php echo $this->data['dom'][0]->iDomRoomCount; ?></span><span><?php echo $this->my->plural($this->data['dom'][0]->iDomRoomCount, array('комната', 'комнаты', 'комнат')); ?></span></div>
                <div class="item"><img src="/images/dom/dom1/bath.svg"><span><?php echo $this->data['dom'][0]->iDomSanuzelCount; ?></span><span><?php echo $this->my->plural($this->data['dom'][0]->iDomSanuzelCount, array('санузел', 'санузла', 'санузлов')); ?></span></div>
            </div>
            <div class="price">от 5 млн ₽</div>
        </div>
    </section>
    <section class="section dom2" data-headerDark="0" data-hiddenHeader="0" data-menuDark="0"  data-hiddenMenu="1" data-menuActive="1">
        <h2>О доме</h2>
        <div class="data">
            <div class="l">
                <img
                    src="/images/dom/<?php echo $this->data['dom'][0]->iDomID; ?>/3d/<?php echo $this->data['dom'][0]->mask_3d; ?>0000.jpg"
                    class="reel"
                    data-wheelable="false"
                    data-speed="0.1"
                    id="image"
                    data-images="/images/dom/<?php echo $this->data['dom'][0]->iDomID; ?>/3d/<?php echo $this->data['dom'][0]->mask_3d; ?>####.jpg|0..119">
            </div>
            <div class="r moreTextContainer">
                <div class="bg text_for_more">
                    <div class='title'><?php echo $this->data['dom'][0]->dom3_title; ?></div>
                    <?php echo $this->data['dom'][0]->dom3_text; ?>
                </div>
                <div class='moreText black'><a href="#">Подробнее</a></div>
            </div>
        </div>
    </section>
    <section class="section dom3" data-headerDark="1" data-hiddenHeader="0" data-menuDark="0"  data-hiddenMenu="1" data-menuActive="2">
        <h2>Экстерьер</h2>
        <div class="data color<?php echo $color[0]->iColorID; ?>">
            <ul class="color">
                <?php
                    foreach ($color as $k => $v) {
                        $active = ($k == 0) ? " active" : null;
                        echo '<li data-color="color'.$v->iColorID.'" data-iColorID="'.$v->iColorID.'" class="color'.$v->iColorID.$active.'">'.$v->sColorTitle.'</li>';
                    }
                ?>
            </ul>
            <div class="owl-carousel" data-iDomID="<?php echo $dom[0]->iDomID; ?>" data-sColorStyle="<?php echo $color[0]->iColorID; ?>" data-dom_section_3='<?php echo json_encode($dom_section_3); ?>'>
                <?php
                    foreach ($dom_section_3 as $k => $v) {
                        echo '<div class="item item'.$k.'" data-i="'.$v['iRakursValue'].'">';
                            foreach ($v['color'] as $k2 => $v2) {
                                echo '<img src="/images/dom/'.$dom[0]->iDomID.'/dom3/color'.$k2.'/'.$v2.'" class="color'.$k2.'">';
                            }
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="section dom4" data-headerDark="1" data-hiddenHeader="0" data-menuDark="1"  data-hiddenMenu="1" data-menuActive="3">
        <h2>Виды</h2>
        <div class="data color<?php echo $color[0]->iColorID; ?>">
            <ul class="color">
                <?php
                    foreach ($color as $k => $v) {
                        $active = ($k == 0) ? " active" : null;
                        echo '<li data-color="color'.$v->iColorID.'" data-iColorID="'.$v->iColorID.'" class="color'.$v->iColorID.$active.'">'.$v->sColorTitle.'</li>';
                    }
                ?>
            </ul>
            <div class="owl-carousel" data-iDomID="<?php echo $dom[0]->iDomID; ?>" data-sColorStyle="<?php echo $color[0]->iColorID; ?>" data-dom_section_4='<?php echo json_encode($dom_section_4); ?>'>
                <?php
                    foreach ($dom_section_4 as $k => $v) {
                        echo '<div class="item item'.$k.'" data-i="'.$v['iRakursValue'].'">';
                            foreach ($v['color'] as $k2 => $v2) {
                                echo '<img src="/images/dom/'.$dom[0]->iDomID.'/dom4/color'.$k2.'/'.$v2.'" class="color'.$k2.'">';
                            }
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="section dom5" data-headerDark="1" data-hiddenHeader="0" data-menuDark="1"  data-hiddenMenu="1" data-menuActive="4">
        <h2>Детали</h2>
        <ul class="line">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="data">
            <div class="owl-carousel">
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/1.svg"><span>Внешняя отделка</span></div>
                    <div class="desc">Выполнена из имитации бруса высшего класса А. Опционально возможна отделка из планкена. Если вам требуется еще больше индивидуальности, то мы предложим передовые отделочные материалы - термодревесина и фиброцементный сайдинг.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/2.svg"><span>Внутренняя отделка</span></div>
                    <div class="desc">Индивидуально разработана нашими дизайнерами для каждого проекта в соответствии с концепцией современного скандинавского стиля. Помещения сдаются полностью готовыми. При желании, вам даже не нужно будет покупать мебель.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/3.svg"><span>Инженерные системы</span></div>
                    <div class="desc">Свет, вода, разводка отопления, умный дом - все это уже будет в вашем доме. Вам остается подключить смартфон, чтобы дом стал с вами единым целым.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/4.svg"><span>Сроки возведения</span></div>
                    <div class="desc">Благодаря набору оптимальных технологий и разработанному нами плану производства работ, нам удалось оптимизировать сроки возведения. Многие работы производятся параллельно, что дает сокращение сроков в 1.5-2 раза.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/5.svg"><span>Дом квартира</span></div>
                    <div class="desc">Удобства и простота использование квартиры перенесены нами в формат загородного дома. Не нужно отказываться от привычного. Полностью готовый дом будет ждать вас. Мы даже поможем осуществить переезд. Вам остается только собрать вещи.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/6.svg"><span>Планировки</span></div>
                    <div class="desc">Мы постарались сделать планировки максимально просторными и функциональными. Каждая адаптирована под конкретный проект дома, учитывая последние тренды. Возможность частичной перепланировки, позволит индивидуально “настроить” пространство.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/7.svg"><span>Материалы</span></div>
                    <div class="desc">Мы не экономим на качестве материалов. Все они соответствуют ГОСТ и требованиям экологичности. Ваш новый дом прослужит долгие годы, будет экологически чистым и безопасным.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/8.svg"><span>Цена</span></div>
                    <div class="desc">Приятно овладеть жильем площадью в 2-3 раза больше и без усилий, при этом не потратить больше стоимости средней квартиры в Москве. С нами вы получите индивидуальную, полностью готовую жилую площадь с дизайнерской отделкой.</div>
                </div>
            </div>
            <div class="setka">
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/1.svg"><span>Внешняя отделка</span></div>
                    <div class="desc">Выполнена из имитации бруса высшего класса А. Опционально возможна отделка из планкена. Если вам требуется еще больше индивидуальности, то мы предложим передовые отделочные материалы - термодревесина и фиброцементный сайдинг.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/2.svg"><span>Внутренняя отделка</span></div>
                    <div class="desc">Индивидуально разработана нашими дизайнерами для каждого проекта в соответствии с концепцией современного скандинавского стиля. Помещения сдаются полностью готовыми. При желании, вам даже не нужно будет покупать мебель.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/3.svg"><span>Инженерные системы</span></div>
                    <div class="desc">Свет, вода, разводка отопления, умный дом - все это уже будет в вашем доме. Вам остается подключить смартфон, чтобы дом стал с вами единым целым.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/4.svg"><span>Сроки возведения</span></div>
                    <div class="desc">Благодаря набору оптимальных технологий и разработанному нами плану производства работ, нам удалось оптимизировать сроки возведения. Многие работы производятся параллельно, что дает сокращение сроков в 1.5-2 раза.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/5.svg"><span>Дом квартира</span></div>
                    <div class="desc">Удобства и простота использование квартиры перенесены нами в формат загородного дома. Не нужно отказываться от привычного. Полностью готовый дом будет ждать вас. Мы даже поможем осуществить переезд. Вам остается только собрать вещи.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/6.svg"><span>Планировки</span></div>
                    <div class="desc">Мы постарались сделать планировки максимально просторными и функциональными. Каждая адаптирована под конкретный проект дома, учитывая последние тренды. Возможность частичной перепланировки, позволит индивидуально “настроить” пространство.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/7.svg"><span>Материалы</span></div>
                    <div class="desc">Мы не экономим на качестве материалов. Все они соответствуют ГОСТ и требованиям экологичности. Ваш новый дом прослужит долгие годы, будет экологически чистым и безопасным.</div>
                </div>
                <div class="item">
                    <div class="title"><img src="/images/dom/dom5/8.svg"><span>Цена</span></div>
                    <div class="desc">Приятно овладеть жильем площадью в 2-3 раза больше и без усилий, при этом не потратить больше стоимости средней квартиры в Москве. С нами вы получите индивидуальную, полностью готовую жилую площадь с дизайнерской отделкой.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section dom6" data-headerDark="1" data-hiddenHeader="0" data-menuDark="1"  data-hiddenMenu="1" data-menuActive="5">
        <h2>Интерьер</h2>
        <ul class="line">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="data">
            <div class="menu">
                <ul>
                    <?php
                        foreach ($dom_room as $k => $v) {
                            $active = ($k == 0) ? " class='active'" : false;
                            echo '<li'.$active.'>'.$v['sRoomTitle'].'</li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="slider">
                <div class="owl-carousel">
                    <?php
                        foreach ($dom_room as $k => $v) {
                            $noimg = (empty($v['photo'])) ? " noimg" : "";
                            echo '<div class="item'.$noimg.'">';
                                if (!empty($v['photo'])) {
                                    echo '<div class="img">';
                                        echo '<ul>';
                                            foreach ($v['photo'] as $k2 => $v2) {
                                                echo '<li><img src="/images/dom/dom6/'.$v['iRoomID'].'/'.$v2['sFileName'].'"></li>';
                                            }
                                        echo '</ul>';
                                        echo '<div class="prev slide_prev"><i class="material-icons">keyboard_arrow_left</i></div>';
                                        echo '<div class="next slide_next"><i class="material-icons">keyboard_arrow_right</i></div>';
                                        echo '<i class="zoom"></i>';
                                    echo '</div>';
                                }
                                echo '<div class="desc">';
                                    echo '<div class="title">'.$v['sRoomTitle'].'</div>';
                                    echo '<div class="area">'.$v['iArea'].' м<sup><small>2</small></sup></div>';
                                    echo $v['tRoomText'];
                                echo '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>        
    </section>
    <section class="section dom7" data-headerDark="1" data-hiddenHeader="0" data-menuDark="1"  data-hiddenMenu="1" data-menuActive="6">
        <h2>Планировка</h2>
        <div class="data">
            <div class="slider">
                <div class="owl-carousel">
                    <?php
                        // echo'<pre>';print_r($this->data['dom_room']);echo'</pre>';
                        for ($i=1; $i <= $this->data['dom'][0]->iDomFloor; $i++) { 
                            echo '<div class="item">';
                                echo '<img src="/images/dom/dom7/'.$this->data['dom'][0]->iDomID.'/'.$i.'.jpg?ver=1" class="image-dom7">';
                                foreach ($this->data['dom_room'] as $k2 => $v2) {
                                    if($i == $v2['iFloorID'])
                                    {
                                        // var_dump($v['iArea']);
                                        $title = (!empty($v2['iArea'])) ? $v2['sRoomTitle']." - ".$v2['iArea']." м.кв" : $v2['sRoomTitle'];
                                        echo '<div class="point open_modal_dom6" data-iRoomID="'.$v2['iRoomID'].'" data-top="'.$v2['iPointPosY'].'" data-left="'.$v2['iPointPosX'].'" data-toggle="tooltip" data-placement="top" title="'.$title.'"></div>';
                                    }
                                }
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <?php
                        for ($i=1; $i <= $this->data['dom'][0]->iDomFloor; $i++) { 
                            $active = ($i == 1) ? " class='active'" : "";
                            echo '<li'.$active.'>'.$i.' этаж</li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="section dom8 section_black_footer" data-headerDark="0" data-hiddenHeader="1" data-menuDark="0"  data-hiddenMenu="1" data-menuActive="7">
        <?php $this->load->view('basic/black_footer'); ?>
    </section>
</div>

<?php $this->load->view('basic/footer'); ?>