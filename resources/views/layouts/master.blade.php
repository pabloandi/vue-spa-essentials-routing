<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My app</title>

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>


        <div id="app">
            @include('layouts.header')

            <section class="section">
                <div class="container">
                    <router-view></router-view>

                </div>
            </section>

        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
