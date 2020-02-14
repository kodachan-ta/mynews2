<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset-"utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=decive-width", initial-scale=1">
        
        <!-- CSRF Token -->
        {{-- 後の章で説明します　--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        {{-- 各ページごとにtitleタグを入れるために@yieldで開けておきます。 --}}
        <title>@yield('title')</title>
        
        <!--Scripts-->
        {{-- Laravel標準で用意されているJavascriptを読み込みます。 --}}
        
        <!--Fonts-->
        <link rel="dns-prefetch" href="http://fonts.gstatic.com">
        <link herf="http://fonts.googleapis.com/css?family=Ralway:300,400,600" rel="stylesheet" type"tect/css">
        
        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secuer_asset('css/app.css') }}" rel="stylesheet">
        {{-- この賞の公判で作成するCSS読み込みます。　--CSS}}
        <link href="{{ secuer_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{--画面上部に表示するナビゲーションバーです。 --}}
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="content">
                    <a class="navbar-brand" href="{{ url('/')}}">
                        {{ config('app.name','Laravel') }}
                    </a>
                    <button class="navar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controles="navbarSupportedContent" aria-exnded="false" aria-label="Tpggle navigation">
                        <apan class="navbar-toggler-icon"></apan>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!--　Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        
                        </ul>
                        
                        <!-- Right Side Of Navbar -->
                        <ul class=ul"navbar-nav ml-auto">
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- ここまでナビゲーションバー　--}}
            
            <main class=main"py-4">
                {{-- コンテンツをここに入れるため、@yieldで開けておきます。 --}}
                @yield('content')
                </main>
            </div>
        </body>
</html>