<?php
namespace App\Entities;

use CodeIgniter\Entity\Entity;

class HobiEntity extends Entity
{
    protected $attributes = [
        "id" => null,
        "nama" => null,
        "hobi" => null,
    ];
    protected $casts = [
        'id' => 'string',
        "nama" => "int"
    ];

}
?>