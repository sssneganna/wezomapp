@php
$languageList = [
    [
        'lang' => 'укр',
        'url' => '#',
        'class' => ''
    ],
    [
        'lang' => 'рус',
        'url' => '#',
        'class' => 'active'
    ],
    [
        'lang' => 'eng',
        'url' => '#',
        'class' => ''
    ],
];

$mobNavigation = [
    [ 
        'name' => 'Товары по питомцам',
        'url' => '#',
        'class' => 'active'
    ],
    [ 
        'name' => 'Бренды',
        'url' => '#',
        'class' => ''
    ],
    [ 
        'name' => 'Ветаптека',
        'url' => '#',
        'class' => ''
    ],
    [ 
        'name' => 'Найди друга',
        'url' => '#',
        'class' => ''
    ],
    [ 
        'name' => 'Ветклиники',
        'url' => '#',
        'class' => ''
    ],
];

$companyList = [
        [
            'text' => 'О компании', 
            'url' => '#'
        ],
        [
            'text' => 'Адреса магазинов «ZooBonus»', 
            'url' => '#'
        ],
        [
            'text' => 'Вакансии', 
            'url' => '#'
        ],
        [
            'text' => 'Благотворительность', 
            'url' => '#'
        ],
        [
            'text' => 'Контакты', 
            'url' => '#'
        ],
];

$customerList = [
    [
        'text' => 'Доставка и оплата', 
        'url' => '#'
    ],
    [
        'text' => 'FAQ', 
        'url' => '#'
    ],
    [
        'text' => 'Подарочные сертификаты', 
        'url' => '#'
    ],
    [
        'text' => 'Акции', 
        'url' => '#'
    ],
    [
        'text' => 'Породы животных', 
        'url' => '#'
    ],
    [
        'text' => 'Дисконтная программа', 
        'url' => '#'
    ],
    [
        'text' => 'Блог', 
        'url' => '#'
    ],
    [
        'text' => 'Фотогалерея', 
        'url' => '#'
    ],
];

$phoneList = [
    [
        'href' => 'tel:+380444903100',
        'number' => '(044) 490 31 00'
    ],
    [
        'href' => 'tel:+380444903105',
        'number' => '(044) 490 31 05'
    ],
    [
        'href' => 'tel:+380444903180',
        'number' => '(044) 490 31 80'
    ],
];
@endphp

<div class="modal-background"></div>
    <nav class="mm-menu">
        <div class="mm-menu__header">
            <div class="mm-menu-header">
                <ul class="language">
                    @foreach($languageList as $languageItem)
                        <li class="language__item language__item--mobile">
                            <a href="{{$languageItem['url']}}" class="language__link language__link--mobile {{$languageItem['class']}}">{{$languageItem['lang']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="mm-menu__main">
            <div class="global-navigation">
                <div class="global-navigation__top">
                    <ul class="global-nav global-nav--mobile">
                        @foreach($mobNavigation as $menu)
                        <li class="global-nav__item global-nav__item--mobile">
                            <a href="{{$menu['url']}}" class="global-nav__link global-nav__link--mobile {{$menu['class']}}">{{$menu['name']}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="global-navigation__bottom">
                    <div class="mobile-menu">
                        <div class="mobile-menu__top">
                            <div class="navigation">
                                <h2 class="navigation__title navigation__title--mmenu">Компания</h2>
                                <ul class="navigation__list">
                                    @foreach($companyList as $item) 
                                        <li class="navigation__item navigation__item--mmenu">
                                            <a href="{{$item['url']}}" class="navigation__link navigation__link--mmenu">{{$item['text']}} </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="mobile-menu__center">
                            <div class="navigation">
                                <h2 class="navigation__title navigation__title--mmenu">Покупателям </h2>
                                <ul class="navigation__list">
                                    @foreach($customerList as $item) 
                                        <li class="navigation__item navigation__item--mmenu">
                                            <a href="{{$item['url']}}" class="navigation__link--mmenu">{{$item['text']}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="mobile-menu__bottom">
                            <button class="city">
                                <svg class="city__icon city__icon--white" width="12" height="14">
                                    <use xlink:href="./dist/spritemap.svg#sprite-geolocation"></use>
                                </svg>
                                <span class="city__text city__text--white">Херсон</span></button>
                        </div>
                        <div class="mobile-menu__bottom">
                            <div class="contacts">
                                <h2 class="contacts__title contacts__title--mmenu-white">
                                    Контакты</h2>
                                <ul class="contacts__list">
                                    <li class="contacts__item contacts__item--margin">
                                        <div class="contacts__text contacts__text--mmenu">Информационная служба:</div>
                                        <div class="contacts__number contacts__number--mobile">
                                            <ul class="phone-mobile">
                                                @foreach($phoneList as $phoneItem)
                                                    <li class="phone-mobile__item">
                                                        <a class="phone-mobile__link" href="{{$phoneItem['href']}}">
                                                            <span>{{$phoneItem['number']}}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    <li class="contacts__item contacts__item--margin">
                                        <div class="contacts__text contacts__text--opacity contacts__text--mmenu">Ежедневно с 08:30-21:00</div>
                                    </li>
                                    <li class="contacts__item">
                                        <span class="contacts__text contacts__text--opacity contacts__text--mmenu">Email:</span>
                                        <a class="contacts__mail contacts__mail--mmenu" href="mailto:info@wezom.com.ua">info@wezom.com.ua</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
