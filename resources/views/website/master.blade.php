<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learning Platform - CodeCraft Academy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="1052304982162-6f7mafdka87ltfd3m3rq3jom33lfvi53.apps.googleusercontent.com">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}website/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    @include('website.includes.style')

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
          document.documentElement.classList.add("is_dark");
        } 
        if (localStorage.getItem("theme-color") === "light") {
          document.documentElement.classList.remove("is_dark");
        } 
    </script>

</head>
<body>
@include('website.includes.header')
@yield('body')
@include('website.includes.theme')
@include('website.includes.footer')
@include('website.includes.script')
</body>
</html>

