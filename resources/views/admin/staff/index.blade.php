@extends('layouts.admin')
@section('title', '登録済みStaff一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Staff一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\StaffController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\StaffController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2"> 名前</label>
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
                                <th width="10%">ID</th>
                                <th width="20%">名前</th>
                                <th width="50%">自己紹介</th>
                                <th width="20%">写真</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff as $staff)
                                <tr>
                                    <th>{{ $staff->id }}</th>
                                    <td>{{ \Str::limit($staff->name, 100) }}</td>
                                    <td>{{ \Str::limit($staff->body, 250) }}</td>
                                    <td><img src="{{ asset('storage/image/' . $staff->image_path) }}"></td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\StaffController@edit', ['id' => $staff->id]) }}">編集</a>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="{{ action('Admin\StaffController@delete', ['id' => $staff->id]) }}">削除</a>
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