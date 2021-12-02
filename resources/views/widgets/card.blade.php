<div class="card">
    <div class="card__stickers">
        <div class="stickers">
            @foreach($item['sticker'] as $sticker) 
            <span class="sticker sticker--{{$sticker['color']}}">{{$sticker['text']}}</span>
            @endforeach
        </div>
    </div>
    <a href="#" class="card__image">
        <img class="" src="{{$item['url']}}" alt="1">
    </a>
    <a href="#" class="card__text">{{$item['name']}}</a>
    <div class="card__rating">
        <div class="rating">
            <span class="rating__stars rating--checked"></span>
            <span class="rating__stars"></span>
            <span class="rating__stars"></span>
            <span class="rating__stars"></span>
            <span class="rating__stars"></span>
            <span class="rating__number">({{$item['number']}})</span>
        </div>
    </div>
    <div class="card__box">
        <div class="card-price">
            <div class="card-price__top">
                <svg class="card-price__icon" width="20" height="20">
                    <use xlink:href="./dist/spritemap.svg#sprite-price-icon"></use>
                </svg>
                <span class="card-price__profitable">{{$item['profitable']}}</span>
            </div>
            <div class="card-price__bottom">
                <span class="card-price__old">{{$item['old-price']}}</span>
                <span class="card-price__new">{{$item['new-price']}}</span>
            </div>
        </div>
        <div class="card-button">
            <button class="button button--size-medium button--transparent button--transparent-hover">
                <svg width="21" height="20">
                    <use xlink:href="./dist/spritemap.svg#sprite-basket-icon-card"></use>
                </svg>
            </button>
        </div>
    </div>
</div>