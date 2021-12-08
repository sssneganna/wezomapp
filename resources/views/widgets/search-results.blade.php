@php
$searchResults = [
    [
        'title' => 'Корм для собак',
        'results' => [
            [
                'text' => 'TOMi 3 kinds of poultry ТОМи 3 ВИДА ПТИЦЫ супер премиум корм, консервы...',
                'old-price' => '1 700,22',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-dog-1.png',
            ],
            [
                'text' => '1st Choice Puppy Toy&Small Lamb&Fish ФЕСТ ЧОЙС ЩЕНОК МИНИ ЯГНЕНОК...',
                'old-price' => '',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-dog-2.png',
            ],
            [
                'text' => '1st Choice контейнер для хранения корма прямоугольный, 15 кг',
                'old-price' => '1 700,22',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-dog-3.png',
            ],
            [
                'text' => 'Pronature Original Adult Chicken ПРОНАТЮР ОРИДЖИНАЛ КУРИЦА корм...',
                'old-price' => '',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-dog-4.png',
            ],
            [
                'text' => 'Schesir Dog Small Adult Lamb ШЕЗИР ВЗРОСЛЫЙ МАЛЫХ ЯГНЕНОК сухой...',
                'old-price' => '1 700,22',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-dog-5.png',
            ],
            
                ] 
    ],
    [
        'title' => 'Корм для котов',
        'results' => [
            [
                'text' => 'Schesir Chicken Fillet ШЕЗИР ФИЛЕ КУРИЦЫ в желе натуральные консерв...',
                'old-price' => '1 700,22',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-cat-1.png',
            ],
            [
                'text' => 'Stuzzy Cat Rabbit ШТУЗИ КЕТ КРОЛИК в желе корм для кошек, пауч, 100г',
                'old-price' => '',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-cat-2.png',
            ],
            [
                'text' => 'Schesir Tuna Chicken ШЕЗИР ТУНЕЦ С ФИЛЕ КУРИЦЫ в желе натуральные...',
                'old-price' => '',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-cat-3.png',
            ],
            [
                'text' => '1st Choice Weight Control Adult ФЕСТ ЧОЙС КОНТРОЛЬ ВЕСА сухой супер премиум...',
                'old-price' => '',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-cat-4.png',
            ],
            [
                'text' => '1st Choice контейнер для хранения корма прямоугольный, 15 кг',
                'old-price' => ' 1 700,22',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-cat-5.png',
            ],
                ] 
    ],
    [
        'title' => 'Корм для птиц',
        'results' => [
            [
                'text' => 'Versele-Laga Prestige Вudgies ВЕРСЕЛЕ-ЛАГА ПРЕСТИЖ ПОПУГАЙЧИК...',
                'old-price' => '1 700,22',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-birds-1.png',
            ],
            [
                'text' => 'Versele-Laga Prestige Premium Tropical Finches ВЕРСЕЛЕ-ЛАГА ПРЕСТИЖ...',
                'old-price' => '',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-birds-2.png',
            ],
            [
                'text' => 'Versele-Laga Prestige Premium Parrots ВЕРСЕЛЕ-ЛАГА ПРЕСТИЖ ПРЕМИУМ...',
                'old-price' => '1 700,22',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-birds-3.png',
            ],
            [
                'text' => '1st Choice Weight Control Adult ФЕСТ ЧОЙС КОНТРОЛЬ ВЕСА сухой супер премиум...',
                'old-price' => '',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-birds-4.png',
            ],
            [
                'text' => '1st Choice контейнер для хранения корма прямоугольный, 15 кг',
                'old-price' => '',
                'new-price' => '1 600,22 ₴',
                'image' => './assets/result-birds-5.png',
            ],
                ] 
    ],
    
];
@endphp
<div class="search-container">
    <div class="search-container__left">
<ul class="search-menu">
    <li class="search-menu__item">

    </li>
</ul>
</div>
<div class="search-container__right">
<ul class="search-results">
    @foreach($searchResults as $item) 
    <li class="search-results__column">
        <div class="search-results__title">{{$item['title']}}</div>
        <ul class="search-results__list">
        @foreach($item['results'] as $result) 
            <li class="search-results__item">
            <img  src="{{$result['image']}}" alt="1">
            <div class="search-results__box">
                <div class="search-results__text">{{$result['text']}}</div>
                <div class="search-results__price">
                <div class="search-results__old-price">{{$result['old-price']}}</div>
                <div class="search-results__new-price">{{$result['new-price']}}</div>
                </div>
                </div>
            </li>
        @endforeach
        </ul>
    </li>
    @endforeach
</ul>
</div>
</div>


