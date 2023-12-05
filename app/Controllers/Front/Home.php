<?php namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Home extends BaseController
{

	public function index()
	{
		$post = model('PostModel');
		helper('text');
		return view('Front/Home', [
			'posts' => $post->published()->orderBy('published_at', 'desc')->paginate(2),
			'pager' => $post->pager,
		]);
		
	}

	public function article($slug){
		$pModel = model('PostModel');
		if(!$post = $pModel->where('slug',$slug)->first()){
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}

		return view('Front/Article',['post' => $post]);

	}

	public function filter(array $args){

		$post = model('PostModel');
		helper('text');
		return view('Front/Filter', [
			'posts' => $post->getPostsByCategory($args['category'])
							->findAll($args['limit'] ?? 0)
		]);
	}

}

