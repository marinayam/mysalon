@extends('layouts.admin')
@section('title','ご来店きっかけ')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ご来店きっかけカテゴリー新規作成</h2>
                <form action="{{ action('Admin\TriggerController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">カテゴリー名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="trigger" value="{{ old('trigger') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="作成">
                </form>
            </div>
        </div>
    </div>
@endsection