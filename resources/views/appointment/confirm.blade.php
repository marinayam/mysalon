@extends('layouts.front')
@section('title','ご予約確認画面')
@section('content')
<div class="container">
    <div class="row">
        <div class ="col-md-8 mx-auto">
            {{-- ページタイトル --}}
            <div class="content-theme">
                <h1 class>
                    <span>Appointment</span>
                </h1>
                <p class="content-theme-ttl">ご予約確認</p>
            </div>
            {{-- ページタイトル --}}
            <div class="container mt-5">
                <form method="POST" action="{{ route('appointment.send') }}">
                    @csrf
                    {{-- 入力内容確認 --}}
                    {{--<div class="form-group row appointment-answer">
                        <label class="col-md-5 appointment-question">お名前（漢字）</label>
                        <p class="col-md-5">{{ $inputs['name01'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="name01" value="{{ $inputs['name01'] }}">
                        </div>
                    </div>
                    <div class="form-group row appointment-answer">
                        <label class="col-md-5 appointment-question">お名前（ふりがな）</label>
                        <p class="col-md-5">{{ $inputs['name02'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="name02" value="{{ $inputs['name02'] }}">
                        </div>
                    </div>
                    <div class="form-group row appointment-answer">
                        <label class="col-md-5 appointment-question">お電話番号</label>
                        <p class="col-md-5">{{ $inputs['tel'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="tel" value="{{ $inputs['tel'] }}">
                        </div>
                    </div>
                    <div class="form-group row appointment-answer">
                        <label class="col-md-5 appointment-question">メールアドレス</label>
                        <p class="col-md-5">{{ $inputs['email'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="email" value="{{ $inputs['email'] }}">
                        </div>
                    </div>--}}
                    <div class="form-group row appointment-answer">
                        <label class="col-md-5 appointment-question">ユーザーID</label>
                        <p class="col-md-5">{{ $inputs['user_id'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="user_id" value="{{ $inputs['user_id'] }}">
                        </div>
                    </div>
                    {{-- メニュー選択--}}
                    <div class="form-group row appointment-answer">
                        <label class="col-md-5 appointment-question">選択中のメニュー</label>
                        <p class="col-md-12 appointment-question-menu">まつ毛パーマ</p>
                        <div class="content">
                            <div class="row">
                                <label class="appointment-menu-confirm col-md-12">
                                    @foreach($perms as $perm)
                                    {{$perm->perm}}
                                    <label class="appointment-menu-confirm col-md-12">
                                        <input class="form-check-input" type="hidden" name="perm[{{ $perm->id}}]" value="{{ $perm->id}}">
                                    </label>
                                   @endforeach
                               </label>
                            </div>
                        </div>
                        <label class="col-md-12 appointment-question-menu">まつ毛エクステ</label>
                        <div class="content">
                            <div class="row">
                                <label class="appointment-menu-confirm col-md-12">
                                    @foreach($extensions as $extension)
                                    {{$extension->extension}}
                                    <label class="appointment-menu-confirm col-md-12">
                                        <input class="form-check-input" type="hidden" name="extension[{{ $extension->id}}]" value="{{ $extension->id}}">
                                    </label>
                                   @endforeach
                               </label>
                            </div>
                        </div>
                        <label class="col-md-12 appointment-question-menu">眉スタイリング</label>
                        <div class="content">
                            <div class="row">
                                <label class="appointment-menu-confirm col-md-12">
                                    @foreach($eyebrows as $eyebrow)
                                    {{$eyebrow->eyebrow}}
                                    <label class="appointment-menu-confirm col-md-12">
                                        <input class="form-check-input" type="hidden" name="eyebrow[{{ $eyebrow->id}}]" value="{{ $eyebrow->id}}">
                                    </label>
                                    @endforeach
                               </label>
                            </div>
                        </div>
                        <label class="col-md-12 appointment-question-menu">オプション</label>
                        <div class="content">
                            <div class="row">
                                <label class="appointment-menu-confirm col-md-12">
                                    @foreach($options as $option)
                                    {{$option->option}}
                                    <label class="appointment-menu-confirm col-md-12">
                                        <input class="form-check-input" type="hidden"  name="option[{{ $option->id}}]" value="{{ $option->id}}">
                                    </label>
                                    @endforeach
                                </label>
                            </div>
                        </div>
                    </div>    
                    {{-- メニュー選択--}}
                    <div class="form-group row appointment-answer">
                        <label class="col-md-5 appointment-question">ご希望のお日にち</label>
                        <p class="col-md-5">{{ $inputs['date'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="date" value="{{ $inputs['date'] }}">
                        </div>
                    </div>
                    <div class="form-group row appointment-answer">
                        <label class="col-md-5 appointment-question">ご希望のお時間</label>
                        <p class="col-md-5">{{ $inputs['time'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="time" value="{{ $inputs['time'] }}">
                        </div>
                    </div>
                    <div class="form-group row appointment-answer">
                        <label for="comment" class="col-md-12 contact-question">お問い合わせ内容</label>
                        <p class="col-md-12">{!! nl2br(e($inputs['comment'])) !!}</p>
                        <div class="col-md-10">
                            <input name="comment" value="{{ $inputs['comment'] }}" type="hidden">
                        </div>
                    </div>
                    {{-- 入力内容確認 --}}
                    <div class="check-button">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button type="submit" name="action" value="back" class="btn btn-outline-secondary">入力内容修正</button>
                            </div>
                            <div class="btn-group ml-auto">
                                <button type="submit" name="action" value="submit" class="btn btn-outline-primary">登録する</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection