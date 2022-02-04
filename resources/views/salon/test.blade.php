テスト
@extends('layouts.front')
@section('title','おすすめメニュー')
@section('content')
<div class="container">
    <div class="choose_box">
        <div class="app-theme">
            <p>あなたにピッタリのメニュー発見チャート</p>
        </div>
        <!-- ここから５つ質問 -->
        <!-- 質問1 -->
        <div id="q_01" class="fit">
            <p>質問1: なりたいイメージは？</p>
            <ul>
                <li><a class="btn" href="#q_02" data-value="a">ナチュラル</a></li>
              <li><a class="btn" href="#q_02" data-value="b">パッチリ</a></li>
              <li><a class="btn" href="#q_02" data-value="c">ゴージャス</a></li>
            </ul>
        </div>
        <!-- 質問2 -->
        <div id="q_02" style="display: none;">
            <p>質問2:　自まつ毛の量が？</p>
            <ul>
                <li><a class="btn" href="#q_03" data-value="a">多い</a></li>
                <li><a class="btn" href="#q_03" data-value="b">普通</a></li>
                <li><a class="btn" href="#q_03" data-value="c">少ない</a></li>
            </ul>
        </div>
        <!-- 質問3 -->
        <div id="q_03" style="display: none;">
            <p>質問3:　まつ毛の角度は？</p>
            <ul>
                <li><a class="btn" href="#q_04" data-value="a">上向き</a></li>
                <li><a class="btn" href="#q_04" data-value="b">真っ直ぐ</a></li>
                <li><a class="btn" href="#q_04" data-value="c">下がっている</a></li>
            </ul>
        </div>
        <!-- 質問4 -->
        <div id="q_04" style="display: none;">
            <p>質問4:　普段汗を？</p>
            <ul>
                <li><a class="btn" href="#q_05" data-value="a">かきやすい</a></li>
                <li><a class="btn" href="#q_05" data-value="b">普通</a></li>
                <li><a class="btn" href="#q_05" data-value="b">かかないほう</a></li>
            </ul>
        </div>
        <!-- 質問5 -->
        <div id="q_05" style="display: none;">
            <p>質問5:　普段、マスカラを？</p>
            <ul>
                <li><a class="btn end" data-value="a">常にする</a></li>
                <li><a class="btn end" data-value="b">たまにする</a></li>
                <li><a class="btn end" data-value="c">ほとんどしない</a></li>
            </ul>
        </div>
        <!-- 回答の答え1 -->
        <div id="answer_01" class="result" style="display: none;">
            <div class="result_theme ">
                <p>あなたにおすすめメニューは</p>
            </div>
            <div class="result_type ">
                <h4>カラー120本 or フラット120本 or ボリュームラッシュ300本</h4>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">フラットラッシュ・カラー120本</h5>
                        <p class="card-text">よりナチュラルで
                        <br>
                        透明感のある目元へ</p>
                        <p class="card-text"><small class="text-muted">8,800円(税込)</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">フラットラッシュ120本</h5>
                        <p class="card-text">自然に生える目元へ</p>
                        <p class="card-text"><small class="text-muted">7,700円(税込)</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">ボリュームラッシュ300本</h5>
                        <p class="card-text">アイライン効果が欲しい方に
                        <br>
                        おすすめ</p>
                        <p class="card-text"><small class="text-muted">8,800円(税込)</small></p>
                    </div>
                </div>
            </div>
            <div class="appoint-btn">
                <a class="appoint" href="">予約する</a>
            </div>
            <div class="return-btn">
                <a class="return" href={{ route('/') }}>もどる</a>
            </div>
        </div>
        <!-- 回答の答え2 -->
        <div id="answer_02" style="display: none;">
            <div class="result_theme ">
                <p>あなたにおすすめメニューは</p>
            </div>
            <div class="result_type ">
                <h4>カラー160本 or フラット160本 or ボリュームラッシュ400本　</h4>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">フラットラッシュ・カラー160本</h5>
                        <p class="card-text">透明感のある
                        <br>
                        パッチリした目元へ</p>
                        <p class="card-text"><small class="text-muted">11,000円(税込)</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">フラットラッシュ160本</h5>
                        <p class="card-text">自然にパッチリした目元へ</p>
                        <p class="card-text"><small class="text-muted">9,900円(税込)</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">ボリュームラッシュ400本</h5>
                        <p class="card-text">アイライン効果が欲しい方に
                        <br>
                        おすすめ</p>
                        <p class="card-text"><small class="text-muted">11,000円(税込)</small></p>
                    </div>
                </div>
            </div>
            <div class="appoint-btn">
                <a class="appoint" href="">予約する</a>
            </div>
            <div class="return-btn">
                <a class="return" href={{ route('/') }}>もどる</a>
            </div>
        </div>
        <!-- 回答の答え3 -->
        <div id="answer_03" style="display: none;">
            <div class="result_theme ">
                <p>あなたにおすすめメニューは</p>
            </div>
            <div class="result_type ">
                <h4>フラット160本 or ボリュームラッシュ 400本 or バインンドロック100束</h4>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">フラットラッシュ・160本</h5>
                        <p class="card-text">透明感のある
                        <br>
                        パッチリした目元へ</p>
                        <p class="card-text"><small class="text-muted">9,900円(税込)</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">ボリュームラッシュ 400本</h5>
                        <p class="card-text">アイライン効果が欲しい方に
                        <br>
                        おすすめ</p>
                        <p class="card-text"><small class="text-muted">11,000円(税込)</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/perm.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">バインンドロック100束</h5>
                        <p class="card-text">モチ重視の方におすすめ</p>
                        <p class="card-text"><small class="text-muted">12,100円(税込)</small></p>
                    </div>
                </div>
            </div>
            <div class="appoint-btn">
                <a class="appoint" href="">予約する</a>
            </div>
            <div class="return-btn">
                <a class="return" href={{ route('/') }}>もどる</a>
            </div>
        </div>
     </div>
</div>
@endsection