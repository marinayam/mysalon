@extends('layouts.admin')
@section('title','パーマメニュー')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>パーマメニュー新規作成</h2>
                <form action="{{ action('Admin\PermController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-3">メニュー＆金額</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="perm" value="{{ old('perm') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="check-button">
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <a class="return" href={{ route('perm.index') }}><u>もどる</u></a>
                            </div>
                            <div class="btn-group ml-auto">
                                <input type="submit" class="btn btn-primary" value="作成">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection