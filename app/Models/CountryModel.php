<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Country;
use Faker\Generator;

class CountryModel extends Model{

    protected $table      = 'countries';
    protected $primaryKey = 'id_country';
    protected $allowedFields = ['name'];
    protected $useTimestamps = true;
    protected $returnType = Country::class;


    public function fake(Generator &$faker){
        return [
            'name' => $faker->country
        ];
    }

}