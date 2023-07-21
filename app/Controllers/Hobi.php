<?php
namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use SebastianBergmann\CliParser\Exception;
//pemanggilan entity hobi
use App\Entities\HobiEntity;

class Hobi extends ResourceController
{
    use ResponseTrait;
    protected $hobiModel = 'App\Models\Hobi';
    protected $format = 'json';
    public function __construct()
    {
        // pemanggilan helper 
        helper(['response_helper']);
    }
    public function index()
    {
        try {
            $hobi = new $this->hobiModel();
            // get data
            $hobis = $hobi->findAll();
            // compose respond using helper
            $response = response_helper(200, 'success', $hobis);
            // the response like this below
            //  {
            //     "status": 200,
            //     "message": "success",
            //     "data": [
            //         {
            //             "id": "1", --> this casting to string using entity
            //             "nama": 0, --> this casting to int using entity
            //             "hobi": "aasds"
            //         },
            //     ]
            // }

            return $this->respond($response);

        } catch (Exception $e) {
            return response_helper(500, 'error', $e->getMessage());
        }
    }

    public function create()
    {

        $hobi = new $this->hobiModel();
        $data = [
            'hobi' => $this->request->getVar('hobi'),
            'nama' => $this->request->getVar('nama'),
        ];

        if ($hobi->save($data)) {
            $response = response_helper(201, 'success', $data);
            return $this->respondCreated($response);
        } else {
            return $this->fail($hobi->errors());
        }

    }

    public function update($id = null)
    {
        $hobi = new $this->hobiModel();

        //validate id 

        $existingRecord = $hobi->find($id);
        if (!$existingRecord) {
            return $this->failNotFound('Record not found');
        }

        $data = [
            'hobi' => $this->request->getVar('hobi'),
            'nama' => $this->request->getVar('nama'),
        ];

        // prepare save data
        if ($hobi->update($id, $data)) {

            $response = response_helper(201, 'success', $data);
            return $this->respondCreated($response);

        } else {

            return $this->fail($hobi->errors());
        }
    }

    public function delete($id = null)
    {
        $hobi = new $this->hobiModel();

        //validate id 

        $existingRecord = $hobi->find($id);
        if (!$existingRecord) {
            return $this->failNotFound('Record not found');
        }

        // prepare save data
        if ($hobi->delete($id)) {

            $response = response_helper(201, 'success', '');
            return $this->respondDeleted($response);

        } else {

            return $this->fail($hobi->errors());
        }
    }
}
?>