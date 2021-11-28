<!DOCTYPE html>
<html lang="ru">
    <head>
       @include("head")   
    </head>
    <body>
    <div class="layout">
    <div class="layout__header">
    @include("header")
    </div>  
    <main class="layout__main">
    @include("best-deals")
    @include("blog")    
    @include("benefits")
    @include("seo")
    @include("discounts")
    </main>
    <div class="layout__footer">
    @include("footer")   
    </div>
    </div>
    @include("mobile-menu")
    @include("scripts")  
    </body>
</html>
