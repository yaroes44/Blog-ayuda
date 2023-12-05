<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Entities\Post;

class Posts extends BaseController{
    
    public function index(){
        return view('Admin/posts');
    }
    
    public function create(){
        $cModel = model('CategoriesModel');

        return view('Admin/posts_create',[
            'categories'  => $cModel->findAll()
        ]);
    }
    
    public function store(){
        if(!$this->validate([
            'title' => 'required',
            'body' => 'required',
            'published_at' => 'required|valid_date',
            'categories.*' => 'permit_empty|is_not_unique[categories.id]',
            'cover' => 'uploaded[cover]|is_image[cover]'
        ])){
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('cover');

        $post = new Post($this->request->getPost());
        $post->slug = $this->request->getVar('title');
        $post->author = session()->id_user;
        $post->cover = $file->getRandomName();

        $postModel = model('PostModel');
        $postModel->assignCategories($this->request->getVar('categories'));
        $postModel->insert($post);

        $file->store('covers/', $post->cover);

        return redirect()->route('posts')->with('msg', [
            'type' => 'success',
            'body' => 'El artículo fue guardado correctamente.'
        ]);        

    }

}