@php
$characteristicsList = [
    [
        'name' => 'Артикул',
        'value' => 'ТМ 34673474578'
    ],
    [
        'name' => 'Для кого корм?',
        'value' => 'Для собак'
    ],
    [
        'name' => 'Класс корма',
        'value' => 'Супер премиум'
    ],
    [
        'name' => 'Форма выпуска корма',
        'value' => 'Сухой корм'
    ],
    [
        'name' => 'Возраст собаки',
        'value' => 'Взрослые собаки'
    ],
    [
        'name' => 'Размер породы',
        'value' => 'Средние породы (10-25 кг)'
    ],
    [
        'name' => 'Основной источник протеинов в корме',
        'value' => 'Ягненок'
    ],
    [
        'name' => 'Особые потребности в питании',
        'value' => 'Аллергии Чувствительный желудок'
    ],
];

$tabsList= [
    'button' => [
    [
        'name' => 'Описание',
        'class' => 'tabs__button tabs__button--size-small js-tab-trigger is-active',
        'data' => '1'
    ],
    [
        'name' => 'Состав',
        'class' => 'tabs__button tabs__button--size-small js-tab-trigger',
        'data' => '2'
    ],
    [
        'name' => 'Видеообзор',
        'class' => 'tabs__button tabs__button--size-small js-tab-trigger',
        'data' => '3'
    ],
    [
        'name' => 'Руководство по кормлению',
        'class' => 'tabs__button tabs__button--size-small js-tab-trigger',
        'data' => '4'
    ]
    ],

    'content' => [
                    [
                        'class' => 'tabs__content js-tab-content is-active',
                        'data' => '1',
                        'content' => [
                                        [
                                            'text' => 'Корм для взрослых собак Hills Science Plan с ягненком и рисом специально 
                                                       разработан для обеспечения энергетических потребностей собак в самом расцвете их жизни. 
                                                       Сделан из высококачественных, легко усваиваемых ингредиентов.',
                                            'title' => 'Особенности HILLS Mature Adult 7+ ягненок и рис:',
                                            'text2' => 'Hills Science Plan Active Longevity помогает сохранить функцию почек и других жизненно 
                                                        важных органов собак мелких и средних пород старше 7 лет: - Разработан с антиоксидантами с клинически 
                                                        подтвержденным эффектом, Омега-3 жирными кислотами и сниженным содержанием фосфора.
                                                        - Антиоксидантные витамины Е и С для сохранения функции почек. - Высоко перевариваемые 
                                                        ингредиенты для легкого пищеварения. - Поддерживает функцию жизненно важных органов с помощью 
                                                        сбалансированного уровня минералов. - 100% гарантия качества, консистенции и вкуса 
                                                        Повседневный рацион для собак старше 7 лет Пробуете этот рацион впервые? Постепенно в течение 
                                                        7 дней переводите животное на новый рацион, увеличивая его содержание по отношению к прежнему. 
                                                        Обеспечьте питомцу свободный доступ к свежей воде. Суточная норма, обозначенная на упаковке, требует 
                                                        корректировки для поддержания оптимального веса питомца. Не рекомендуется Кошкам Щенкам
                                                        Беременным и кормящим сукам.',
                                            'list' => [
                                                        ['item' => '• Омега-6 жирные кислоты и витамин Е для красивой кожи и шерсти'],
                                                        ['item' => '• Высококачественные ингредиенты: ягненок и рис для собак с чувствительным       пищеварением  '],
                                                        ['item' => '• Высококачественный белок для поддержания мышечной массы.']
                                                    ],
                                            'title2' => ''
                                        ]
                                    ]
            
                    ],
                    [
                        'class' => 'tabs__content js-tab-content',
                        'data' => '2',
                        'content' => [
                                        [
                                            'text' => '',
                                            'title' => '',
                                            'list' =>   [],
                                            'title2' => 'Состав:',
                                            'text2' => 'дегидратированные протеины мяса птицы, кукуруза, кукурузная мука, животные жиры, пшеница, дегидратированной протеины свинины*, рис, гидролизат белков животного происхождения, кукурузный глютен, свекольный жом, минеральные вещества, рыбий жир, соевое масло, дрожжи и их частицы, гидролизат из панциря ракообразных (источник глюкозамина), гидролизат из хряща (источник хондроитина).',
                                        
                                        ]
                                    ]
            
                    ],
                    [
                        'class' => 'tabs__content js-tab-content',
                        'data' => '3',
                        'content' => [
                                        [
                                            'text' => '',
                                            'title' => '',
                                            'text2' => '',
                                            'list' => [],
                                            'title2' => ''
                                        ]
                                        
                                    ]
            
                    ],
                    [
                        'class' => 'tabs__content js-tab-content',
                        'data' => '4',
                        'content' => [
                                        [
                                            'text' => '',
                                            'title' => '',
                                            'text2' => 'мерный стакан 240 мл -96 г',
                                            'list' => [],
                                            'title2' => ''
                                        ]
                                        
                                    ]
            
                    ]
            ]
                
];
@endphp

<div class="about-product">
    <div class="container container--medium-big">
        <div class="about-product__container">
            <div class="about-product__left">
                <div class="about">
                    <div class="about__title">О товаре</div>
                    <div class="about__tabs">
                        <div class="tabs js-tab" data-tabs-ns = "product">
                            <ul class="tabs__buttons tabs__buttons--border">
                            @foreach($tabsList['button'] as $button)
                                <li class="{{$button['class']}}" data-tab="{{$button['data']}}">{{$button['name']}}</li>
                            @endforeach
                            </ul>
                            @foreach($tabsList['content'] as $content)
                            <div class="{{$content['class']}}" data-tab="{{$content['data']}}">
                                <div class="tabs__content-overflow">
                                    <div class="about-container">
                                        <div class="about-container__box js-show-content">
                                            <div class="about-container__content">
                                                @foreach($content['content'] as $contentItem)
                                                <div class="about-content">
                                                    <div>{{$contentItem['text']}}</div>
                                                    <h3>{{$contentItem['title']}}</h3>
                                                    <ul>
                                                        @foreach($contentItem['list'] as $li)
                                                        <li>{{$li['item']}} </li>
                                                        @endforeach
                                                    </ul>
                                                    <h3>{{$contentItem['title2']}}</h3>
                                                    <div>{{$contentItem['text2']}}</div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <div class="about-container__button about-container__button--show">
                                                <button class="button button--border-orange button--size-rectangle-small">Читать полностью</button>
                                            </div>
                                            <div class="about-container__button about-container__button--hide">
                                                <button class="button button--border-orange button--size-rectangle-small">Свернуть</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-product__right">
                <div class="characteristics">
                    <div class="characteristics__title">Характеристики</div>
                    <ul class="characteristics__list">
                        @foreach($characteristicsList as $item)
                        <li class="characteristics__item">
                            <span class="characteristics__name">{{$item['name']}}</span>
                            <span class="characteristics__value">{{$item['value']}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</div>