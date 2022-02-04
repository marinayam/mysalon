@extends('layouts.admin')
@section('title', '顧客情報一覧')
@section('content')
<div class="container">
        <div class="row">
            <h2>顧客情報一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\ChartController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="1%">ID</th>
                                <th width="10%">名前</th>
                                <th width="12%">なまえ</th>
                                <th width="10%">tel</th>
                                <th width="10%">email</th>
                                <th width="10%">きっかけ</th>
                                <th width="50%">コメント</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($charts as $chart)
                                <tr>
                                    <th>{{ $chart->id }}</th>
                                    <td>{{ \Str::limit($chart->name01, 100) }}</td>
                                    <td>{{ \Str::limit($chart->name02, 100) }}</td>
                                    <td>{{ \Str::limit($chart->tel, 100) }}</td>
                                    <td>{{ \Str::limit($chart->email, 100) }}</td>
                                    <td>
                                      @foreach($chart->triggers as $trigger)
                                        <div>{{$trigger->trigger}}</div>
                                      @endforeach
                                    </td>
                                    <td>{{ \Str::limit($chart->comment, 500) }}</td>
                                    <td>
                                        <div>
                                            <a class="btn btn-primary" href="{{ action('Admin\ChartController@edit', ['id' => $chart->id]) }}">編集</a>
                                        </div>
                                        <br>
                                        <div>
                                            <a class="btn btn-secondary" href="{{ action('Admin\ChartController@detail', ['id' => $chart->id]) }}">詳細</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
