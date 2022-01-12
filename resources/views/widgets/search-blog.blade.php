@php
$searchImage = [
    [
        'src' => './assets/search-1.jpg',
        'url' => '#'
    ],
    [
        'src' => './assets/search-2.jpg',
        'url' => '#'
    ],
    [
        'src' => './assets/search-3.jpg',
        'url' => '#'
    ],
    [
        'src' => './assets/search-4.jpg',
        'url' => '#'
    ],
    [
        'src' => './assets/search-5.jpg',
        'url' => '#'
    ],
    [
        'src' => './assets/search-6.jpg',
        'url' => '#'
    ],
];
@endphp

<aside class="search-blog">
    <h2 class="search-blog__title">Объявления о продаже</h2>
        <div class="search-blog__icon">
            <svg width="57" height="55">
                <use xlink:href="./dist/spritemap.svg#sprite-paw-icon"></use>
            </svg>
        </div>
        <h3 class="search-blog__subtitle">Найди друга</h3>
        <div class="search-blog__text">Ищете питомца? Посмотрите сотни объявлений от
                                    проверенных
                                    разводителей.</div>
        <div class="search-blog__image">
            <ul class="search-blog__list">
                @foreach($searchImage as $image)
                <li class="search-blog__item">
                    <a href="{{$image['url']}}" class="search-blog__link">
                        <img src="{{$image['src']}}" alt="1">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="search-blog__link-button">
            <a href="#" class="link link--filled link--size-medium">Все объявления
                <svg class="link__arrow-next" width="12" height="12">
                    <use xlink:href="./dist/spritemap.svg#sprite-arrow-header"></use>
                </svg>
            </a>
        </div>
</aside>