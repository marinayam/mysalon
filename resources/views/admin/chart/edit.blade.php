@extends('layouts.admin')
@section('title', '顧客情報の編集')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>顧客情報の編集</h2>
                <form action="{{ action('Admin\ChartController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name01">名前(漢字)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name01" value="{{ $chart_form->name01 }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="name02">名前(ふりがな)</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name02" value="{{ $chart_form->name02 }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="tel">電話番号</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tel" value="{{ $chart_form->tel }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="email">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="email" value="{{ $chart_form->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="birthday">生年月日</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="birthday" value="{{ $chart_form->birthday }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="zip">郵便番号</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="zip" value="{{ $chart_form->zip }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="pref">都道府県</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="pref" value="{{ $chart_form->pref }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="addr01">市区町村</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="addr01" value="{{ $chart_form->addr01 }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="addr02">建物名・その他</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="addr02" value="{{ $chart_form->addr02 }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="trouble">お化粧品や施術でのトラブルの経験</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="trouble" value="{{ $chart_form->trouble }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="concern">目元・眉で気になる点</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="concern" value="{{ $chart_form->concern }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="allergy">アレルギー</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="allergy" value="{{ $chart_form->allergy }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="record">今までの施術や手術のご経験</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="record" value="{{ $chart_form->record }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body_concern">体調の問題</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="body_concern" value="{{ $chart_form->body_concern }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="trigger">来店きっかけ</label>
                        <div class="col-md-10">
                            @foreach($triggers as $trigger)
                            <label class="col-md-12 form-check-label">
                                <input class="form-check-input" type="checkbox" name="trigger[]" value="{{ $trigger->id}}"  {{ in_array($trigger->id,$selected_triggers)? 'checked' : ''}}>
                                {{$trigger->trigger}}
                            </label>
                            @endforeach                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="comment">コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="20">{{ $chart_form->comment }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $chart_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection