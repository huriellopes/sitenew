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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <script data-ad-client="ca-pub-5408086791742896" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    @yield('style')
</head>
<body>
    @yield('menu')

    @yield('content')

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @yield('script')
</body>
</html>
