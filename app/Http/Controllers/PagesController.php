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
        $validatedData = request()->validate([
            'name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);
        $post = new Post();
        $data = [
            'name' => \request('name'),
            'description' =>request('description'),
            'completed' => false
        ];
        $post->fill($data)->save();
        session()->flash('success','created successfully!');

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
        $validatedData = request()->validate([
            'name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);
        $post = Post::find($id);
        $data = [
            'name' => \request('name'),
            'description' =>request('description')
        ];
        $post->fill($data)->save();
        session()->flash('success','updated successfully!');
        return redirect()->route('index');
    }
    public function delete(int $id){
        $post = Post::find($id);
        $post->delete();
        session()->flash('success','deleted successfully!');
        return redirect()->route('index');
    }

    public function completed(int $id)
    {
        $post = Post::find($id);
        $post->completed = true;
        $post->save();

        session()->flash('success','completed successfully!');
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
