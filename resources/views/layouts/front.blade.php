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
        <script src ="{{asset('js/appointment.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        {{--Fontsを読み込みます--}}
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600"
        rel="stlesheet" type="text/css">
        
        {{--標準のCSSを読み込みます --}}
        <link href="{{ asset('css/app.css') }}" rel ="stylesheet">
        {{-- 作成したCSSを読み込みます --}}
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('css/match.css') }}" rel="stylesheet">
        <link href="{{ asset('css/service.css') }}" rel="stylesheet">
        <link href="{{ asset('css/staff.css') }}" rel="stylesheet">
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
        <link href="{{ asset('css/appointment.css') }}" rel="stylesheet">
        <link href="{{ asset('css/chart.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="app">
            <header class="container-fluid sticky-top">
                {{-- ナビゲーション開始 --}}
                
                <nav class="navbar navbar-expand-lg navbar-light">
                    {{-- ヘッダーのロゴ --}}
                    <a class="navbar-brand" href="{{ route('/') }}"><img class="img-fluid" src="{{asset('images/logo.png')}}" width="180px"></a>
                    {{-- メニューバーアイコン --}}
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        {{-- 左に表示させるメニュー --}}
                        <ul class="navbar-nav mr-auto">　
                            <li class="nav-item active">
                                <a class="nav-link-appoint" href="{{ route('appointment.create') }}">ご予約</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link-karte" href="{{ route('chart.create') }}">カルテ記入</a>
                            </li>
                        </ul>
                        {{-- 右に表示させるメニュー --}}
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="dropdown" role="button" data-toggle="dropdown" aaria-expanded="false">
                                    Menu
                                </a>
                                {{-- ドロップメニュー --}}
                                <div class="dropdown-menu" aria-labelledby="dropdown">
                                    <a class="dropdown-item" href="{{ route('perm') }}">パーマ</a>
                                    <a class="dropdown-item" href="{{ route('extension') }}">マツエク</a>
                                    <a class="dropdown-item" href="{{ route('eyebrow') }}">美眉スタイリング</a>
                                </div>
                            </li>
                            {{-- ナビゲーション --}}
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('service') }}">初めての方へ</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://www.instagram.com/lys.kichijoji/?r=nametag">Instagram</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="https://beauty.hotpepper.jp/kr/slnH000540479/blog/">Blog</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('staff') }}">Staff</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('contact.create') }}">Contact</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                        {{-- Authentication Links --}}
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->kanji_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
                                        <a class="nav-link dropdown-toggle" id="dropdown" data-toggle="dropdown" aria-expanded="false">
                                            Menu
                                        </a>
                                        {{-- ドロップメニュー --}}
                                        
                                        <div class="dropdown-menu" aria-labelledby="dropdown">
                                            <a class="dropdown-item" href="{{ route('perm') }}">パーマ</a>
                                            <a class="dropdown-item" href="{{ route('extension') }}">マツエク</a>
                                            <a class="dropdown-item" href="{{ route('eyebrow') }}">眉デザイン</a>
                                        </div>
                                        <li><a href="{{ route('service') }}">はじめての方へ</a></li>
                                        <li><a href="{{ route('staff') }}">Staff</a></li>
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
                                       Email: info.lys.kichijoji@gmail.com
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
                                    <a class="nav-link" href="{{ route('contact.create') }}">
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