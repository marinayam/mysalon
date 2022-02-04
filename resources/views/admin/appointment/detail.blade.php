@extends('layouts.admin')
@section('title', '予約情報の詳細')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>予約情報の詳細</h2>
                <form action="{{ action('Admin\AppointmentController@detail') }}" method="get" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label for="name01" class="col-md-5">名前(漢字)</label>
                        <p class="col-md-5">{{ $appointment_form->name01 }}</p>
                        <div class="col-md-10">
                            <input class="form-control" value="{{ $appointment_form->name01 }}" type="hidden" name="name01" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name02" class="col-md-5">名前(ふりがな)</label>
                        <p class="col-md-5">{{ $appointment_form->name02 }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="name02" value="{{ $appointment_form->name02 }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tel" class="col-md-5">電話番号</label>
                        <p class="col-md-5">{{ $appointment_form->tel }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="tel" value="{{ $appointment_form->tel }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-5">メールアドレス</label>
                        <p class="col-md-5">{{ $appointment_form->email }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="email" value="{{ $appointment_form->email }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-5">日にち</label>
                        <p class="col-md-5">{{ $appointment_form->date }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="date" value="{{ $appointment_form->date }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="time" class="col-md-5">時間</label>
                        <p class="col-md-5">{{ $appointment_form->time }}</p>
                        <div class="col-md-10">
                            <input class="form-control" name="time" value="{{ $appointment_form->time }}" type="hidden">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="perm" class="col-md-5">まつ毛パーマ</label>
                        <div class="col-md-5">
                            @if ($appointment_form->perms != null)
                                @foreach($appointment_form->perms as $perm)
                                    <p>{{$perm->perm}}</p>
                                 @endforeach
                            @endif
                       </div>
                    </div>
                    <div class="form-group row">
                        <label for="extension" class="col-md-5">マツエク</label>
                        <div class="col-md-5">
                            @if ($appointment_form->extensions != null)
                                @foreach($appointment_form->extensions as $extension)
                                    <p>{{$extension->extension}}</p>
                                 @endforeach
                            @endif
                       </div>
                    </div>
                    <div class="form-group row">
                        <label for="eyebrow" class="col-md-5">眉</label>
                        <div class="col-md-5">
                             @if ($appointment_form->eyebrows != null)
                                @foreach($appointment_form->eyebrows as $eyebrow)
                                    <p>{{$eyebrow->eyebrow}}</p>
                                 @endforeach
                            @endif
                       </div>
                    </div>
                    <div class="form-group row">
                        <label for="option" class="col-md-5">オプション</label>
                        <div class="col-md-5">
                            @if ($appointment_form->options != null)
                                @foreach($appointment_form->options as $option)
                                    <p>{{$option->option}}</p>
                                 @endforeach
                            @endif
                       </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5" for="comment">コメント</label>
                        <p class="col-md-5">{{ $appointment_form->comment }}</p>
                     </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <div class="return-btn">
                                <a class="btn btn-primary" href={{ route('appointment.index') }}>一覧へもどる</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection