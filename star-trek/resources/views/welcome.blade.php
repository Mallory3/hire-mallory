<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        
        <div id="app">
        <!-- Where we yield the content -->
        <router-view></router-view>

        <hr>
        <!-- Add router links (available because we pulled in VueRouter in app.js and added router: new VueRouter(routes) 

        Note: Cannot to standard <a></a> tag as we do not want to reload the page
        -->
        <router-link to="/">Home</router-link><br>
        <router-link :to="{ name: 'about' }">About</router-link>

        </div>

        <script src="/js/app.js"></script>

    </body>
</html>
