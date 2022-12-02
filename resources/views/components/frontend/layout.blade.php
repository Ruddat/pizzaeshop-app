<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.frontend.includes.head')
</head>

<body>
    <div class="mad-preloader"></div>
    <div id="mad-page-wrapper" class="mad-page-wrapper">

        @include('components.frontend.includes.header')
        @include('components.frontend.includes.slider')

        @yield('content')

        @include('components.frontend.includes.products')
        @include('components.frontend.includes.howitworks')



    @include('components.frontend.includes.footer')
    @include('components.frontend.includes.scripts')
    </div>

</body>

</html>
