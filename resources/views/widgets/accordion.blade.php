@php
$accordion = [
    [
        'class' => 'accordion__item is-active',
        'data-item' => '#accordion_1',
        'data-content' => 'accordion_1',
        'title-children' => [
                                [
                                    'title' => 'Доставка в:',
                                    'link' => 'Запорожье',
                                    'url' => '#'
                                ]
                                
                            ],
        'accordion-content' => [
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
                                    ]
                                ]
    ],
    [
        'class' => 'accordion__item',
        'data-item' => '#accordion_2',
        'data-content' => 'accordion_2',
        'title' => 'Варианты оплаты',
        'content' => [
                        [
                            'name' => 'Оплата.',
                            'text' => ' Оплата при получении товара, Картой онлайн, Google Pay, Акционная оплата картой Visa, Безналичными для юридических лиц, Безналичными для физических лиц, PrivatPay, Apple Pay, Акционная оплата картой Visa для клиентов ПриватБанка, Кредит, Оплата картой в отделении, Оплата частями'

                        ]
                    ]
    ],
    [
        'class' => 'accordion__item',
        'data-item' => '#accordion_3',
        'data-content' => 'accordion_3',
        'title' => 'Гарантия и возврат',
        'content' => [
                        [
                            'name' => 'Гарантия.',
                            'text' => '14 дней Обмен/возврат товара в течение 14 дней'

                        ]
                    ]
    ]
];
@endphp

<div class="accordion">
    @foreach($accordion as $item)
    <div class="{{$item['class']}}" data-collapse="{{$item['data-item']}}">
        <div class="accordion__header">
            @if(isset($item['title-children']))
            @foreach($item['title-children'] as $title)
            <div class="accordion__title">
                <span>{{$title['title']}}</span>
                <a href="{{$title['url']}}" class="link link--dashed link--dached-orange">{{$title['link']}}</a>
            </div>
            @endforeach
            @endif
            @if(isset($item['title']))
            <div class="accordion__title">{{$item['title']}}</div>
            @endif
            <svg class="accordion__arrow" width="19" height="11">
                <use xlink:href="./dist/spritemap.svg#sprite-arrow-accordion"></use>
            </svg>
        </div>
        <div class="accordion__content" id="{{$item['data-content']}}">
        @if(isset($item['accordion-content']))
        @foreach($item['accordion-content'] as $itemContent)
            <div class="accordion__row">
                <div class="accordion__left">
                    <div class="accordion__method">{{$itemContent['method']}}</div>
                    <div class="accordion__info">{{$itemContent['info']}}</div>
                </div>
                <div class="accordion__right">
                    <span class="accordion__coast">{{$itemContent['price']}}</span>
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
        @endif
        @if(isset($item['content']))
        @foreach($item['content'] as $content)
        <div class="accordion__text"><span>{{$content['name']}}</span>{{$content['text']}}</div>
    </div>
    @endforeach
    @endif
</div>
@endforeach
</div>