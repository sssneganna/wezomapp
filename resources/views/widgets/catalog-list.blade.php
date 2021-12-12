@php
$catalogList = [
    [ 'image' => './assets/catalog-dog-food.jpg',
    'name' => "Корм",
    'url-btn' => "#",
    'children' => [
        [
            'link' => 'Сухой корм',
            'url' => '#'
        ],
        [
            'link' => 'Консервы',
            'url' => '#'
        ],
        [
            'link' => 'Ветеринарные диеты',
            'url' => '#'
        ],
        [
            'link' => 'Заменители молока',
            'url' => '#'
            ]
        ]

    ],
    [ 'image' => './assets/catalog-treats.jpg',
    'name' => "Лакомства",
    'url-btn' => "#",
    'children' => [
        [
            'link' => 'Кости',
            'url' => '#'
        ],
        [
            'link' => 'Печенье',
            'url' => '#'
        ],
        [
            'link' => 'Для дрессировки',
            'url' => '#'
        ],
        [
            'link' => 'Сушеные лакомства',
            'url' => '#'
        ]
        ]

],
[ 'image' => './assets/catalog-toys.jpg',
'name' => "Игрушки",
'url-btn' => "#",
'link' => '#',
'children' => [
        [
            'link' => 'Интерактивные',
            'url' => '#'
        ],
        [
            'link' => 'Удочки и дразнилки',
            'url' => '#'
        ],
        [
            'link' => 'Ветеринарные диеты',
            'url' => '#'
        ],
        [
            'link' => 'Заменители молока',
            'url' => '#'
        ]
        ]

],
[ 'image' => './assets/catalog-care.jpg',
'name' => "Уход",
'url-btn' => "#",
'children' => [
        [
            'link' => 'Сухой корм',
            'url' => '#'
        ],
        [
            'link' => 'Консервы',
            'url' => '#'
        ],
        [
            'link' => 'Ветеринарные диеты',
            'url' => '#'
        ],
        [
            'link' => 'Заменители молока',
            'url' => '#'
        ]
        ]

],
[ 'image' => './assets/catalog-health.jpg',
'name' => "Здоровье",
'url-btn' => "#",
'children' => [
        [
            'link' => 'Сухой корм',
            'url' => '#'
        ],
        [
            'link' => 'Консервы',
            'url' => '#'
        ],
        [
            'link' => 'Ветеринарные диеты',
            'url' => '#'
        ],
        [
            'link' => 'Заменители молока',
            'url' => '#'
        ]
        ]

],
[ 'image' => './assets/catalog-cosmetics.jpg',
'name' => "Косметика",
'url-btn' => "#",
'children' => [
        [
            'link' => 'Сухой корм',
            'url' => '#'
        ],
        [
            'link' => 'Консервы',
            'url' => '#'
        ],
        [
            'link' => 'Ветеринарные диеты',
            'url' => '#'
        ],
        [
            'link' => 'Заменители молока',
            'url' => '#'
        ]
        ]

],
[ 'image' => './assets/catalog-clothes.jpg',
'name' => "Одежда и обувь",
'url-btn' => "#",
'link' => '#',
'children' => [
        [
            'link' => 'Сухой корм',
            'url' => '#'
        ],
        [
            'link' => 'Консервы',
            'url' => '#'
        ],
        [
            'link' => 'Ветеринарные диеты',
            'url' => '#'
        ],
        [
            'link' => 'Заменители молока',
            'url' => '#'
        ]
        ]

],
[ 'image' => './assets/catalog-ammunition.jpg',
'name' => "Амуниция",
'url-btn' => "#",
'link' => '#',
'children' => [
        [
            'link' => 'Сухой корм',
            'url' => '#'
        ],
        [
            'link' => 'Консервы',
            'url' => '#'
        ],
        [
            'link' => 'Ветеринарные диеты',
            'url' => '#'
        ],
        [
            'link' => 'Заменители молока',
            'url' => '#'
        ]
        ]

],
[ 'image' => './assets/catalog-products.jpg',
'name' => "Товары для дома",
'url-btn' => "#",
'children' => [
        [
            'link' => 'Сухой корм',
            'url' => '#'
        ],
        [
            'link' => 'Консервы',
            'url' => '#'
        ],
        [
            'link' => 'Ветеринарные диеты',
            'url' => '#'
        ],
        [
            'link' => 'Заменители молока',
            'url' => '#'
        ]
        ]

],
[ 'image' => './assets/catalog-travels.jpg',
'name' => "Путешествия",
'url-btn' => "#",
'children' => [
        [
            'link' => 'Сухой корм',
            'url' => '#'
        ],
        [
            'link' => 'Консервы',
            'url' => '#'
        ],
        [
            'link' => 'Ветеринарные диеты',
            'url' => '#'
        ],
        [
            'link' => 'Заменители молока',
            'url' => '#'
        ]
        ]

],

];
@endphp

<div class="catalog-list">
    <div class="container">
        <div class="catalog-list__container">
        @foreach($catalogList  as $item)
        <div class="catalog-list__column">
            <div class="catalog-card">
                <div class="catalog-card__image">
                    <img src="{{$item['image']}}" alt="f"></img>
                <div class="catalog-card__body">
                    <div class="catalog-card__title">{{$item['name']}}</div>
                    <div class="catalog-card__button-link">
                        <a href="{{$item['url-btn']}}" class="link--arrow-white">
                            <span> Смотеть все</span>
                            <span class="arrow arrow--small arrow--color-white arrow--next"></span>
                        </a>
                    </div>
                    </div>
                </div>
                <ul class="catalog-card__list">
                @foreach($item['children']  as $link)
                    <li class="catalog-card__item">
                        <a href="{{$link['url']}}" class="catalog-card__link">{{$link['link']}}</a>
                    </li>
                    @endforeach
                </ul>
                @if(isset($item['link']))
                <div class="catalog-card__button">
                <a class="catalog-card__button-category" href="{{$item['link']}}">Больше категорий</a>
            </div>
                @endif
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>