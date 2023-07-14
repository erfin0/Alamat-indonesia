<?php

namespace App\Controllers;

use App\Models\KabupatenModel;
use App\Models\KecamatanModel;
use App\Models\KelurahanModel;
use App\Models\ProvinsiModel;

use CodeIgniter\API\ResponseTrait;

use App\Controllers\BaseController;

class Wilayah extends BaseController
{
    use ResponseTrait;
    protected $KabupatenModel;
    protected $KecamatanModel;
    protected $KelurahanModel;
    protected $ProvinsiModel;

    public function __construct()
    {
        $this->KabupatenModel = new KabupatenModel();
        $this->KecamatanModel = new KecamatanModel();
        $this->KelurahanModel = new KelurahanModel();
        $this->ProvinsiModel  = new ProvinsiModel();
    }

    public function Kabupaten($id_provinsi = null, $id = null)
    {
        $where = ['id_provinsi' => $id_provinsi];
        $data = $this->KabupatenModel->where($where)->find($id);
        if ($data) {
            return $this->respond(["data"=>$data]);
        }
        return $this->failNotFound();
    }
    public function Kecamatan($id_provinsi = null, $id_kabupaten = null, $id = null)
    {
        $where = [
            'id_provinsi' => $id_provinsi,
            'id_kabupaten' =>  $id_kabupaten
        ];
        $data = $this->KecamatanModel->where($where)->find($id);
        if ($data) {
            return $this->respond(["data"=>$data]);
        }
        return $this->failNotFound();
    }
    public function Kelurahan($id_provinsi = null, $id_kabupaten = null,$id_kecamatan=null, $id = null)
    {
        $where = [
            'id_provinsi' => $id_provinsi,
            'id_kabupaten' =>  $id_kabupaten,
            'id_kecamatan' => $id_kecamatan
        ];
        $data = $this->KelurahanModel->where($where)->find($id);
        if ($data) {
            return $this->respond(["data"=>$data]);
        }
        return $this->failNotFound();
    }
    public function Provinsi($id = null)
    {
        $data = $this->ProvinsiModel->find($id);
        if ($data) {
            return $this->respond(["data"=>$data]);
        }
        return $this->failNotFound();
    }
}
