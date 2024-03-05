<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function method1()
    {
        $title = '1 заголовок';
        $content = '1 контент';
    return view('method', ['title' => $title, 'content'=>$content  ]);
    }
    public function method2()
    {
        $title = '2 заголовок';
        $content = '2 контент';
    return view('method', ['title'=>$title, 'content'=>$content  ]);
    }
    public function method3()
    {
        $title = '3 заголовок';
        $content = '3 контент';
    return view('method', ['title'=>$title, 'content'=>$content ]);
    }
    public function link ($title, $content)
    {
        $links =[
            [
                'text' => 'text1',
                'href' => 'href1',
            ],
            [
                'text' => 'text2',
                'href' => 'href2',
            ],
            [
                'text' => 'text3',
                'href' => 'href3',
            ],
            ];
            return view ('link', compact('links', 'title', 'content'));
    }
    public function user ($title, $content)
    {
        $users =[
            [
                'name' => 'user1',
                'surname' => 'surname1',
                'banned'=>true,
            ],
            [
                'name' => 'user2',
                'surname' => 'surname2',
                'banned'=>false,
            ],
            [
                'name' => 'user3',
                'surname' => 'surname3',
                'banned'=>true,
            ],
            [
                'name' => 'user4',
                'surname' => 'surname4',
                'banned'=>false,
            ],
            [
                'name' => 'user5',
                'surname' => 'surname5',
                'banned'=>false,
            ],
            ];
            return view ('users', compact('users', 'title', 'content'));
    }
    
}
