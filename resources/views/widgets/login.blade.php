<div class="login">
    <div class="login__title">Вход/Регистрация</div>
    <div class="login__body">
        <form class="login__form js-show-content" method="post" action="/">
            <div class="login__field">
                <input autocomplete="off" id="login-phone" class="login__input js-mask-phone"  type="tel" name="phone"  required />
                <label for="login-phone">Ваш номер телефона</label>
            </div>
            <div class="login__btn login__btn--hidden">
                <button class="button button--size-rectangle button--filled-orange" type="submit">Далее</button>
            </div>
            <div class="login__box">
            <button class="login__btn-back">
            <svg width="8" height="8">
                    <use xlink:href="./dist/spritemap.svg#sprite-arrow-header"></use>
                </svg>
                <span>Ввести другой номер телефона</span>
            </button>
                <div class="login__info">С таким номером телефона еще нет пользователей, хотите зарегистрироваться?</div>
                <div class="login__select">
                    <div class="select">
                <label class="select__label select__label--login" for="login-select">Я регистрируюсь как</label>
                <select id="login-select" class="select__select select__select--login">
                    <option value="private person">Частное лицо</option>
                    <option  value="legal entity">Юридическое лицо</option>
                </select>
                <span class="select__arrow select__arrow--login"></span>
</div>
</div>
                <div class="login__btn">
                    <button class="button button--size-rectangle button--filled-orange" type="submit">Регистрация</button>
                </div>
            </div>
            <div class="login__stripes">или с помощью</div>
            <div class="login__buttons">
                <a href="https://accounts.google.com/" target="blank" class="link link--transparent-green link--size-medium-l">
                    <svg class="login__social-icon" width="20" height="21">
                        <use xlink:href="./dist/spritemap.svg#sprite-google-login"></use>
                    </svg>
                </a>
                <a href="https://www.facebook.com/" target="blank" class="link link--transparent-green link--size-medium-l">
                    <svg class="login__social-icon" width="12" height="25">
                        <use xlink:href="./dist/spritemap.svg#sprite-fb-login"></use>
                    </svg>
                </a>
            </div>
            <div class="login__checkbox-box">
                <input class="login__custom-checkbox" type="checkbox" id="privacy" name="privacy" checked>
                <label  for="privacy">
                    <span class="login__checkbox-text">Даю согласие на обработку своих персональных данных в соответствии с 
                    <a href="#" class="login__checkbox-link">данной офертой</a>
                    </span>
                </label>
            </div>
        </form>
        <div class="login__promotional-offers">
            <div class="login__icon">
                <svg width="22" height="26">
                    <use xlink:href="./dist/spritemap.svg#sprite-login"></use>
                </svg>
            </div>
            <div class="login__text">Акции, скидки и специальные предложения для зарегистрированных пользователей</div>
        </div>
</div>