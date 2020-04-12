<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('index',compact('posts'));
    }

    public function create(){
        \request()->session()->forget(['name','description']);
        return view('create');
    }
    /**
     * Undocumented function
     *
     * @return void
     */
    public function store(){
        $validatedData = \request()->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);
        $post = new Post();
        $data = [
            'name' => \request('name'),
            'description' =>request('description')
        ];
        $post->fill($data)->save();

        return redirect()->route('index');
    }
    public function show(int $id){
        $post = Post::find($id);
        return view('show',compact('post'));
    }

    public function edit(int $id){
        $post = Post::find($id);
        \request()->session()->flash('name',$post->name);
        \request()->session()->flash('description',$post->description);
        return view('edit',compact('post'));
    }
    public function update(int $id){
        $post = Post::find($id);
        $data = [
            'name' => \request('name'),
            'description' =>request('description')
        ];
        $post->fill($data)->save();
        return redirect()->route('index');
    }
    public function delete(int $id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('index');
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
