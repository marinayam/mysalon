@extends('layouts.front')
@section('title','確認画面')
@section('content')
<div class="container">
  <div class="row">
    <div class ="col-md-8 mx-auto">
      {{-- ページタイトル --}}
      <div class="content-theme">
        <h1>
          <span>CONTACT</span>
        </h1>
        <p class="content-theme-subttl">確認画面</p>
      </div>
      {{-- ページタイトル --}}
      <div class="container mt-5">
        <form method="POST" action="{{ route('contact.send') }}">
          @csrf
          {{-- 入力内容確認 --}}
          <div class="form-group row chart-answer">
            <label for="Name" class="col-md-5 contact-question">名前</label>
            <p class="col-md-5">{{ $inputs['name'] }}</p>
            <div class="col-md-10">
                <input class="form-control" value="{{ $inputs['name'] }}" type="hidden" name="name" >
            </div>
          </div>
          <div class="form-group row chart-answer">
            <label for="email" class="col-md-5 contact-question">メールアドレス</label>
            <p class="col-md-5">{{ $inputs['email'] }}</p>
            <div class="col-md-10">
                <input class="form-control" value="{{ $inputs['email'] }}" type="hidden" name="email">
            </div>
          </div>
          <div class="form-group row chart-answer">
            <label for="tel" class="col-md-5 contact-question">電話番号</label>
            <p class="col-md-5">{{ $inputs['tel'] }}</p>
            <div class="col-md-10">
              <input class="form-control" value="{{ $inputs['tel'] }}" type="hidden" name="tel">
            </div>
          </div>
          <div class="form-group row chart-answer">
            <label for="contact_body" class="col-md-12 contact-question">お問い合わせ内容</label>
            @if($inputs['select']==1)
            <p class="col-md-5">件名：予約について</p>
            @elseif($inputs['select']==2)
            <p class="col-md-5">件名：サロンについて</p>
            @elseif($inputs['select']==3)
            <p class="col-md-5">件名：その他</p>
            @endif
            <input name="select" value="{{ $inputs['select'] }}" type="hidden">
            <p class="col-md-12">{!! nl2br(e($inputs['contact_body'])) !!}</p>
            <div class="col-md-10">
              <input name="contact_body" value="{{ $inputs['contact_body'] }}" type="hidden">
            </div>
          </div>
          {{-- 入力内容確認 --}}
          <div class="check-button">
            <div class="btn-toolbar">
              <div class="btn-group">
                <button type="submit" name="action" value="back" class="btn btn-outline-secondary">入力内容修正</button>
              </div>
              <div class="btn-group ml-auto">
                <button type="submit" name="action" value="submit" class="btn btn-outline-primary">送信する</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection