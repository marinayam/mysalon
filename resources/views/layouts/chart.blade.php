<!DOCTYPE html>
<html lang="{{ app ()->getLocale() }}">
    <head>
        <meta charset ="utf-8">
        <meta http-equiv="X-UA-Compatible" content = "IE = edge">
        <meta name ="viewport" content="width=device-width, initial-scale=1">
        
        {{--認証済みのユーザーがリクエストを送信しているのかを確認--}}
        <meta name = "csrf-token" content="{{ csrf_token() }}">
        
        {{--各ページごとにtitleタグを入れる--}}
        <title>@yield('title')</title>
        
        {{--Javascriptを読み込みます--}}
        <script src ="{{ secure_asset('js/app.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        {{--Fontsを読み込みます--}}
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600"
        rel="stlesheet" type="text/css">
        
        <!-- Styles -->
        {{--標準のCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel ="stylesheet">
        {{-- 作成したCSSを読み込みます --}}
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/chart.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="app">
            {{-- ヘッダー --}}
            <header class="container-fluid">
                {{-- ナビゲーション --}}
                <nav class="navbar navbar-expand-lg navbar-light" style=background-color: #e3f2fd;">
                {{-- ヘッダーのロゴ --}}
                    <a class="navbar-brand" href={{ route('/') }}><img class="img-fluid" src="{{asset('images/logo.png')}}" width="180px"></a>
                    {{-- メニューバーアイコン --}}
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        {{-- 左に表示させるメニュー --}}
                        <ul class="navbar-nav mr-auto">　
                            <li class="nav-item">
                                <a class="nav-link-appoint" href="https://beauty.hotpepper.jp/kr/slnH000540479/">ご予約</a>
                            </li>
                        </ul>
                        
                        {{-- 右に表示させるメニュー --}}
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </a>
                                {{-- ドロップメニュー --}}
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href={{ route('perm') }}>パーマ</a>
                                    <a class="dropdown-item" href={{ route('extension') }}>マツエク</a>
                                    <a class="dropdown-item" href={{ route('eyebrow') }}>眉毛</a>
                                </div>
                            {{-- ナビゲーション --}}
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href={{ route('service') }}>初めての方へ</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://www.instagram.com/lys.kichijoji/?r=nametag">Instagram</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://beauty.hotpepper.jp/kr/slnH000540479/blog/">Blog</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href={{ route('staff') }}>Staff</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href={{ route('contact.create') }}>Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main class="py-4">
                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
                @yield('content')
            </main>
            <footer>
                <div class="container-fluid">
                    <div class="footer_in">
                        <div class="row">
                            <div class="col-md-4 footer-menu">
                                <p class="footer-title">ABOUT</p>
                                <ul class="navbar-nav">
                                    <li class="footer-nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Menu
                                        </a>
                                        {{-- ドロップメニュー --}}
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href={{ route('perm') }}>パーマ</a>
                                            <a class="dropdown-item" href={{ route('extension') }}>マツエク</a>
                                            <a class="dropdown-item" href={{ route('eyebrow') }}>眉デザイン</a>
                                        </div>
                                        <li><a href={{ route('service') }}>はじめての方へ</a>
                                        </li>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href={{ route('perm') }}>パーマ</a>
                                            <a class="dropdown-item" href={{ route('extension') }}>マツエク</a>
                                            <a class="dropdown-item" href={{ route('eyebrow') }}>眉デザイン</a>
                                        </div>
                                    </li>
                                    <li><a href={{ route('staff') }}>Staff</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 footer-menu">
                                <p class="footer-title">CONTACT</p>
                                <ul>
                                    <li>
                                        〒180-0005
                                       <br>
                                       東京都武蔵野市御殿山1-6-9
                                       <br>
                                       エルドラド吉祥寺304
                                       <br>
                                       <br>
                                       Email: xxx@gmail.com
                                       <br>
                                       LINE: @250ootex
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 footer-menu">
                                <p class="footer-title">FOLLOW US</p>
                                <ul>
                                    <li>
                                        <a href="https://www.instagram.com/lys.kichijoji/?r=nametag" target="_brank">
                                        <img src="{{asset('images/instagram.png')}}" width="24px">
                                        Instagram
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://beauty.hotpepper.jp/kr/slnH000540479/blog/">ブログへ</a>
                                    </li>
                                    <a class="nav-link" href={{ route('contact.create') }}>
                                        <button type="button" class="btn btn-outline-dark">お問い合わせはこちら</button>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_in2">
                    <div class="fixedcontainer">
                        <p>©︎ Lys. Company Inc.</p>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>