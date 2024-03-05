<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\PageConroller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{id?}', function ($id=0) {
    return $id;
});
Route::get('/{year}/{month}/{day}/', function ($year, $month, $day) {
     $time = strtotime( $year."-".$month."-".$day );
     $date = date ("l", $time );
    return $date;
})-> where([
    'year' => '^[0-9]{4}$',
    'month' => '([1-9]|0[1-9]|1[0-2])$',
    'day' => '(0[1-9]|[1-2][0-9]|3[0-1])$'
]);
Route::get("/users/{user}", function ($user) {
    $users = [ 
        'user1' => 'city1', 
        'user2' => 'city2', 
        'user3' => 'city3', 
        'user4' => 'city4', 
        'user5' => 'city5'
       ] ;
       if (array_key_exists($user,$users))
       {
        return $users[$user];
       }
       else
       return 'Такого пользователя нет!!!';
});
Route::get('/pages/show/{id}/',[PageConroller::class, 'showOne']);
Route::get('/pages/all/',[PageConroller::class, 'showAll']);
Route::get('/show', [PostController::class, 'index']);

//10.1
Route::get('/method1', [MyController::class,'method1']);
Route::get('/method2', [MyController::class,'method2']);
Route::get('/method3', [MyController::class,'method3']);
//10.2
Route::get('/link/{title}/{content}', [MyController::class,'link']);
//10.3
Route::get('/user/{title}/{content} ', [MyController::class,'user']);