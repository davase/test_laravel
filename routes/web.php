<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//调用控制器方法
Route::get('Controller',[UserController::class,'Test']);

//测试
Route::get('Test',function (){
   echo "Hi 路由";
});

//match 指定访问的方法
Route::match(['get','post'],'match',function (){
   echo "match 路由";
});

//any 任意访问方法
Route::any('any',function (){
   echo 'any 路由';
});

//指定参数
Route::get('bixuan/{id}',function ($id){
    echo "可选".$id;
});

//可选参数
Route::get('kexuan/{id?}',function ($id="默认值"){
   echo "可选".$id;
});

//路由分组
Route::prefix('admin/admin1/admin2')->group(function (){
    Route::get('a',function (){
        return 'a';
    });
});





