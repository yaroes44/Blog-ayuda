<?php namespace App\Models;

use CodeIgniter\Model;

class CountriesModel extends Model
{
    protected $table      = 'countries';
    protected $primaryKey = 'id_country';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}