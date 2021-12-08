<!DOCTYPE html>
<html lang="ru">
    <head>
       @include("widgets.head")   
    </head>
    <body>
        <div class="layout">
            <div class="layout__header">
                @include("widgets.header")
            </div>
            <main class="layout__main">
                @include("widgets.best-deals")
                <div class="blog-section">
    <div class="container">
        <div class="blog-section__content">
            <div class="blog-section__left">
            @include("widgets.search-blog")
                </div> 
                <div class="blog-section__right"> @include("widgets.blog")       </div>
            </div>
        </div>
    </div> 
                @include("widgets.benefits")
                @include("widgets.seo")
                @include("widgets.discounts")
            </main>
            <div class="layout__footer">
                @include("widgets.footer")   
            </div>
        </div>
        @include("widgets.mobile-menu")
        @include("widgets.scripts")
    </body>
</html>
