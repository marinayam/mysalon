@extends('layouts.chart')
@section('title','カルテ記入')
@section('content')
<!--メッセージ-->
<div class="container">
    <div class="row">
        <div class ="col-md-8 mx-auto">
            <div class="chart-content">
                <h1 class>
                    <span class="chart-ttl">カルテ記入</span>
                </h1>
                <p class="chart-subttl">確認画面</p>
            </div>
            <div class="container mt-5">
                <form action="{{ action('ChartController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @csrf
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">お名前（漢字）</label>
                        <p class="col-md-5">{{ $inputs['name01'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="name01" value="{{ $inputs['name01'] }}">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">お名前（ふりがな）</label>
                        <p class="col-md-5">{{ $inputs['name02'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="name02" value="{{ $inputs['name02'] }}">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">お電話番号</label>
                        <p class="col-md-5">{{ $inputs['tel'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="tel" value="{{ $inputs['tel'] }}">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">メールアドレス</label>
                        <p class="col-md-5">{{ $inputs['email'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="email" value="{{ $inputs['email'] }}">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">生年月日</label>
                        <p class="col-md-5">{{ $inputs['birthday'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control" name="birthday" value="{{ $inputs['birthday'] }}">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label for="inputAddress01" class="col-md-5 chart-question">郵便番号(7桁)</label>
                        <p class="col-md-5">{{ $inputs['zip'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" name="zip" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref','addr01');" class="form-control" id="inputAddress01" value="{{ $inputs['zip'] }}" >
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label for="inputAddress02"class="col-md-5 chart-question">都道府県</label>
                        <p class="col-md-5">{{ $inputs['pref'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" name="pref" id="inputAddress02" class="form-control" value="{{ $inputs['pref'] }}" >
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label for="inputAddress03" class="col-md-5 chart-question">市区町村・番地</label>
                        <p class="col-md-5">{{ $inputs['addr01'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" name="addr01" class="form-control" id="inputAddress03"  value="{{ $inputs['addr01'] }}" >
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label for="inputAddress03" class="col-md-5 chart-question">建物名・その他</label>
                        <p class="col-md-5">{{ $inputs['addr02'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" name="addr02" class="form-control" id="inputAddress04" value="{{ $inputs['addr02'] }}" >
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">ご来店きっかけ</label>
                        <p class="col-md-5">
                            @foreach($triggers as $trigger)
                            {{$trigger->trigger}}
                            <div class="col-md-10">
                                <input type="hidden" class="form-check-input"  name="trigger[{{ $trigger->id }}]" value="{{ $trigger->id }}">
                            </div>
                            @endforeach
                        </p>
                    </div>
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">施術トラブルのご経験</label>
                        <p class="col-md-5">{{ $inputs['trouble'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control"  name="trouble"  value="{{ $inputs['trouble'] }}">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">お目元・眉周りのお悩み</label>
                        <p class="col-md-5">{{ $inputs['concern'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control"  name="concern"  value="{{ $inputs['concern'] }}">
                        </div>
                    </div>
                     <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">アレルギー</label>
                        <p class="col-md-5">{{ $inputs['allergy'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control"  name="allergy"  value="{{ $inputs['allergy'] }}">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">過去の施術経験</label>
                        <p class="col-md-5">{{ $inputs['record'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control"  name="record"  value="{{ $inputs['record'] }}">
                        </div>
                    </div>
                    <div class="form-group row chart-answer">
                        <label class="col-md-5 chart-question">気になる身体の疲れ</label>
                        <p class="col-md-5">{{ $inputs['body_concern'] }}</p>
                        <div class="col-md-10">
                            <input type="hidden" class="form-control"  name="body_concern"  value="{{ $inputs['body_concern'] }}">
                        </div>
                    </div>
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