<div class="card">
    <div class="card__stickers">
        <div class="stickers">
            @foreach($item['sticker'] as $sticker) 
            <span class="sticker sticker--{{$sticker['color']}}">{{$sticker['text']}}</span>
            @endforeach
        </div>
    </div>
    <a href="#" class="card__image">
        <img  src="{{$item['url-image']}}" alt="1">
    </a>
    <a href="#" class="card__text">{{$item['name']}}</a>
    <div class="card__rating">
        <div class="rating">
         @for($i=1; $i<=5; $i++)
         <span class="rating__star {{$i<=$item['rating'] ? 'rating__star--checked' : ''}}"></span>
         @endfor
            <span class="rating__number">({{$item['number']}})</span>
        </div>
    </div>
    <div class="card__box">
        <div class="card__price">
            <div class="card__top">
                <svg class="card__icon" width="20" height="20">
                    <use xlink:href="./dist/spritemap.svg#sprite-price-icon"></use>
                </svg>
                <span class="card__price-profitable">{{$item['profitable']}}</span>
            </div>
            <div class="card__bottom">
                <span class="card__price-old">{{$item['old-price']}}</span>
                <span class="card__price-new">{{$item['new-price']}}</span>
            </div>
        </div>
        <div class="card__button">
            <button class="button button--size-medium button--transparent button--transparent-hover">
                <svg width="21" height="20">
                    <use xlink:href="./dist/spritemap.svg#sprite-basket-icon-card"></use>
                </svg>
            </button>
        </div>
    </div>
</div>