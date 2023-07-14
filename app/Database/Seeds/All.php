<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class All extends Seeder
{
    public function run()
    {  
       $this->call('provinsi');
       $this->call('kabupaten');
       $this->call('kecamatan');
       $this->call('kelurahan');
       $this->call('kelurahan1');

    }
}
