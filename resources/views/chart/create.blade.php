@extends('layouts.front')
@section('title','カルテ記入')
@section('content')
<body>
<div class ="container">
    <div class="row">
        <div class ="col-md-8 mx-auto chart">
            <div class="content-theme">
                <span class="content-theme-ttl">カルテ記入</span>
            </div>            
            <p>※質問項目で該当がない場合は、「なし」と記入お願い致します。</p>
            <form method="POST" action="{{ route('chart.confirm') }}">
                @if (count($errors) > 0)
                    <ul class="chart-validation">
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                @csrf
                {{-- カルテ項目開始 --}}
                {{--<div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        お名前（漢字）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name01" value="{{ old('name01') }}">
                        <label class="example col-md-5">例:山田花子</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        お名前（ふりがな）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name02" value="{{ old('name02') }}">
                        <label class="example col-md-5">例:やまだはなこ</label>
                    </div>
                 </div>
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        お電話番号</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control"  name="tel"  value="{{ old('tel') }}">
                        <label class="example col-md-5">例：090-0000-0000</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        メールアドレス</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        <label class="example col-md-5">例：example@example.com</label>
                    </div>
                </div>--}}
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        ユーザーID</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="chart_id" value="{{ old('chart_id') }}">
                        <label class="example col-md-5">例：</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-5">
                        <span class="badge badge-danger">必須</span>
                        生年月日</label>
                    <div class="col-md-10">
                        <input type="date" name="birthday" value="{{ old('birthday') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        <!--住所　開始-->
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="inputAddress01">
                                    <span class="badge badge-danger">必須</span>
                                    郵便番号(7桁)</label>
                                <input type="text" name="zip" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref','addr01');" class="form-control" id="inputAddress01" value="{{ old('zip') }}">
                                <label class="example col-md-6">例：180-0005</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <label for="inputAddress02">
                                    <span class="badge badge-danger">必須</span>
                                    都道府県</label>
                                <input type="text" name="pref" id="inputAddress02" class="form-control" value="{{ old('pref') }}">
                                <label class="example col-md-6">例：東京都</label>
                            </div>
                            <div class="col-md-7 mb-3">
                                <label for="inputAddress03">
                                    <span class="badge badge-danger">必須</span>
                                    市区町村・番地</label>
                                <input type="text" name="addr01" class="form-control" id="inputAddress03"  value="{{ old('addr01') }}">
                                <label class="example col-md-7">例：武蔵野市御殿山１-６-９</label>
                            </div>
                            <div class="col-md-8 mb-3">
                                <label for="inputAddress03">
                                    建物名・その他</label>
                                <input type="text" name="addr02" class="form-control" id="inputAddress04" value="{{ old('addr02') }}">
                                <label class="example col-md-8">例：エルドラド吉祥寺304</label>
                            </div>
                        </div>
                        <!--/住所　終了-->
                    </div>
                </div>
                <div class="form-group check">
                    <label class="col-md-6">
                        <span class="badge badge-danger">必須</span>
                        ご来店きっかけ</label>
                    @foreach($triggers as $trigger)
                    <label class="col-md-6 form-check-label">
                        <input class="form-check-input" type="checkbox" name="trigger[{{ $trigger->id}}]" value="{{ $trigger->id}}"  {{ $trigger->id===(int)old('trigger.'.$trigger->id) ? 'checked' : ''}}>
                        {{$trigger->trigger}}
                    </label>
                   @endforeach
                </div>
                <div class="form-group row">
                    <label class="col-md-8">
                        <span class="badge badge-danger">必須</span>
                        過去の施術トラブル（化粧品が合わなかった等）</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control"  name="trouble"  value="{{ old('trouble') }}">
                        <label class="example col-md-12">例：肌荒れ</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-8">
                        <span class="badge badge-danger">必須</span>
                        お目元・眉周りのお悩み</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control"  name="concern"  value="{{ old('concern') }}">
                        <label class="example col-md-12">例：まつ毛の量</label>
                    </div>
                </div>
                 <div class="form-group row">
                    <label class="col-md-8">
                        <span class="badge badge-danger">必須</span>
                        アレルギー</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control"  name="allergy"  value="{{ old('allergy') }}">
                        <label class="example col-md-12">例：花粉</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-8">
                        <span class="badge badge-danger">必須</span>
                        過去の施術経験</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control"  name="record"  value="{{ old('record') }}">
                        <label class="example col-md-12">例：まつ毛パーマ・エクステ、眉パーマ、アートメイク、レーシック手術、お目元の整形、ピーリング・レーザー治療、ヒアルロン酸・ボトックス、お顔の脱毛等</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-8">
                        <span class="badge badge-danger">必須</span>
                        気になる身体の疲れ</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control"  name="body_concern"  value="{{ old('body_concern') }}">
                        <label class="example col-md-12">例：肩こり、目の疲れ、疲れやすい、睡眠不足、頭痛、ストレス、むくみ等</label>
                    </div>
                </div>
                <!---注意事項　開始-->
                <div class="chart-notice">
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
                <!---注意事項　終了-->
                {{ csrf_field() }}
                <div class="text-right">
                    <button type="submit" name="action" value="submit" class="btn btn-outline-primary">入力内容確認</button>
                </div>
             </form>
        </div>
        <!-- 郵便番号から住所自動入力 -->
        <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    </div>
</div>
</body> 
@endsection
