@extends('layouts.front')
@section('title','Appointment')
@section('content')
<div class="container">
  <div class="row mx-auto">
    <div class ="col-md-10 mx-auto">
    {{-- ページタイトル --}}
      <div class="content-theme">
        <h1>
            <span>Appointment</span>
        </h1>
        <p class="content-theme-ttl">ご予約</p>
      </div>
      {{-- ページタイトル --}}
      <form method="POST" action="{{ route('appointment.confirm') }}">
        {{-- validation --}}
        @if (count($errors) > 0)
          <ul class="contact-validation">
            @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        @endif
        @csrf
        {{-- 予約フォーム --}}
        <div class="form-group row">
          <label for="user_id"class="col-md-5">
            <span class="badge badge-danger">必須</span>
                ユーザーID(メールアドレス)
          </label>
          <div class="col-md-10">
            <input class="form-control" value="{{ old('user_id') }}" type="user_id" name="user_id">
            <label class="example col-md-5">例:example@example.com</label>
          </div>
        </div>
        {{-- メニュー選択--}}
        <div class="form-group row">
          <label class="col-md-12">
            <span class="badge badge-danger">必須</span>
            メニューを選択ください<br>
            <br>
            ※マツエクの本数・デザインは、当日カウンセリングにてお客様に合わせたメニューを提案させて頂きます。<br>
            <br>
            ご希望の本数・デザインがございましたら、下記、お問い合わせ欄に記入お願い致します。<br>
          </label>
          <div class="col-md-10">
            <div class="accordion-container">
              <h4 class="accordion-title js-accordion-title">まつ毛パーマ(ラッシュリフト)</h4>
              <div class="accordion-content">
                <div class="form-group row">
                  <label class="col-md-12">
                    @foreach($perms as $perm)
                    <label class="form-check-label appointment-menu-list flex-column col-12">
                        <input class="form-check-input" type="checkbox" name="perm[]" value="{{ $perm->id}}" {{ $perm->id==old('perm.'.$perm->id) ? 'checked' : ''}}>
                        {{$perm->perm}}
                    </label>
                    @endforeach
                  </label>
                </div>
              </div>
              <h4 class="accordion-title js-accordion-title">まつ毛エクステ</h4>
              <div class="accordion-content">
                <div class="form-group row">
                  <label class="col-md-12">
                    @foreach($extensions as $extension)
                      <label class="col-md-12 form-check-label appointment-menu-list flex-column">
                        <input class="form-check-input" type="checkbox" name="extension[]" value="{{ $extension->id}}"  {{ $extension->id==old('extension.'.$extension->id) ? 'checked' : ''}}>
                        {{$extension->extension}}
                      </label>
                     @endforeach
                  </label>
                </div>
              </div>
              <h4 class="accordion-title js-accordion-title">眉スタイリング</h4>
              <div class="accordion-content">
                <div class="form-group row">
                  <label class="col-md-12">
                    @foreach($eyebrows as $eyebrow)
                      <label class="col-md-12 form-check-label appointment-menu-list flex-column">
                        <input class="form-check-input" type="checkbox" name="eyebrow[]" value="{{ $eyebrow->id}}"  {{ $eyebrow->id==old('eyebrow.'.$eyebrow->id) ? 'checked' : ''}}>
                        {{$eyebrow->eyebrow}}
                      </label>
                    @endforeach
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-5">オプションメニュー</label>
          <div class="col-md-10 option-menu">
            @foreach($options as $option)
            <label class="col-md-12 form-check-label appointment-menu-list flex-column">
              <input class="form-check-input" type="checkbox"  name="option[]" value="{{ $option->id}}"  {{ $option->id==old('option.'.$option->id) ? 'checked' : ''}}>
              {{$option->option}}
            </label>
            @endforeach
          </div>
        </div>
        {{-- メニュー選択--}}
        <div class="form-group row">
          <label class="col-md-5">
            <span class="badge badge-danger">必須</span>
            ご希望の日にち
          </label>
          <div class="col-md-10">
            <input class="form-control" type="date" name="date" value="{{ old('date') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-5">
            <span class="badge badge-danger">必須</span>
            ご希望の時間
          </label>
          <div class="col-md-10">
            <select class="form-select" type="time" aria-label="Default select example" name="time">
              <option></option>
              <option value="9:00" {{ old('time')=="9:00" ? 'selected' : '' }}>9:00</option>
              <option value="9:30" {{ old('time')=="9:30" ? 'selected' : '' }}>9:30</option>
              <option value="10:00" {{ old('time')=="10:00" ? 'selected' : '' }}>10:00</option>
              <option value="10:30" {{ old('time')=="10:30" ? 'selected' : '' }}>10:30</option>
              <option value="11:00" {{ old('time')=="11:00" ? 'selected' : '' }}>11:00</option>
              <option value="11:30" {{ old('time')=="11:30" ? 'selected' : '' }}>11:30</option>
              <option value="12:00" {{ old('time')=="12:00" ? 'selected' : '' }}>12:00</option>
              <option value="12:30" {{ old('time')=="12:30" ? 'selected' : '' }}>12:30</option>
              <option value="13:00" {{ old('time')=="13:00" ? 'selected' : '' }}>13:00</option>
              <option value="13:30" {{ old('time')=="13:30" ? 'selected' : '' }}>13:30</option>
              <option value="14:00" {{ old('time')=="14:00" ? 'selected' : '' }}>14:00</option>
              <option value="14:30" {{ old('time')=="14:30" ? 'selected' : '' }}>14:30</option>
              <option value="15:00" {{ old('time')=="15:00" ? 'selected' : '' }}>15:00</option>
              <option value="15:30" {{ old('time')=="15:30" ? 'selected' : '' }}>15:30</option>
              <option value="16:00" {{ old('time')=="16:00" ? 'selected' : '' }}>16:00</option>
              <option value="16:30" {{ old('time')=="16:30" ? 'selected' : '' }}>16:30</option>
              <option value="17:00" {{ old('time')=="17:00" ? 'selected' : '' }}>17:00</option>
              <option value="17:30" {{ old('time')=="17:30" ? 'selected' : '' }}>17:30</option>
              <option value="18:00" {{ old('time')=="18:00" ? 'selected' : '' }}>18:00</option>
              <option value="18:30" {{ old('time')=="18:30"? 'selected' : '' }}>18:30</option>
              <option value="19:00" {{ old('time')=="19:00" ? 'selected' : '' }}>19:00</option>
              <option value="19:30" {{ old('time')=="19:30" ? 'selected' : '' }}>19:30</option>
              <option value="20:00" {{ old('time')=="20:00" ? 'selected' : '' }}>20:00</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="comment" class="col-md-5">
            <span class="badge badge-danger">必須</span>
            お問い合わせ内容
          </label>
          <div class="col-md-10">
            <div class="contact-caution">
              <p>※ご質問等がございましたらご記入ください。<br>
              マツエクメニューでご希望の本数・デザインがある方はこちらにご記入お願い致します。</p>
            </div>
            <textarea class="form-control" name="comment" rows="10" cols="30" minlength:10 maxlength:140>{{ old('comment') }}</textarea>
          </div>
        </div>
        {{-- 注意事項 --}}
        <div class="row mx-auto">
          <div class="col-md-10 appointment-notice">
            <h1>注意事項</h1>
            <ul>
              <li>
                ・はじめての方は、ご予約時間の10分前にご来店下さい。<br>
                初回ご来店の際、施術前にカウンセリングを行っておりますので、<br>
                施術時間の他に約10分お時間を頂きますので余裕を持ってご来店ください。<br>
                <br>
              </li>
              <li>
                ・ご予約変更について<br>
                日時変更は予約日前日までにご連絡をお願い致します。<br>
                直前のキャンセル、もしくはキャンセルを頂けなかった場合については、<br>
                キャンセル料を頂戴致しますので、あらかじめご了承ください。<br>
              </li>
            </ul>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
              <label class="form-check-label" for="flexCheckDefault">
                同意します
              </label>
            </div>
          </div>
        </div>
        {{-- 注意事項 --}}
        {{-- 予約フォーム --}}
        <div>
          <button type="submit" name="action" value="submit" class="btn btn-outline-primary">入力内容確認</button>
        </div>
      </form>   
    </div>
  </div>
</div>
@endsection