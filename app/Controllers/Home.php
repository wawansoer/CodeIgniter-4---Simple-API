<?php

namespace App\Controllers;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Home extends BaseController
{
    use ResponseTrait;

    protected $hobiModel = 'App\Models\Hobi';
    protected $format    = 'json';

    public function index()
    {
        $response = [
            'status' => 200,
            'message' => "This is CodeIgniter API",
        ];
        return $this->respondCreated($response);
    }
}
