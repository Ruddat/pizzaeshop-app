<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



<link rel='stylesheet' href="{{ asset ('assets/pizza/css/advent-calendar.css') }}" type='text/css' media='all' />



{!! $output !!}




<x-frontend.pizza.includes.footer :Shopdaten="$Shopdaten"></x-frontend.pizza.includes.footer>


<x-frontend.pizza.pages.java></x-frontend.pizza.pages.java>

</head>
<body class="font-sans antialiased" style="background-color: darkred;">

</body>
</html>
