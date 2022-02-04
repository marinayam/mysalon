@extends('layouts.admin')
@section('title', 'マツエクメニューの編集')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>マツエクメニューの編集</h2>
                <form action="{{ action('Admin\ExtensionController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-3" for="extension">メニュー＆金額</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="extension" value="{{ $extension_form->extension }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $extension_form->id }}">
                            {{ csrf_field() }}
                            <div class="check-button">
                                <div class="btn-toolbar">
                                    <div class="btn-group">
                                        <a class="return" href={{ route('extension.index') }}><u>もどる</u></a>
                                    </div>
                                    <div class="btn-group ml-auto">
                                        <input type="submit" class="btn btn-primary" value="更新">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection