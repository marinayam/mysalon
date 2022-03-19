@extends('layouts.front')
@section('title', '予約一覧')
@section('content')
<div class="container">
        <div class="row">
            <h2>@if($username){{$username}}様@endif　予約一覧</h2>
        </div>
        <br>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10%">日にち</th>
                                <th width="10%">時間</th>
                                <th width="10%">パーマ</th>
                                <th width="10%">マツエク</th>
                                <th width="10%">眉</th>
                                <th width="10%">オプション</th>
                                <th width="10%">コメント</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($appointments as $appointment)
                            @php
                              $perm = count($appointment->perms) ? $appointment->perms->first()->perm : "";
                              $extension = count($appointment->extensions) ? $appointment->extensions->first()->extension : "";
                              $eyebrow = count($appointment->eyebrows) ? $appointment->eyebrows->first()->eyebrow : "";
                              $option = count($appointment->options) ? $appointment->options->first()->option : "";
                            @endphp
                                <tr>
                                    <td>{{ $appointment->date }}</td>
                                    <td>{{ \Str::limit($appointment->time, 100) }}</td>
                                    <td>{{ \Str::limit($perm, 15) }}</td>
                                    <td>{{ \Str::limit($extension, 15) }}</td>
                                    <td>{{ \Str::limit($eyebrow, 15) }}</td>
                                    <td>{{ \Str::limit($option, 15) }}</td>
                                    <td>{{ \Str::limit($appointment->comment, 100) }}</td>
                                    <td>
                                        <div>
                                            <a class="btn btn-primary" href="{{ action('HomeController@detail', ['id' => $appointment->id]) }}">詳細</a>
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
