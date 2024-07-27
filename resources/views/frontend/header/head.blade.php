<head>
    <?php $site_name = 'Carataev Michael'; ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $site_name; ?></title>
    <meta name="title" content="<?php echo $site_name; ?>>">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/img/logoIcon/logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">


    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $site_name; ?>">


    <!-- Fonts Link -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fonts.css') }}">


    <!-- Main style Link -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">


    <!-- Modal style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <!-- Icons svg Link -->
    @php
        include public_path('assets/frontend/icon/svg-icons.html');
    @endphp

</head>
