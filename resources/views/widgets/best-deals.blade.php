@php 
$list = [
    [
        'url-image' => './assets/card-img-1.jpg',
        'name' => 'Brit Premium (Брит Премиум) by Nature ADULT - Сухой корм с курицей, 4 кг',
        'profitable' => '1 550,22 ₴',
        'old-price' => '1 700,22',
        'new-price' => '1600,22₴',
        'rating' => 0,
        'sticker' => [
            [
                'text' => 'ТОП продаж', 
                'color' => 'violet'
            ], 
            [
                'text' => 'Скидка -5%', 
                'color' => 'pink'
            ]
                ],
        'number' => '0'
    ],
    [
        'url-image' => './assets/card-img-2.jpg',
        'name' => 'Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород',
        'profitable' => 'от 198,22 ₴',
        'old-price' => 'от 260,22',
        'new-price' => 'от 206,71 ₴',
        'rating' => 5,
        'sticker' => [
            [
                'text' => 'Скидка -5%', 
                'color' => 'pink'],
            ],
        'number' => '12'
    ],
    [
        'url-image' => './assets/card-img-3.jpg',
        'name' => 'PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл',
        'profitable' => 'Автозаказ',
        'old-price' => '',
        'new-price' => '1 600,22 ₴',
        'rating' => 3,
        'sticker' => [
            [
                'text' => 'Новинка', 
                'color' => 'turquoise'
                ]
                ],
        'number' => '65'
        ],
    [
        'url-image' => './assets/card-img-4.jpg',
        'name' => 'Scalibor (Скалибор) ошейник 48 см',
        'profitable' => '520,00 ₴',
        'old-price' => '640,22',
        'new-price' => '560,22 ₴',
        'rating' => 0,
        'sticker' => [
            [
                'text' => 'ТОП продаж', 
                'color' => 'violet'
                ], 
            [
                'text' => 'Скидка -5%', 
                'color' => 'pink'
                ]
                ],
        'number' => '0'
    ],
    [
        'url-image' => './assets/card-img-5.jpg',
        'name' => '1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг',
        'profitable' => '1 550,22 ₴',
        'old-price' => '',
        'new-price' => '1 600,22 ₴',
        'rating' => 0,
        'sticker' => [
            [
                'text' => 'ТОП продаж', 
                'color' => 'violet'
                ]
                ],
        'number' => '0'
        ],
        [
        'url-image' => './assets/card-img-1.jpg',
        'name' => 'Brit Premium (Брит Премиум) by Nature ADULT - Сухой корм с курицей, 4 кг',
        'profitable' => '1 550,22 ₴',
        'old-price' => '1 700,22',
        'new-price' => '1600,22₴',
        'rating' => 0,
        'sticker' => [
            [
                'text' => 'ТОП продаж', 
                'color' => 'violet'
                ], 
            [
                'text' => 'Скидка -5%', 
                'color' => 'pink'
                ]
                ],
        'number' => '0'
    ],
    [
        'url-image' => './assets/card-img-2.jpg',
        'name' => 'Schesir Dog Small Adult Lamb сухой монопротеиновый корм для собак малых пород',
        'profitable' => 'от 198,22 ₴',
        'old-price' => 'от 260,22',
        'new-price' => 'от 206,71 ₴',
        'rating' => 5,
        'sticker' => [
            [
                'text' => 'Скидка -5%', 
                'color' => 'pink'],
                ],
        'number' => '12'
    ],
    [
        'url-image' => './assets/card-img-3.jpg',
        'name' => 'PetKind Beef Tripe Formula Беззерновые консервы для собак с говядиной, 500 мл',
        'profitable' => 'Автозаказ',
        'old-price' => '',
        'new-price' => '1 600,22 ₴',
        'rating' => 5,
        'sticker' => [
            [
                'text' => 'Новинка', 
                'color' => 'turquoise'
                ]
                ],
        'number' => '65'
        ],
    [
        'url-image' => './assets/card-img-4.jpg',
        'name' => 'Scalibor (Скалибор) ошейник 48 см',
        'profitable' => '520,00 ₴',
        'old-price' => '640,22',
        'new-price' => '560,22 ₴',
        'rating' => 5, 
        'sticker' => [
            [
                'text' => 'ТОП продаж', 
                'color' => 'violet'
                ], 
            [
                'text' => 'Скидка -5%', 
                'color' => 'pink'
                ]
                ],
        'number' => '0'
    ],
    [
        'url-image' => './assets/card-img-5.jpg',
        'name' => '1st Choice Puppy Toy&Small Lamb&Fish сухой супер премиум корм для щенков мини и малых пород, 2 кг',
        'profitable' => '1 550,22 ₴',
        'old-price' => '',
        'new-price' => '1 600,22 ₴',
        'rating' => 5,
        'sticker' => [
            [
                'text' => 'ТОП продаж', 
                'color' => 'violet'
                ]
                ],
        'number' => '0'
        ]
    ];
@endphp

<section class="best-deals">
    <div class="container">
        <div class="best-deals__menu">
            <div class="best-deals__container">
                <h2 class="best-deals__title">Лучшие предложения недели </h2>
                <div class="best-deals__nav">
                    <ul class="best-deals__list">
                        <li class="best-deals__item">
                            <div class="best-deals__link active">Собакам</div>
                        </li>
                        <li class="best-deals__item">
                            <a class="best-deals__link" href="#">Кошкам</a>
                        </li>
                        <li class="best-deals__item">
                            <a class="best-deals__link" href="#">Птицам</a>
                        </li>
                        <li class="best-deals__item">
                            <a class="best-deals__link" href="#">Грызунам</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="best-deals__buttons">
                <button class="js-btn-prev button button--size-small button--filled-grey button--square">
                    <span class="arrow  arrow--large arrow--color-white arrow--prev"></span>
                </button>
                <button class="js-btn-next button button--size-small button--filled-grey  button--square">
                    <span class="arrow  arrow--large arrow--color-white arrow--next"></span>
                </button>
            </div>
        </div>
        <div class="best-deals__slider">
            <div class="cards js-slider">
                @foreach($list as $item)
                <div class="cards__item">
                    @include("widgets.card", ['item' => $item] )
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>