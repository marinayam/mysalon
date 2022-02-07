@extends('layouts.admin')
@section('title', '顧客情報の詳細')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>顧客情報の詳細</h2>
                <form action="{{ action('Admin\UserController@chart') }}" method="get" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label for="birthday" class="col-md-5">生年月日</label>
                        <p class="col-md-5">{{ $chart_form->birthday }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="birthday" value="{{ $chart_form->birthday }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="zip" class="col-md-5">郵便番号</label>
                        <p class="col-md-5">{{ $chart_form->zip }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="zip" value="{{ $chart_form->zip }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pref" class="col-md-5">都道府県</label>
                        <p class="col-md-5">{{ $chart_form->pref }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="pref" value="{{ $chart_form->pref }}"type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="addr01" class="col-md-5">市区町村</label>
                        <p class="col-md-5">{{ $chart_form->addr01 }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="addr01" value="{{ $chart_form->addr01 }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="addr02" class="col-md-5">建物名・その他</label>
                        <p class="col-md-5">{{ $chart_form->addr02 }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="addr02" value="{{ $chart_form->addr02 }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="trouble" class="col-md-5">お化粧品や施術でのトラブルの経験</label>
                        <p class="col-md-5">{{ $chart_form->trouble }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="trouble" value="{{ $chart_form->trouble }}" type="hidden" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="concern" class="col-md-5">目元・眉で気になる点</label>
                        <p class="col-md-5">{{ $chart_form->concern }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="concern" value="{{ $chart_form->concern }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="allergy" class="col-md-5">アレルギー</label>
                        <p class="col-md-5">{{ $chart_form->allergy }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="allergy" value="{{ $chart_form->allergy }}" type="hidden" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="record" class="col-md-5">今までの施術や手術のご経験</label>
                        <p class="col-md-5">{{ $chart_form->record }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="record" value="{{ $chart_form->record }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="body_concern" class="col-md-5">体調の問題</label>
                        <p class="col-md-5">{{ $chart_form->body_concern }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="body_concern" value="{{ $chart_form->body_concern }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="trigger" class="col-md-5">来店きっかけ</label>
                        <div class="col-md-5">
                            @foreach($chart_form->triggers as $trigger)
                            {{$trigger->trigger}}
                            <div class="col-md-5">
                                <input class="form-check-input" type="hidden" name="trigger[]" value="{{ $trigger->id}}">
                            </div>
                            @endforeach                            
                       </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5" for="comment">コメント</label>
                        <p class="col-md-5">{{ $chart_form->comment }}</p>
                     </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <div class="return-btn">
                                <a class="btn btn-primary" href={{ route('index') }}>一覧へもどる</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection