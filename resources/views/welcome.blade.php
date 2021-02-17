<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <div id="app">
            <input v-model="id" type="text">
            <button v-on:click="search()">SEARCH</button>
            
            <ul>
                <li v-for="element in array">
                    <span>@{{ element.id }}</span>
                    <h1>@{{ element.title }}</h1>
                    <h3>@{{ element.subtitle }}</h3>
                    <p>@{{ element.text }}</p>
                    <strong>- @{{ element.author }}</strong> 
                </li>
            </ul>
            
            
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
