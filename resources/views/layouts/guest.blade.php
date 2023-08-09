<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--  <title>{{ config('app.name', 'Agenda Kegiatan Kominfo') }}</title>  --}}

        <title>Dinas Komunikasi dan Informatika Kab Cirebon &#8211; Diskominfo Kab.Cirebon</title>
    <script type="text/javascript">'use strict';var avia_is_mobile=!1;if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)&&'ontouchstart' in document.documentElement){avia_is_mobile=!0;document.documentElement.className+=' avia_mobile '}
        else{document.documentElement.className+=' avia_desktop '};document.documentElement.className+=' js_active ';(function(){var e=['-webkit-','-moz-','-ms-',''],n='';for(var t in e){if(e[t]+'transform' in document.documentElement.style){document.documentElement.className+=' avia_transform ';n=e[t]+'transform'};if(e[t]+'perspective' in document.documentElement.style)document.documentElement.className+=' avia_transform3d '};if(typeof document.getElementsByClassName=='function'&&typeof document.documentElement.getBoundingClientRect=='function'&&avia_is_mobile==!1){if(n&&window.innerHeight>0){setTimeout(function(){var e=0,o={},a=0,t=document.getElementsByClassName('av-parallax'),i=window.pageYOffset||document.documentElement.scrollTop;for(e=0;e<t.length;e++){t[e].style.top='0px';o=t[e].getBoundingClientRect();a=Math.ceil((window.innerHeight+i-o.top)*0.3);t[e].style[n]='translate(0px, '+a+'px)';t[e].style.top='auto';t[e].className+=' enabled-parallax '}},50)}}})();</script><link rel="icon" href="https://diskominfo.cirebonkab.go.id/wp-content/uploads/2021/06/cropped-diskominfo-removebg-preview-1-32x32.png" sizes="32x32" />

    <link rel="icon" href="https://diskominfo.cirebonkab.go.id/wp-content/uploads/2021/06/cropped-diskominfo-removebg-preview-1-192x192.png" sizes="192x192" /><title>Agenda Kegiatan KOMINFO Kab. Cirebon</title>

    <link rel="shortcut icon" href="/adminlte/img/cirebonkab.png" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
