<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Post;

class PostModel extends Model
{
	protected $table                = 'posts';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $returnType           = Post::class;
	protected $useSoftDelete        = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['title','slug','body','cover','author','published_at'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Callbacks
	protected $allowCallbacks       = true;
	protected $afterInsert          = ['storeCategories'];

	protected $categories = [];

	public function published(){
		$this->where('published_at <=', date('Y-m-d H:i:s'));
		return $this;
	}

	protected function storeCategories(array $data){
		if(!empty($this->categories)){
			$cpModel = model('Categoriesposts');
			$cats = [];
			foreach($this->categories as $v){ // cats es un arreglo de categories 
				$cats[] = [
					'id_category' => $v,
					'id_post' => $data['id']
				];
			}
			$cpModel->insertBatch($cats);
		}
		return $data;
	}

	public function assignCategories(array $categories){ //listado de categorias
		$this->categories = $categories;
	}

	public function getPostsByCategory(string $category){
		return $this
			->select('posts.*')
			->join('categories_posts', 'posts.id = categories_posts.id_post')
			->join('categories', 'categories.id = categories_posts.id_category')
			->where('categories.name', $category);

	}

}
