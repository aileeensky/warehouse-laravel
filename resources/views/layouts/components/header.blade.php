<head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta
          content="{{ config('app.name', 'Laravel') }}"
          name="description"
        />
        <meta content="" name="Themesbrand" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />


        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

         <link rel="stylesheet" href="./assets/libs/swiper/swiper-bundle.min.css">

        <link rel="stylesheet" href="assets/css/icons.css" />
        <link rel="stylesheet" href="assets/css/tailwind.css" />
        
        @stack('styles')
    </head>