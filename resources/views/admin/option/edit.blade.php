@extends('layouts.admin')
@section('title', 'オプションメニューの編集')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>オプションメニューの編集</h2>
                <form action="{{ action('Admin\OptionController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-3" for="option">メニュー＆金額</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="option" value="{{ $option_form->option }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $option_form->id }}">
                            {{ csrf_field() }}
                            <div class="check-button">
                                <div class="btn-toolbar">
                                    <div class="btn-group">
                                        <a class="return" href={{ route('option.index') }}><u>もどる</u></a>
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