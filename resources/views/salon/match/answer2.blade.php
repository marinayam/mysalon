@extends('layouts.front')
@section('title','おすすめメニュー')
@section('content')
<div class="container">
    <div class="choose_box">
        <div class="match-ttl">
            <p>あなたにおすすめのメニューは</p>
        </div>
        <!-- 答え1 -->
        <div class="card-group">
                <div class="card">
                    <img src="images/match-color.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title answer-ttl">フラットラッシュ・カラー140本</h5>
                        <p class="card-text">よりナチュラルで
                        <br>
                        透明感のある目元へ</p>
                        <p class="card-text answer-price"><small class="text-muted">9,900円(税込)</small></p>
                    </div>
                </div>
                <div class="answer-option">
                    <p>or</p>
                </div>
                <div class="card">
                    <img src="images/match-flat.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title answer-ttl">フラットラッシュ140本</h5>
                        <p class="card-text">自然に生える目元へ</p>
                        <p class="card-text answer-price"><small class="text-muted">8,800円(税込)</small></p>
                    </div>
                </div>
                <div class="answer-option">
                    <p>or</p>
                </div>
                <div class="card">
                    <img src="images/match-volume.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title answer-ttl">ボリュームラッシュ400本</h5>
                        <p class="card-text">アイライン効果が欲しい方に
                        <br>
                        おすすめ</p>
                        <p class="card-text answer-price"><small class="text-muted">11,000円(税込)</small></p>
                    </div>
                </div>
            </div>
            <div class="match-appoint-btn">
                <a class="nav-link-appoint" href="https://beauty.hotpepper.jp/kr/slnH000540479/">ご予約</a>
            </div>
            <div class="match-return-btn">
                <a class="return" href={{ route('match4') }}><u>もどる</u></a>
            </div>
        </div>
    </div>
@endsection