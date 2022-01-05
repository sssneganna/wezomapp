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
    ]
    ];
@endphp

<div class="catalog-main">
    <div class="container">
        <div class="catalog-main__box">
            <div class="catalog-main__sidebar">
                @include("widgets.catalog-filter")
            </div>
            <div class="catalog-main__body">
                <div class="catalog-main__top">
                    <div class="catalog-main__title">Корм для собак</div>
                    <div class="catalog-main__info-count">Найдено 1074 товара</div>
                    <div class="catalog-main__select">
                    <select>
  <option>Подходящим для питомца</option>
  <option>По популярности</option>
  <option>По возрастанию цены</option>
  <option>По убыванию цены</option>
</select>
                    </div>
                </div>
                <div class="catalog-main__mobile-controls">
                    <button class="button button--filter">
                        <svg width="24" height="24">
                            <use xlink:href="./dist/spritemap.svg#sprite-filter-icon"></use>
                        </svg>
                        <span>Фильтр</span>
                    </button>
                    <div class="button button--filter">
                        <svg width="24" height="24">
                            <use xlink:href="./dist/spritemap.svg#sprite-sorting-icon"></use>
                        </svg>
                        <span>Сортировка</span>
                    </div>
                </div>
                <div class="catalog-main__slider">
                    <div class="catalog-slider">
                    <img  src="./assets/baner-catalog-main.jpg" alt="baner">
                    </div>
                </div>
                <div class="catalog-main__cards">
                <div class="cards">
                @foreach($list as $item)
                <div class="cards__item">
                    @include("widgets.card", ['item' => $item] )
                </div>
                @endforeach
            </div>
                </div>
                <div class="catalog-main__pagination">
                    <div class="pagination">
                        <a href="#" class="pagination__link is-active">1</a>
                        <a href="#" class="pagination__link">2</a>
                        <a href="#" class="pagination__link">3</a>
                        <a href="#" class="pagination__link">4</a>
                        <a href="#" class="pagination__link">5</a>
                        <a href="#" class="pagination__more">...</a>
                        <a href="#" class="pagination__link">18</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>