@extends('layouts.admin')
@section('title', '管理者画面トップ')
@section('content')
<div class="container">
        <div class="row">
            <h2>顧客情報一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{ action('Admin\UserController@index') }}" method="get">
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
                                <th width="6%">ID</th>
                                <th width="15%">名前</th>
                                <th width="15%">なまえ</th>
                                <th width="16%">tel</th>
                                <th width="20%">email</th>
                                <th width="12%">カルテ</th>
                                <th width="8%">予約</th>
                                <th width="8%">削除</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th>{{ $user->id }}</th>
                                    <td>{{ \Str::limit($user->kanji_name, 100) }}</td>
                                    <td>{{ \Str::limit($user->hira_name, 100) }}</td>
                                    <td>{{ \Str::limit($user->tel, 100) }}</td>
                                    <td>{{ \Str::limit($user->email, 100) }}</td>
                                    <td>
                                        <div>
                                            <a class="btn btn-primary" href="{{ action('Admin\UserController@chart', ['id' => $user->id]) }}">カルテ</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a class="btn btn-secondary" href="{{ action('Admin\UserController@appointment', ['id' => $user->id]) }}">予約</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <a class="btn btn-secondary" href="{{ action('Admin\UserController@remove', ['id' => $user->id]) }}">削除</a>
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
