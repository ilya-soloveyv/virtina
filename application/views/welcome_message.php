<?php $this->load->view('basic/header'); ?>

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

<ul id="myMenu">
    <li data-section="section1" class="active"><a href="#section1"><span class="line"></span><span class="number">01</span><span class="title">Главная</span></a></li>
    <li data-section="section2"><a href="#section2"><span class="line"></span><span class="number">02</span><span class="title">О проекте</span></a></li>
    <li data-section="section3"><a href="#section3"><span class="line"></span><span class="number">03</span><span class="title">Преимущества</span></a></li>
    <li data-section="section4"><a href="#section4"><span class="line"></span><span class="number">04</span><span class="title">Выбрать проект</span></a></li>
    <li data-section="section5"><a href="#section5"><span class="line"></span><span class="number">05</span><span class="title">Конструктор</span></a></li>
    <li data-section="section6"><a href="#section6"><span class="line"></span><span class="number">06</span><span class="title">О компании</span></a></li>
    <li data-section="section9"><a href="#section9"><span class="line"></span><span class="number">07</span><span class="title">Энциклопедия</span></a></li>
</ul>

<div id="fp">
    <div class="section section1 active" data-headerDark="0" data-hiddenHeader="0" data-menuDark="0"  data-hiddenMenu="0" data-menuActive="0">
        <h1 style="opacity: 0; padding-top: 100px;"><span>Virtina</span> - у истоков вашего будущего</h1>
        <div class="desc">Дизайн всегда уникален, технологии всегда совершенны</div>
        <div class="owl-carousel">
            <div class="item item0"><img src="/images/index/section1/1.svg"></div>
            <div class="item item1"><img src="/images/index/section1/2.svg"></div>
            <div class="item item2"><img src="/images/index/section1/3.svg"></div>
            <div class="item item3"><img src="/images/index/section1/4.svg"></div>            
        </div>
    </div>
    <div class="section section2" data-headerDark="1" data-hiddenHeader="0" data-menuDark="1"  data-hiddenMenu="1" data-menuActive="1">
        <h2>О компании</h2>
        <div class="bg">
            <div class="l">
                <img src="/images/index/section2/l.jpg">
            </div>
            <div class="r">
                <div class="img">
                    <img src="/images/index/section2/r.jpg">
                </div>
                <div class="data moreTextContainer">
                    <div class="text_for_more">
                        <div class="title"><span>Virtina</span> - У истоков Вашего будущего</div>
                        <p>Видите ли вы детально своё будущее место жительства или понимаете абстрактно на интуитивном уровне? Независимо от вашего восприятия, мы обязательно поймём вас и точно воплотим вашу мечту в реальность. Для нас - это лёгкая задача, т.к. мы новое поколение бизнеса, и предлагаем новый формат возведения каркасных домов под ключ за городом.</p>
                        <p>Уникальные типовые проекты, разработанные компанией VIRTINA, созданы со взглядом в будущее. При возведении используется только древесина 1 класса, соответствующая ГОСТ, экологически-чистые, дорогие и передовые материалы мировых лидеров, соответствующие линейке бизнес-класса, это Xiaomi, LG, Legrand, Rehau, Schneider Electric и др.   А по цене дома всё равно доступны рядовой семье, потому что мы изначально выстраивали бизнес-стратегию и оптимизировали процессы работы, ориентируясь на формирование низкой стоимости для покупателя.</p>
                        <p>Наше предложение - это альтернатива квартирам в многоэтажках, антагония классическому домостроению, где с каждым днём ценник увеличивается за счёт трат на не учтённое до этого обустройство.</p>
                    </div>
                    <div class='moreText'><a href="#">Подробнее</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section3" data-headerDark="1" data-hiddenHeader="0" data-menuDark="1"  data-hiddenMenu="1" data-menuActive="2">
        <h2>Преимущества</h2>
        <ul class="line">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="data">
            <?php
                foreach ($preim as $k => $v) {
                    echo '
                        <div class="item open_modal_preim" data-iPreimID="'.$v->iPreimID.'">
                            <div class="ico"><img src="/images/index/section3/ico_black/'.$v->iPreimID.'.svg"></div>
                            <div class="title">'.$v->sPreimTitle.'</div>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>
    <div class="section section4" data-headerDark="0" data-hiddenHeader="0" data-menuDark="0"  data-hiddenMenu="1" data-menuActive="3">
        <div class="l">
            <div class="owl-carousel">
                <div class="item" data-iDom='1'>
                    <img src="/images/dom/1/s_white.svg">
                </div>
                <div class="item" data-iDom='2'>
                    <img src="/images/dom/2/s_white.svg">
                </div>
                <div class="item" data-iDom='4'>
                    <img src="/images/dom/4/s_white.svg">
                </div>
                <div class="item" data-iDom='3'>
                    <img src="/images/dom/3/s_white.svg">
                </div>
            </div>
            <div class="desc">Дизайн и уникальные планировки<br> на любой вкус</div>
        </div>
        <div class="r">
            <div class="owl-carousel">
                <div class="item"><img src="/images/index/section4/1/1.jpg" data-f="1.jpg"></div>
                <div class="item"><img src="/images/index/section4/1/2.jpg" data-f="2.jpg"></div>
                <div class="item"><img src="/images/index/section4/1/3.jpg" data-f="3.jpg"></div>
                <div class="item"><img src="/images/index/section4/1/4.jpg" data-f="4.jpg"></div>
            </div>
            <div class="desc">+ готовые варианты<br> интерьера</div>
        </div>
        <a href="/catalog" class="link_house">Выбрать свой дом</a>

        <img src="/images/index/section4/1/1.jpg" width=0 height=0>
        <img src="/images/index/section4/1/2.jpg" width=0 height=0>
        <img src="/images/index/section4/1/3.jpg" width=0 height=0>
        <img src="/images/index/section4/1/4.jpg" width=0 height=0>
        <img src="/images/index/section4/2/1.jpg" width=0 height=0>
        <img src="/images/index/section4/2/2.jpg" width=0 height=0>
        <img src="/images/index/section4/2/3.jpg" width=0 height=0>
        <img src="/images/index/section4/2/4.jpg" width=0 height=0>
        <img src="/images/index/section4/3/1.jpg" width=0 height=0>
        <img src="/images/index/section4/3/2.jpg" width=0 height=0>
        <img src="/images/index/section4/3/3.jpg" width=0 height=0>
        <img src="/images/index/section4/3/4.jpg" width=0 height=0>
        <img src="/images/index/section4/4/1.jpg" width=0 height=0>
        <img src="/images/index/section4/4/2.jpg" width=0 height=0>
        <img src="/images/index/section4/4/3.jpg" width=0 height=0>
        <img src="/images/index/section4/4/4.jpg" width=0 height=0>

    </div>
    <div class="section section5" data-headerDark="0" data-hiddenHeader="0" data-menuDark="0"  data-hiddenMenu="1" data-menuActive="4">
        <h2>Конструктор</h2>
        <div class="title">Создайте свой уникальный вариант дома от VIRTINA</div>
        <div class="owl-carousel">
            <div class="item item0">
                <ul>
                    <li><img src="/images/index/section4/1-1.png"></li>
                    <li><img src="/images/index/section4/1-2.png"></li>
                    <li><img src="/images/index/section4/1-3.png"></li>
                    <li><img src="/images/index/section4/1-4.png"></li>
                    <!-- <li><img src="/images/dom/1/s_white.svg"></li>
                    <li><img src="/images/dom/2/s_white.svg"></li>
                    <li><img src="/images/dom/3/s_white.svg"></li>
                    <li><img src="/images/dom/4/s_white.svg"></li> -->
                </ul>
            </div>
            <div class="item">
                <img src="/images/index/section5/2.jpg">
            </div>
            <div class="item">
                <img src="/images/index/section5/3.jpg">
            </div>
            <div class="item">

            </div>
            <div class="item">

            </div>
        </div>
        <div class="steps">
            <div class="nums">
                <div class="item active activeDesc">
                    <div class="num">1</div>
                    <div class="desc">Выберите тип дома</div>
                </div>
                <div class="item">
                    <div class="num">2</div>
                    <div class="desc">Внешнюю отделку</div>
                </div>
                <div class="item">
                    <div class="num">3</div>
                    <div class="desc">Внутренний интерьер</div>
                </div>
                <div class="item">
                    <div class="num owl-dot">4</div>
                    <div class="desc">Дополнительные опции</div>
                </div>
                <div class="item">
                    <div class="num">5</div>
                    <div class="desc">Малые архитектурные формы</div>
                </div>
            </div>
            <div class="steps_progress">
                <div class="items">
                    <div class="item">
                        <div class="line"><div class="full"></div></div>                        
                    </div>
                    <div class="item">
                        <div class="line"><div class="full"></div></div>                        
                    </div>
                    <div class="item">
                        <div class="line"><div class="full"></div></div>                        
                    </div>
                    <div class="item">
                        <div class="line"><div class="full"></div></div>                        
                    </div>
                </div>
            </div>
            <div class="step_desc">Выберите тип дома</div>
        </div>
        <a href="#" class="create">Создать свой вариант</a>
    </div>
    <div class="section section6" data-headerDark="1" data-hiddenHeader="0" data-menuDark="1"  data-hiddenMenu="1" data-menuActive="5">
        <h2>Философия</h2>
        <div class="data">
            <div class="l">
                <div class="owl-carousel">
                    <div class="item moreTextContainer">
                        <div class="image"><img src="/images/index/section6/1-1.jpg"></div>
                        <div class="text">
                            <div class="desc text_for_more">
                                <h3>Наша основа</h3>
                                <p>Основой нашей философии является идея сделать переезд за город простым. Мы хотим, чтобы каждый человек по щелчку пальцев мог переехать в свой дом, при этом не погружаясь в заботы, связанные с постройкой дома, его отделкой и ремонтом.</p>
                                <p>Наши клиенты избавлены от проектирования, закупки материалов, разговоров с рабочими и тягот ремонта, который обычно затягивается на месяцы, а иногда и годы. Самое сложное, что нужно сделать - это выбрать тип дома и понравившийся вариант дизайнерской отделки.</p>
                                <p>В дизайне внутреннего пространства уже учтена вся мебель для создания максимального комфорта. Клиент может приобрести предметы обстановки сам, по листу спецификаций со ссылками на магазин, или доверить покупку и сборку специалистам нашей компании.</p>
                            </div>
                            <div class='moreText'><a href="#">Подробнее</a></div>
                        </div>
                    </div>
                    <div class="item moreTextContainer">
                        <div class="image"><img src="/images/index/section6/1-2.jpg"></div>
                        <div class="text">
                            <div class="desc text_for_more">
                                <h3>Наше убеждение</h3>
                                <p>Мы убеждены, что переезд за город должен быть не только простым, но еще и доступным. Мы хотим дать каждому человеку возможность купить свой дом. И не просто дом, а дом уровня бизнес класса c готовой дизайнерской отделкой, стоимость за который эквивалентна стоимости средней квартиры в спальном районе Москвы.</p>
                                <p>Бытует мнение, что доступная цена сопряжена с тотальной экономией и потерей в качестве. Наша концепция диаметрально противоположна. Мы экономим не за счет стоимости материалов или квалификации рабочих, а на оптимизации рабочих процессов и просчитанных алгоритмах. Мы заранее разработали типовые решения, запланировали возможные издержки,  сроки и этапы возведения. Нам удалось достичь баланса между индивидуальностью и типовой застройкой. Благодаря этому появилась возможность предложить нашим клиентам высококлассное жилье по приемлемой стоимости.</p>
                        </div>
                        <div class='moreText'><a href="#">Подробнее</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="r">
                <div class="owl-carousel">
                    <div class="item">
                        <img src="/images/index/section6/2-1.jpg">
                    </div>
                    <div class="item">
                        <img src="/images/index/section6/2-2.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section7" data-headerDark="0" data-hiddenHeader="0" data-menuDark="0"  data-hiddenMenu="1" data-menuActive="5">
        <h2>Оснащение</h2>
        <div class="owl-carousel">
            <div class="item item0">
                <div class="img"><img src="/images/index/section7/1.jpg"></div>
                <h3>Окна Rehau Grazio</h3>
                <div class="desc">
                    Панорамные окна из пятикамерного профиля Rehau с ламинацией, снабженные эффективным двухкамерным энергосберегающим стеклопакетом с тонировкой, помогут сохранить тепло и приватность в вашем доме. Теплоизоляция равна 0,85 м2°С/Вт, что эквивалентно кирпичной стене толщиной 850мм.<br>
                    Окна в описанной комплектации входят в стандартное оснащение дома. По индивидуальному заказу мы можем изготовить окна любого цвета, открывания и укомплектовать стеклопакетом с различными функциями.
                </div>
            </div>
            <div class="item item1">
                <div class="img"><img src="/images/index/section7/2.jpg"></div>
                <h3>Конвекторы Varmann</h3>
                <div class="desc">Конвекторы напольного крепления Varmann MiniKon отлично вписываются в современный дизайн. Они компактны и неприхотливы в использовании. Известный и зарекомендовавший себя бренд гарантирует высокое качество и надежность. Максимальный предел температуры теплоносителя в 1300 позволяет обеспечить теплом любое помещение. По индивидуальному заказу радиатор может быть окрашен в любой цвет по RAL.</div>
            </div>
            <div class="item item2">
                <div class="img"><img src="/images/index/section7/3.jpg"></div>
                <h3>Приточно-вытяжная вентиляция</h3>
                <div class="desc">Наши дома оснащены приточными оконными клапанами со встроенными датчиками влажности. Клапаны постоянно обновляют воздух в доме и поддерживают оптимальный уровень влажности. Для повышения энергоэффективности дома мы рекомендуем использовать принудительную систему вентиляции с рекуперацией. Автоматическая система обеспечивает полную замену воздуха в доме в течении 5-7 часов, а благодаря рекуператорам вы сохраните более 70% тепла, экономя на отоплении.</div>
            </div>
            <div class="item item3">
                <div class="img"><img src="/images/index/section7/4.png"></div>
                <h3>Охранная система</h3>
                <div class="desc">Инстинкт самосохранения является самым сильным. В связи с этим люди хотят максимально защитить себя от негативных факторов и опасностей. Одним из «контуров» такой защиты может служить система безопасности, включающая в себя датчики открывания окон и дверей, внутренние и внешние датчики движения. При обнаружении несанкционированного доступа система автоматически передаст сигнал на пульт дежурного или службы охраны. Возможны различные конфигурации охранной системы и индивидуальная настройка.</div>
            </div>
            <div class="item item4">
                <div class="img"><img src="/images/index/section7/5.png"></div>
                <h3>Кондиционирование</h3>
                <div class="desc">Системы кондиционирования стали неотъемлемой частью нашей жизни, поэтому компания VIRTINA в обязательном порядке предусмотрела возможность установки кондиционеров и сплит систем в своих домах. Вам осталось только определиться с помещениями, для которых необходим кондиционер.</div>
            </div>
            <div class="item item5">
                <div class="img"><img src="/images/index/section7/6.jpg"></div>
                <h3>Базовая система умного дома</h3>
                <div class="desc">Система управляет самыми основными коммуникациями дома – отоплением и электропитанием. <br>Позволяет в нужный момент включить отопление или поддерживать заданную температуру. Вы можете не беспокоиться об оставленном свете или утюге - с помощью мобильного устройства вы легко выключите электропитание в настроенных зонах. Управляйте домом из любой точки мира.
                </div>
            </div>
            <div class="item item6">
                <div class="img"><img src="/images/index/section7/7.jpg"></div>
                <h3>Продвинутая система умного дома</h3>
                <div class="desc">Легкое управление отоплением, электропитанием, внутренним освещением и иллюминацией дома. Открытие и запирание дверей при помощи мобильного устройства. Индивидуальная настройка температуры в каждой комнате помогает создать больший комфорт и экономить на отоплении. Продвинутая система позволяет объединять и добавлять большой спектр устройств в одну сеть. Объедините датчики движения, задымления, затопления, охранную систему и другие.</div>
            </div>
            <div class="item item7">
                <div class="img"><img src="/images/index/section7/8.jpg"></div>
                <h3>Индивидуальная система умного дома</h3>
                <div class="desc">Индивидуальный проект умного дома позволит объединить все приборы и устройства в одну систему и управлять ей дистанционно. Настройка настолько тонкая, что дает возможность управлять индивидуально каждым блоком розеток, подключить в общую систему управление климатическими устройствами. Система оснащается датчиками движения, задымления, затопления, базовой охранной системой.</div>
            </div>
            <div class="item item8">
                <div class="img"><img src="/images/index/section7/9.jpg"></div>
                <h3>Система видеонаблюдения</h3>
                <div class="desc">Постоянное и непрерывное наблюдение за вашим домом. Вы можете выбрать как пакет для внутреннего или внешнего наблюдения, так и оба сразу. Система можем быть интегрирована в «умный дом» и иметь независимый источник питания, на случай отключения общего электроснабжения.</div>
            </div>
            <div class="item item9">
                <div class="img"><img src="/images/index/section7/10.jpg"></div>
                <h3>Солнечные батареи</h3>
                <div class="desc">Рост цен на электричество и спрос на чистую энергию, а также желание иметь загородный дом в нетронутом, уединенном месте, делает все более популярными солнечные батареи. Их можно использовать как резервный источник питания для основных систем, так и для полноценного обеспечения электроэнергией всего дома. Компания VIRTINA предлагает установку всепогодных солнечных панелей, которые работают и зимой и летом.</div>
            </div>
            <div class="item item10">
                <div class="img"><img src="/images/index/section7/11.jpg"></div>
                <h3>Wi-Fi</h3>
                <div class="desc">Предустановленная сеть из передового роутера и репитеров обеспечит устойчивый сигнал во всех уголках вашего дома и даже за его пределами.</div>
            </div>
            <div class="item item11">
                <div class="img"><img src="/images/index/section7/12.jpg"></div>
                <h3>Защита от затопления</h3>
                <div class="desc">Система устанавливается в мокрых помещениях и исключает возможность затопления. При срабатывании датчика подача воды автоматически прекращается, что исключает сильное затопление и ненужные траты на ремонт.</div>
            </div>
            <div class="item item12">
                <div class="img"><img src="/images/index/section7/13.jpg"></div>
                <h3>Система предупреждения о задымлении</h3>
                <div class="desc">Умные датчики задымленности устанавливаются во всех помещениях. Они настолько умны, что, не поднимая паники, предупредят о сгоревшей яичнице, но при реальной угрозе оповестят вас о ней звуковыми сигналами, уведомлениями на мобильное устройство и даже могут отключить систему отопления.</div>
            </div>
            <div class="item item13">
                <div class="img"><img src="/images/index/section7/14.jpg"></div>
                <h3>Система пожаротушения</h3>
                <div class="desc">Необходимая вещь, если вы действительно бережете свой дом и своих близких. Загородные дома особенно подвержены случайным пожарам из-за размещенных в них систем отопления, которые в первую очередь являются источниками возгорания.</div>
            </div>
        </div>
    </div>
    <div class="section section8" data-headerDark="1" data-hiddenHeader="0" data-menuDark="1"  data-hiddenMenu="1" data-menuActive="5">
        <h2>Наша команда</h2>
        <div class="owl-carousel">
            <?php
                foreach ($this->data['staff'] as $k => $v)
                {
                    echo '
                        <div class="item open_modal_staff" data-iStaffID="'.$v->iStaffID.'">
                            <div class="img">
                                <img src="/images/staff/'.$v->sStaffImg.'">
                            </div>
                            <div class="data">
                                <div class="name">'.$v->sStaffName.'</div>
                                <div class="desc">'.$v->sStaffPost.'</div>
                            </div>
                        </div>
                    ';
                }
            ?>
        </div>
        <div class="foot">
            <div class="container">
                Хотите больше информации о наших домах?
                <div class="my_btn" data-toggle="modal" data-target="#message">Отправить запрос</div>
            </div>
        </div>
    </div>
    <div class="section section9" data-headerDark="1" data-hiddenHeader="0" data-menuDark="1"  data-hiddenMenu="1" data-menuActive="5">
        <div class="data">
            <div class="articles">
                <h2>Энциклопедия</h2>
                <div class="owl-carousel">
                    <div class="item">
                        <a href="/article/poslednyaya_statya">
                            <div class="name">Еще одно название статьи</div>
                            <div class="desc">Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер...</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/article/poslednyaya_statya">
                            <div class="name">КРЕМНИСТЫЙ ГРАБЕН: ГИПОТЕЗА И ТЕОРИИ</div>
                            <div class="desc">Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер. Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер. Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/article/poslednyaya_statya">
                            <div class="name">НАЗВАНИЕ СТАТЬИ</div>
                            <div class="desc">Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер. Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер. Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер. Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер. Попса, так или иначе, mezzo forte иллюстрирует контрапункт контрастных фактур. Развивая эту тему, аккорд иллюстрирует midi-контроллер</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/article/poslednyaya_statya">
                            <div class="name">НАЗВАНИЕ СТАТЬИ</div>
                            <div class="desc">Абразия упруга. Важное наблюдение, касающееся вопроса происхождения пород, заключается в следующем: капиллярное поднятие причленяет к себе шельф.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/article/poslednyaya_statya">
                            <div class="name">НАЗВАНИЕ СТАТЬИ</div>
                            <div class="desc">Абразия упруга. Важное наблюдение, касающееся вопроса происхождения пород, заключается в следующем: капиллярное поднятие причленяет к себе шельф.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/article/poslednyaya_statya">
                            <div class="name">НАЗВАНИЕ СТАТЬИ</div>
                            <div class="desc">Абразия упруга. Важное наблюдение, касающееся вопроса происхождения пород, заключается в следующем: капиллярное поднятие причленяет к себе шельф.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/article/poslednyaya_statya">
                            <div class="name">НАЗВАНИЕ СТАТЬИ</div>
                            <div class="desc">Абразия упруга. Важное наблюдение, касающееся вопроса происхождения пород, заключается в следующем: капиллярное поднятие причленяет к себе шельф.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/article/poslednyaya_statya">
                            <div class="name">НАЗВАНИЕ СТАТЬИ</div>
                            <div class="desc">Абразия упруга. Важное наблюдение, касающееся вопроса происхождения пород, заключается в следующем: капиллярное поднятие причленяет к себе шельф.</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news">
                <h2>Последние новости</h2>
                <div class="owl-carousel">
                    <div class="item">
                        <a href="/news">
                            <div class="img">
                                <img src="/images/index/section9/rectangle-71-copy-3@3x.png">
                            </div>
                            <div class="name">21.09.2017</div>
                            <div class="desc">Нишевый проект охватывает медийный канал. Стоит отметить, что организация слубы маркетинга вырождена. Шток, из которого на 50% состоит руда месторождения, пододвигается под реголит, что в конце концов приведет к полному разрушению хребта под действием собственного веса.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/news">
                            <div class="img">
                                <img src="/images/index/section9/rectangle-71-copy-3@3x.png">
                            </div>
                            <div class="name">21.09.2017</div>
                            <div class="desc">Нишевый проект охватывает медийный канал. Стоит отметить, что организация слубы маркетинга вырождена. Шток, из которого на 50% состоит руда месторождения, пододвигается под реголит, что в конце концов приведет к полному разрушению хребта под действием собственного веса.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/news">
                            <div class="img">
                                <img src="/images/index/section9/rectangle-71-copy-3@3x.png">
                            </div>
                            <div class="name">21.09.2017</div>
                            <div class="desc">Нишевый проект охватывает медийный канал. Стоит отметить, что организация слубы маркетинга вырождена. Шток, из которого на 50% состоит руда месторождения, пододвигается под реголит, что в конце концов приведет к полному разрушению хребта под действием собственного веса.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/news">
                            <div class="img">
                                <img src="/images/index/section9/rectangle-71-copy-3@3x.png">
                            </div>
                            <div class="name">21.09.2017</div>
                            <div class="desc">Нишевый проект охватывает медийный канал. Стоит отметить, что организация слубы маркетинга вырождена. Шток, из которого на 50% состоит руда месторождения, пододвигается под реголит, что в конце концов приведет к полному разрушению хребта под действием собственного веса.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/news">
                            <div class="img">
                                <img src="/images/index/section9/rectangle-71-copy-3@3x.png">
                            </div>
                            <div class="name">21.09.2017</div>
                            <div class="desc">Нишевый проект охватывает медийный канал. Стоит отметить, что организация слубы маркетинга вырождена. Шток, из которого на 50% состоит руда месторождения, пододвигается под реголит, что в конце концов приведет к полному разрушению хребта под действием собственного веса.</div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="/news">
                            <div class="img">
                                <img src="/images/index/section9/rectangle-71-copy-3@3x.png">
                            </div>
                            <div class="name">21.09.2017</div>
                            <div class="desc">Нишевый проект охватывает медийный канал. Стоит отметить, что организация слубы маркетинга вырождена. Шток, из которого на 50% состоит руда месторождения, пододвигается под реголит, что в конце концов приведет к полному разрушению хребта под действием собственного веса.</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section10 section_black_footer" data-headerDark="0" data-hiddenHeader="1" data-menuDark="0"  data-hiddenMenu="1" data-menuActive="6">
        <?php $this->load->view('basic/black_footer'); ?>
    </div>
</div>

<?php $this->load->view('basic/footer'); ?>