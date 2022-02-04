@extends('layouts.front')
@section('title','おすすめメニュー')
@section('content')
<div class="container">
    <div class="choose-box">
        <div class="match-ttl">
            <p>あなたにピッタリのメニュー発見チャート</p>
        </div>
        <!-- 質問 -->
        <div class="question">
            <p>質問: なりたいイメージは？</p>
            <div class="d-grid gap-2 mx-auto">
                <ul>
                    <a class="answer-btn" href={{ route('answer1') }}>
                        <li type="button" class="btn btn-answer col-12">ナチュラル</li>
                    </a>
                    <a class="answer-btn" href={{ route('answer2') }}>
                        <li type="button" class="btn btn-answer col-12">パッチリ</li>
                    </a>
                    <a class="answer-btn" href={{ route('answer3') }}>
                        <li type="button" class="btn btn-answer col-12">ゴージャス</li>
                    </a>
                    <a class="answer-btn" href={{ route('answer3') }}>
                        <li type="button" class="btn btn-answer col-">エレガント</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="return-btn">
                <a class="return" href={{ route('match') }}><u>もどる</u></a>
        </div>
    </div>
</div>
@endsection