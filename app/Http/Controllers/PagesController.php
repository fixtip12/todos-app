<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome')->with([
                    'foo'=> 'foooo',
                    'tasks'=> ['some tasks','hello','こんにいてゃ']
                ]);
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }

    public function table(){
        $data = [
            'あかね',
            '髪口',
            'ちんこ'
        ];
        return view('table')->with([
            'table' => $data,
            'test'=> 'test'
        ]);
    }
}
