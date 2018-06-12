<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
  if (\Cache::has('test')) {
    echo '存在chche,读取'.'<br />';
    echo \Cache::get('test');
  } else{
    echo '不存在cache,现在创建'.'<br />';
    $time = \Carbon\Carbon::now()->addMinutes(10);
    $redis = \Cache::add('test', '我是缓存资源', $time);
    echo \Cache::get('test');
  }
});

Route::get('/view',function(){
	echo 'view page' . PHP_EOL;
});
