@extends('layouts.front')
@section('title','お問い合わせ')
@section('content')
<div class="container">
  <div class="row">
    <div class ="col-md-8 mx-auto">
      {{-- ページタイトル --}}
      <div class="content-theme">
        <h1>
          <span>CONTACT</span>
        </h1>
        <p class="content-theme-subttl">お問い合わせ</p>
      </div>
      {{-- ページタイトル --}}
      <form method="POST" action="{{ route('contact.confirm') }}">
        {{-- validation --}}
        @if (count($errors) > 0)
          <ul class="contact-validation">
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        @endif
        @csrf
        {{-- validation --}}
        {{-- お問い合わせフォーム --}}
        <div class="form-group row">
          <label for="Name" class="col-md-5">
            <span class="badge badge-danger">必須</span>
            名前
          </label>
          <div class="col-md-10">
              <input class="form-control" value="{{ old('name') }}" type="text" name="name">
              <label class="example col-md-5">例:山田花子</label>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-md-5">
            <span class="badge badge-danger">必須</span>
            メールアドレス
          </label>
          <div class="col-md-10">
            <input class="form-control" value="{{ old('email') }}" type="text" name="email">
            <label class="example col-md-5">例:example@example.com</label>
          </div>
        </div>
        <div class="form-group row">
          <label for="tel"class="col-md-5">電話番号</label>
          <div class="col-md-10">
            <input class="form-control" value="{{ old('tel') }}" type="tel" name="tel">
            <label class="example col-md-5">例:090-0000-0000</label>
          </div>
        </div>
        <div class="form-group row">
          <label for="contact_body" class="col-md-5">
            <span class="badge badge-danger">必須</span>
            お問い合わせ内容
          </label>
          <div class="col-md-10">
            <select class="form-select" aria-label="Default select example" name="select">
              <option>選択してください</option>
              <option value="1" {{ old('select')==1 ? 'selected' : '' }}>ご予約について</option>
              <option value="2" {{ old('select')==2 ? 'selected' : '' }}>サロンについて</option>
              <option value="3" {{ old('select')==3 ? 'selected' : '' }}>その他</option>
            </select>
            <textarea class="form-control" name="contact_body" rows="10" cols="30" minlength:10 maxlength:140>{{ old('contact_body') }}</textarea>
          </div>
        </div>
        {{-- お問い合わせフォーム --}}
        <div class="text-right">
          <button type="submit" name="action" value="submit" class="btn btn-outline-primary">入力内容確認</button>
        </div>
      </form>   
    </div>
  </div>
</div>
@endsection