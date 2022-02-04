@extends('layouts.admin')
@section('title', '管理者画面')
@section('content')
<div class="container">
    <div class="row">
        <h2>管理者</h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <ul>
                <li>
                    <a href={{ route('admin.chart.index') }}>カルテ情報</a>
                </li>
                <li>
                    <a href={{ route('admin.appointment.index') }}>予約情報</a>
                </li>
                <h2>編集・新規作成</h2>
                <li>
                    <a href={{ route('admin.staff.index') }}>スタッフ一覧</a>
                </li>
                <li>
                    <a href={{ route('admin.trigger.index') }}>カルテのご来店きっかけカテゴリー</a>
                </li>
                <h3>メニュー</h3>
                <li>
                    <a href={{ route('admin.perm.index') }}>パーマ</a>
                </li>
                <li>
                    <a href={{ route('admin.extension.index') }}>マツエク</a>
                </li>
                <li>
                    <a href={{ route('admin.eyebrow.index') }}>アイブロウ</a>
                </li>
                <li>
                    <a href={{ route('admin.option.index') }}>アイブロウ</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
