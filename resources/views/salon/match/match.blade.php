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
            <p>質問: まつ毛が多い？</p>
            <div class="d-grid gap-2 mx-auto">
                <ul>
                    <a class="answer-btn" href={{ route('match2') }}>
                        <li type="button" class="btn btn-answer">YES</li>
                    </a>
                    <a class="answer-btn" href={{ route('match2') }}>
                        <li type="button" class="btn btn-answer">No</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection


