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
                @yield("content")
            </main>
            <div class="layout__footer">
                @include("widgets.top-footer")
                @include("widgets.footer")   
            </div>
        </div>
        @include("widgets.mobile-menu")
        @include("widgets.scripts")
    </body>
</html>
