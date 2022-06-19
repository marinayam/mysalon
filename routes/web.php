<?php

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
Route::get('/', function() { return view('salon.index'); })->name('/');  // トップページ
Route::get('/service', function() { return view('salon.service'); })->name('service'); // 初めての方へ
Route::get('/perm', function() { return view('salon.menu.perm'); })->name('perm'); // パーマメニュー
Route::get('/extension', function() { return view('salon.menu.extension'); })->name('extension'); // マツエクメニュー
Route::get('/eyebrow', function() { return view('salon.menu.eyebrow'); })->name('eyebrow');  // 眉メニュー

// おすすめメニュー診断
Route::get('/match', function() { return view('salon.match.match'); })->name('match'); // 質問：まつ毛が下がっている
Route::get('/match2', function() { return view('salon.match.match2'); })->name('match2');  // 質問：汗をかきやすい
Route::get('/match3', function() { return view('salon.match.match3'); })->name('match3');  // 4択問題
Route::get('/match4', function() { return view('salon.match.match4'); })->name('match4');
Route::get('/answer1', function() { return view('salon.match.answer1'); })->name('answer1');  // 答え：ナチュラル
Route::get('/answer2', function() { return view('salon.match.answer2'); })->name('answer2');// 答え：ぱっちり
Route::get('/answer3', function() { return view('salon.match.answer3'); })->name('answer3');// 答え：ゴージャス&エレガント

// スタッフ紹介
Route::get('/staff', 'SalonController@index')->name('staff');

// お問い合わせフォーム
Route::get('/contact', 'ContactController@create')->name('contact.create'); //入力ページ
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');  //確認ページ
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send'); //送信完了ページ

// ログイン画面
Route::get('/register', function() { return view('auth.register'); })->name('register');  // アカウント作成

//パスワードリセット
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*
|--------------------------------------------------------------------------
| 2) User 要ログイン
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:user'], function() {
  // カルテ画面
  Route::get('chart/create', 'ChartController@add')->name('chart.create');
  Route::post('chart/create', 'ChartController@create')->name('chart.create');
  Route::post('chart/confirm', 'ChartController@confirm')->name('chart.confirm');
  Route::post('chart/send', 'ChartController@send')->name('chart.send');

  // 予約画面
  Route::get('appointment/create', 'AppointmentController@add')->name('appointment.create');
  Route::post('appointment/create', 'AppointmentController@create')->name('appointment.create');
  Route::get('appointment/confirm', 'AppointmentController@confirm')->name('appointment.confirm');
  Route::post('appointment/confirm', 'AppointmentController@confirm')->name('appointment.confirm');
  Route::post('appointment/send', 'AppointmentController@send')->name('appointment.send');
  Route::get('appointment/index', 'AppointmentController@index')->name('appointment.index');
});

/*
|--------------------------------------------------------------------------
| 3) Admin 管理者認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
  // 管理者画面
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login');
});


/*
|--------------------------------------------------------------------------
| 4) Admin 管理者要ログイン
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
  Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
  Route::get('home',      'Admin\HomeController@index')->name('admin.home');

  // 最初のページ
  // Route::get('salon/index', 'Admin\SalonController@index')->name('index');
  Route::get('salon/index', 'Admin\UserController@index')->name('index');
  Route::get('salon/chart', 'Admin\UserController@chart')->name('admin.chart.index');
  Route::get('salon/appointment', 'Admin\UserController@appointment')->name('admin.appointment.index');
  Route::get('salon/user/remove', 'Admin\UserController@remove')->name('admin.user.remove');

  // カルテ顧客情報
  Route::get('chart/index', 'Admin\ChartController@index')->name('admin.chart.index');
  Route::get('chart/detail', 'Admin\ChartController@detail');
  Route::get('chart/edit', 'Admin\ChartController@edit');
  Route::post('chart/edit', 'Admin\ChartController@update');
  Route::post('chart/edit', 'Admin\ChartController@delete');

  // カルテのご来店きっかけ編集
  Route::get('trigger/create', 'Admin\TriggerController@add');
  Route::post('trigger/create', 'Admin\TriggerController@create');
  Route::get('trigger/index', 'Admin\TriggerController@index')->name('admin.trigger.index');;
  Route::get('trigger/edit', 'Admin\TriggerController@edit');
  Route::post('trigger/edit', 'Admin\TriggerController@update');
  Route::get('trigger/delete', 'Admin\TriggerController@delete');

  // スタッフ紹介
  Route::get('staff/create', 'Admin\StaffController@add');
  Route::post('staff/create', 'Admin\StaffController@create');
  Route::get('staff/index', 'Admin\StaffController@index')->name('admin.staff.index');
  Route::get('staff/edit', 'Admin\StaffController@edit');
  Route::post('staff/edit', 'Admin\StaffController@update');
  Route::get('staff/delete', 'Admin\StaffController@delete');

  // ご予約情報
  Route::get('appointment/index', 'Admin\AppointmentController@add');
  Route::get('appointment/index', 'Admin\AppointmentController@index')->name('admin.appointment.index');
  Route::get('appointment/detail', 'Admin\AppointmentController@detail')->name('admin.appointment.detail');;
  Route::get('appointment/edit', 'Admin\AppointmentController@edit');
  Route::post('appointment/edit', 'Admin\AppointmentController@update');
  Route::get('appointment/delete', 'Admin\AppointmentController@delete');

  // パーマメニュー編集
  Route::get('perm/create', 'Admin\PermController@add');
  Route::post('perm/create', 'Admin\PermController@create');
  Route::get('perm/index', 'Admin\PermController@index')->name('admin.perm.index');;
  Route::get('perm/edit', 'Admin\PermController@edit');
  Route::post('perm/edit', 'Admin\PermController@update');
  Route::get('perm/delete', 'Admin\PermController@delete');

  // マツエクメニュー編集
  Route::get('extension/create', 'Admin\ExtensionController@add');
  Route::post('extension/create', 'Admin\ExtensionController@create');
  Route::get('extension/index', 'Admin\ExtensionController@index')->name('admin.extension.index');;
  Route::get('extension/edit', 'Admin\ExtensionController@edit');
  Route::post('extension/edit', 'Admin\ExtensionController@update');
  Route::get('extension/delete', 'Admin\ExtensionController@delete');

  // 眉メニュー編集
  Route::get('eyebrow/create', 'Admin\EyebrowController@add');
  Route::post('eyebrow/create', 'Admin\EyebrowController@create');
  Route::get('eyebrow/index', 'Admin\EyebrowController@index')->name('admin.eyebrow.index');;
  Route::get('eyebrow/edit', 'Admin\EyebrowController@edit');
  Route::post('eyebrow/edit', 'Admin\EyebrowController@update');
  Route::get('eyebrow/delete', 'Admin\EyebrowController@delete');

  // オプションメニュー編集
  Route::get('option/create', 'Admin\OptionController@add');
  Route::post('option/create', 'Admin\OptionController@create');
  Route::get('option/index', 'Admin\OptionController@index')->name('admin.option.index');;
  Route::get('option/edit', 'Admin\OptionController@edit');
  Route::post('option/edit', 'Admin\OptionController@update');
  Route::get('option/delete', 'Admin\OptionController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/detail', 'HomeController@detail');
