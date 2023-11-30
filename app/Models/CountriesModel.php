<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Category;

class CountriesModel extends Model
{
    protected $table            = 'countries';
    protected $primaryKey       = 'id_country';
    protected $returnType       = Category::class;
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['name'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

}
