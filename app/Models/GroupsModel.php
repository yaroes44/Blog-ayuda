<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupsModel extends Model
{
    protected $table            = 'groups';
    protected $primaryKey       = 'id_groups';
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = ['name_group'];
}