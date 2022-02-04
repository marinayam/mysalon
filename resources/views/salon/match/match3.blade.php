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
            <p>質問:汗をかきやすい</p>
            <div class="d-grid gap-2 mx-auto">
                <ul>
                    <a class="answer-btn" href={{ route('match4') }}>
                        <li type="button" class="btn btn-answer">YES</li>
                    </a>
                    <a class="answer-btn" href={{ route('match4') }}>
                        <li type="button" class="btn btn-answer">No</li>
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