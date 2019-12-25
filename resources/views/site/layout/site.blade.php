<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="autor" content="Huriel Lopes" />
    <meta name="keywords" content="sites, sistemas, web, mobile, desenvolvimento, consultoria" />
    <meta name="description" content="Desenvolvimento de sites web, sistemas web e aplicativos mobile, consultorias na área de TI online." />
    <title>Huriel Lopes</title>
    <script data-ad-client="ca-pub-5408086791742896" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" />
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    @include('site.includes.style')
    @yield('style')
</head>
<body>
    @yield('menu')

    @yield('content')

    @include('site.includes.script')
    @yield('script')
</body>
</html>
