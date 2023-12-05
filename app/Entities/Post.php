<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Post extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
		'published_at'
	];
	protected $casts   = [];

	protected function setSlug(string $title){
		$slug = mb_url_title($title, '-');
		$postModel = model('PostModel');

		while($postModel->where('slug', $slug)->find() != null){
			$slug = increment_string($slug, '_');
		}	
		$this->attributes['slug'] = $slug;
	}

	protected function getAuthor(){
		if(!empty($this->attributes['author'])){
			$uiModel = model('UsersInfoModel');
			return $uiModel->where('id_user', $this->attributes['author'])->first();
		}
		return $this;
	}

	public function getCategories(){
		$cpModel = model('Categoriesposts');
		return $cpModel->where('id_post', $this->id)->join('categories', 'categories.id = categories_posts.id_category')->findAll() ?? [];
	}

	public function getLink(){
		return base_url('covers/'. $this->cover);
	}

	public function getLinkArticle(){
		return base_url(route_to('article',$this->slug));
	}
}
