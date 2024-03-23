<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function task13_2_2() //13.2 пукнт 2
    {
         DB::table('users')
            ->insert([
                'login'=>'qwerty',
                'password'=>'1234',
                'email'=>'qwer@gmail.com',
            ]);
    }
    public function task13_2_3() //13.2 пукнт 3
    {
        DB::table('users')
            ->insert([
                [
                    'login'=>'log1',
                    'password'=>'12546541',
                    'email'=>'qwe1@gmail.com',
                ],
                [
                    'login'=>'log2',
                    'password'=>'1234564',
                    'email'=>'qwe2@gmail.com',
                ],
                [
                    'login'=>'log3',
                    'password'=>'197897234',
                    'email'=>'qwe3@gmail.com',
                ],
            ]);
    }
    public function task13_2_4() //13.2 пукнт 4
    {
        DB::table('users')
            ->where('login','qwerty' )
            ->update([
                'login'=>'asdfg',
                'email'=>'rqwe@mail.ru'
            ]);
    }
    public function task13_2_5() //13.2 пукнт 5
    {
        DB::table('users')
            ->where('login','log2')->delete();
    }
}
