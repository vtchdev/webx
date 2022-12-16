<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />
    <!-- Site Properties -->
    <title>@yield('title')</title>
    <!-- Critical preload -->
    <link rel="preload" href="{{ asset('js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="{{ asset('fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>

    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
