<?php

namespace App\Controller;

use App\Model\Post;

class PostController
{
    public $post;

    public function __construct()
    {
        $this->post = new Post;
    }

    public function index()
    {
        $posts = $this->post->all();
        $title = 'Post list';
        return view('post/index', compact('posts'), $title);
    }

    public function show($id)
    {
        $post = $this->post->find($id);
        return view('post/show', compact('post'));
    }

    public function create()
    {
        return view('post/create');
    }

    public function store()
    {
        $this->post->create($_POST);
        return redirect('post/index');
    }

    public function edit($id)
    {
        $post = $this->post->find($id);
        return view('post/edit', compact('post'));
    }

    public function update($id)
    {
        $this->post->update($id, $_POST);
        return redirect('post/index');
    }

    public function destroy($id)
    {
        $this->post->delete($id);
        return redirect('post/index');
    }
}
