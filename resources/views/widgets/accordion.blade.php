@php
$accordionContent = [
    [
        'method' => 'Самовывоз из наших магазинов',
        'info' => 'Забрать сегодня с 16:00',
        'price' => 'Бесплатно'
    ],
    [
        'method' => 'Самовывоз из Новой Почты',
        'info' => 'Отправим завтра',
        'price' => '50 ₴'
    ],
    [
        'method' => 'Самовывоз из JustIn',
        'info' => 'Отправим завтра',
        'price' => '59 ₴'
    ],
];
@endphp

<div class="accordion">
    <div class="accordion__item" data-collapse="#accordion_1">
        <div class="accordion__header">
            <div class="accordion__title">
                <span>Доставка в: </span>
                <a href="#" class="link link--dashed link--dached-orange">Запорожье</a>
            </div>
            <svg class="accordion__arrow" width="19" height="11">
                <use xlink:href="./dist/spritemap.svg#sprite-arrow-accordion"></use>
            </svg>
        </div>
        <div class="accordion__content" id="accordion_1">
            @foreach($accordionContent as $item)
            <div class="accordion__row">
                <div class="accordion__left">
                    <div class="accordion__method">{{$item['method']}}</div>
                    <div class="accordion__info">{{$item['info']}}</div>
                </div>
                <div class="accordion__right">
                    <span class="accordion__coast">{{$item['price']}}</span>
                </div>
            </div>
            @endforeach
            <div class="accordion__button">
                <a href="#" class="accordion__button-link">
                    <span class="accordion__button-text">Все варианты и правила доставки</span>
                    <span class="arrow arrow--small arrow--down"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="accordion__item " data-collapse="#accordion_2">
        <div class="accordion__header">
            <div class="accordion__title">Варианты оплаты</div>
                <svg  class="accordion__arrow" width="19" height="11">
                    <use xlink:href="./dist/spritemap.svg#sprite-arrow-accordion"></use>
                </svg>
            </div>
            <div class="accordion__content" id="accordion_2">
                <div class="accordion__text">
                    <span>Оплата.</span> Оплата при получении товара, Картой онлайн, Google Pay, Акционная оплата картой Visa, Безналичными для юридических лиц, Безналичными для физических лиц, PrivatPay, Apple Pay, Акционная оплата картой Visa для клиентов ПриватБанка, Кредит, Оплата картой в отделении, Оплата частями</div>
                </div>
            </div>
            <div class="accordion__item" data-collapse="#accordion_3">
                <div class="accordion__header">
                    <div class="accordion__title">Гарантия и возврат</div>
                        <svg  class="accordion__arrow" width="19" height="11">
                            <use xlink:href="./dist/spritemap.svg#sprite-arrow-accordion"></use>
                        </svg>
                    </div>
                    <div class="accordion__content" id="accordion_3">
                      <div class="accordion__text">
                          <span>Гарантия.</span> 14 дней Обмен/возврат товара в течение 14 дней </div>
            </div>
    </div>
</div>