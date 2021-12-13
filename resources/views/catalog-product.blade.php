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
            @include("widgets.breadcrumbs")
            @include("widgets.product")
            @include("widgets.about-product")
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
