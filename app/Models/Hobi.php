<?php

namespace App\Models;

use CodeIgniter\Model;

class Hobi extends Model
{
  protected $DBGroup = 'default';
  protected $table = 'hobi';
  protected $returnType = \App\Entities\HobiEntity::class;
  protected $useSoftDeletes = false;
  protected $protectFields = true;
  protected $allowedFields = ['nama', 'hobi'];

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat = 'datetime';
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

  // Validation
  protected $validationRules = [
    'nama' => 'required',
    'hobi' => 'required'
  ];
  protected $validationMessages = [
    'nama' => ['required' => 'Nama tidak boleh kosong'],
    'hobi' => ['required' => 'Hobi tidak boleh kosong'],
  ];

  protected $skipValidation = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks = true;
  protected $beforeInsert = [];
  protected $afterInsert = [];
  protected $beforeUpdate = [];
  protected $afterUpdate = [];
  protected $beforeFind = [];
  protected $afterFind = [];
  protected $beforeDelete = [];
  protected $afterDelete = [];
}