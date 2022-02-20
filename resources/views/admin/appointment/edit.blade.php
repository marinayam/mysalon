@extends('layouts.admin')
@section('title', '予約情報の編集')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>予約情報の編集</h2>
                <form action="{{ action('Admin\AppointmentController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="date">日にち</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="date" value="{{ $appointment_form->date }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="time">時間</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="time" value="{{ $appointment_form->time }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="perm">パーマ</label>
                        <div class="col-md-10">
                            @if ($appointment_form->perms != null)
                                @foreach($perms as $perm)
                                <label class="col-md-12 form-check-label">
                                    <input class="form-check-input" type="checkbox" name="perm[]" value="{{ $perm->id}}"  {{ in_array($perm->id,$selected_perms)? 'checked' : ''}}>
                                    {{$perm->perm}}
                                </label>
                                @endforeach    
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="extension">マツエク</label>
                        <div class="col-md-10">
                            @if ($appointment_form->extensions != null)
                                @foreach($extensions as $extension)
                                <label class="col-md-12 form-check-label">
                                    <input class="form-check-input" type="checkbox" name="extension[]" value="{{ $extension->id}}"  {{ in_array($extension->id,$selected_extensions)? 'checked' : ''}}>
                                    {{$extension->extension}}
                                </label>
                                @endforeach  
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="eyebrow">眉</label>
                        <div class="col-md-10">
                            @if ($appointment_form->eyebrows != null)
                                @foreach($eyebrows as $eyebrow)
                                <label class="col-md-12 form-check-label">
                                    <input class="form-check-input" type="checkbox" name="eyebrow[]" value="{{ $eyebrow->id}}"  {{ in_array($eyebrow->id,$selected_eyebrows)? 'checked' : ''}}>
                                    {{$eyebrow->eyebrow}}
                                </label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="option">オプション</label>
                        <div class="col-md-10">
                            @if ($appointment_form->options != null)
                                @foreach($options as $option)
                                <label class="col-md-12 form-check-label">
                                    <input class="form-check-input" type="checkbox" name="option[]" value="{{ $option->id}}"  {{ in_array($option->id,$selected_options)? 'checked' : ''}}>
                                    {{$option->option}}
                                </label>
                                @endforeach    
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="comment">コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="20">{{ $appointment_form->comment }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $appointment_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection