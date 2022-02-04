@extends('layouts.admin')
@section('title', 'マツエクメニュー一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>マツエクメニュー一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ExtensionController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\ExtensionController@index') }}" method="get">
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
                                <th width="50%">種類</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $extension)
                                <tr>
                                    <th>{{ $extension->id }}</th>
                                    <td>{{ \Str::limit($extension->extension, 100) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\ExtensionController@edit', ['id' => $extension->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\ExtensionController@delete', ['id' => $extension->id]) }}">削除</a>
                                        </div>
                                        <br>
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