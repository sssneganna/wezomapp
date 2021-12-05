@php 
$companyList = [
        [
            'text' => 'О компании', 
            'url' => '#']
            ,
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
@endphp

<footer class="footer">
    <div class="container container--biggest">
        <div class="footer__container">
            <div class="footer__left">
                <div class="footer-left">
                    <div class="footer-left__logo">
                        <a class="logo" target="blank" href="https://wezom.com.ua">
                            <svg class="logo__icon" width="114" height="41">
                                <use xlink:href="./dist/spritemap.svg#sprite-wezom-logo"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="footer-left__copyright">© 2020 Интернет-магазин</div>
                    <nav class="footer-left__nav">
                        <ul class="navigation navigation--mobile">
                            <li class="navigation__item navigation__item--mobile">
                                <a href="#" class="navigation__link navigation__link--mobile">Условия использования сайта</a>
                                </li>
                                <li class="navigation__item navigation__item--mobile">
                                    <a href="#" class="navigation__link navigation__link--mobile">Защита персональных
                                        данных</a>
                                </li>
                                <li class="navigation__item navigation__item--mobile">
                                    <a href="#" class="navigation__link navigation__link--mobile">Карта сайта </a>
                                </li>
                            </ul>
                        </nav>
                        </div>
                </div>
                <div class="footer__right">
                    <div class="footer-right">
                    <div class="footer-right__top">
                        <div class="footer-communication">
                        <div class="footer-communication__item footer-communication__item--margin">
                            <ul class="social-icon">
                                <li class="social-icon__item">
                                    <a class="button button--size-medium button--filled-white" target="blank"
                                        href="https://www.facebook.com/">
                                        <svg width="12" height="24">
                                            <use xlink:href="./dist/spritemap.svg#sprite-icon-fb">
                                            </use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon__item">
                                    <a class="button button--size-medium button--filled-white" target="blank"
                                        href="https://www.instagram.com/?hl=ru">
                                        <svg width="24" height="24">
                                            <use xlink:href="./dist/spritemap.svg#sprite-icon-instagram">
                                            </use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-icon__item">
                                    <a class="button button--size-medium button--filled-white" target="blank"
                                        href="https://www.whatsapp.com/?lang=ru">
                                        <svg width="22" height="24">
                                            <use xlink:href="./dist/spritemap.svg#sprite-icon-watsapp">
                                            </use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-communication__item">
                            <ul class="communication">
                                <li class="communication__item">
                                    <button class="chat">
                                        <svg class="chat__icon" width="34" height="33">
                                            <use xlink:href="./dist/spritemap.svg#sprite-icon-chat">
                                            </use>
                                        </svg>
                                        Чат онлайн
                                    </button>
                                </li>
                                <li class="communication__item">
                                    <button class="chat">
                                        <svg class="chat__icon" width="27" height="24">
                                            <use xlink:href="./dist/spritemap.svg#sprite-icon-mail">
                                            </use>
                                        </svg>
                                        Написать нам
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-communication__item footer-communication__item--end">
                            <div class="up-btn">
                                <div class="up-btn__text">Вверх</div>
                                <div class="up-btn__button">
                                    <button
                                        class="button button--size-medium button--filled-white js-scroll-top button--dark">
                                        <span class="arrow  arrow--large arrow--color-white arrow--up"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="footer-right__main">
                        <nav class="footer-navigation">
                            <div class="footer-navigation__item">
                                <div class="navigation">
                                    <h2 class="navigation__title">Компания </h2>
                                    <ul class="navigation__list">
                                    @foreach($companyList as $item) 
                                        <li class="navigation__item">
                                            <a href="{{$item['url']}}" class="navigation__link">{{$item['text']}} </a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-navigation__item">
                                <div class="navigation">
                                    <h2 class="navigation__title">Покупателям </h2>
                                    <ul class="navigation__list">
                                    @foreach($customerList as $item) 
                                        <li class="navigation__item">
                                            <a href="{{$item['url']}}" class="navigation__link">{{$item['text']}}</a>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-navigation__item">
                                <div class="contacts">
                                    <h2 class="contacts__title">Контакты</h2>
                                    <ul class="contacts__list">
                                        <li class="contacts__item">
                                                <div class="contacts__text">Информационная служба:</div>
                                                    <a class="contacts__number" href="tel:+380444903100">
                                                        (044) 490 31 00
                                                    </a>   
                                        </li>
                                        <li class="contacts__item contacts__item--margin">
                                            
                                                <div class="contacts__text contacts__text--opacity">Ежедневно с
                                                    08:30-21:00</div>
                                        
                                        </li>
                                        <li class="contacts__item">
                                            
                                                <span class="contacts__text contacts__text--opacity">Email:</span>

                                                <a class="contacts__mail" href="mailto:info@wezom.com.ua">
                                                    info@wezom.com.ua
                                                </a>
                                           
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="footer-right__bottom">
                        <div class="sub-footer">
                        <div class="sub-footer__left">
                            <div class="payment">
                                <ul class="payment__list">
                                    <li class="payment__item">
                                        <div class="payment__img">
                                            <svg width="85" height="28">
                                                <use xlink:href="./dist/spritemap.svg#sprite-payment-1">
                                                </use>
                                            </svg>

                                        </div>
                                    </li>
                                    <li class="payment__item">
                                        <div class="payment__img">
                                            <svg width="42" height="32">
                                                <use xlink:href="./dist/spritemap.svg#sprite-payment-2">
                                                </use>
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="payment__item">
                                        <div class="payment__img">
                                            <svg width="60" height="20">
                                                <use xlink:href="./dist/spritemap.svg#sprite-payment-3">
                                                </use>
                                            </svg>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sub-footer__right">                           
                                <span class="sub-footer__text">Разработано в</span>
                                <a href="https://wezom.com.ua/" target="blank" class="sub-footer__link">
                                    Wezom
                                </a>                           
                        </div>
                    </div>
                    </div>
</div>
                </div>
                </div>
                </div>
            </footer>
     