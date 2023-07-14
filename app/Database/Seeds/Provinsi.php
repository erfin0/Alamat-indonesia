<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Provinsi extends Seeder
{
    public function run()
    {
        $Provinsi = [
            [
                "name_provinsi" => "Aceh (NAD)",
                "id" => 11,
                "code" => 11
            ],
            [
                "name_provinsi" => "Bali",
                "id" => 51,
                "code" => 51
            ],
            [
                "name_provinsi" => "Banten",
                "id" => 36,
                "code" => 36
            ],
            [
                "name_provinsi" => "Bengkulu",
                "id" => 17,
                "code" => 17
            ],
            [
                "name_provinsi" => "DI Yogyakarta",
                "id" => 34,
                "code" => 34
            ],
            [
                "name_provinsi" => "DKI Jakarta",
                "id" => 31,
                "code" => 31
            ],
            [
                "name_provinsi" => "Gorontalo",
                "id" => 75,
                "code" => 75
            ],
            [
                "name_provinsi" => "Jambi",
                "id" => 15,
                "code" => 15
            ],
            [
                "name_provinsi" => "Jawa Barat",
                "id" => 32,
                "code" => 32
            ],
            [
                "name_provinsi" => "Jawa Tengah",
                "id" => 33,
                "code" => 33
            ],
            [
                "name_provinsi" => "Jawa Timur",
                "id" => 35,
                "code" => 35
            ],
            [
                "name_provinsi" => "Kalimantan Barat",
                "id" => 61,
                "code" => 61
            ],
            [
                "name_provinsi" => "Kalimantan Selatan",
                "id" => 63,
                "code" => 63
            ],
            [
                "name_provinsi" => "Kalimantan Tengah",
                "id" => 62,
                "code" => 62
            ],
            [
                "name_provinsi" => "Kalimantan Timur",
                "id" => 64,
                "code" => 64
            ],
            [
                "name_provinsi" => "Kalimantan Utara",
                "id" => 65,
                "code" => 65
            ],
            [
                "name_provinsi" => "Kepulauan Bangka Belitung",
                "id" => 19,
                "code" => 19
            ],
            [
                "name_provinsi" => "Kepulauan Riau",
                "id" => 21,
                "code" => 21
            ],
            [
                "name_provinsi" => "Lampung",
                "id" => 18,
                "code" => 18
            ],
            [
                "name_provinsi" => "Maluku",
                "id" => 81,
                "code" => 81
            ],
            [
                "name_provinsi" => "Maluku Utara",
                "id" => 82,
                "code" => 82
            ],
            [
                "name_provinsi" => "Nusa Tenggara Barat (NTB)",
                "id" => 52,
                "code" => 52
            ],
            [
                "name_provinsi" => "Nusa Tenggara Timur (NTT)",
                "id" => 53,
                "code" => 53
            ],
            [
                "name_provinsi" => "Papua",
                "id" => 91,
                "code" => 91
            ],
            [
                "name_provinsi" => "Papua Barat",
                "id" => 92,
                "code" => 92
            ],
            [
                "name_provinsi" => "Papua Pegunungan",
                "id" => 95,
                "code" => 95
            ],
            [
                "name_provinsi" => "Papua Selatan",
                "id" => 93,
                "code" => 93
            ],
            [
                "name_provinsi" => "Papua Tengah",
                "id" => 94,
                "code" => 94
            ],
            [
                "name_provinsi" => "Riau",
                "id" => 14,
                "code" => 14
            ],
            [
                "name_provinsi" => "Sulawesi Barat",
                "id" => 76,
                "code" => 76
            ],
            [
                "name_provinsi" => "Sulawesi Selatan",
                "id" => 73,
                "code" => 73
            ],
            [
                "name_provinsi" => "Sulawesi Tengah",
                "id" => 72,
                "code" => 72
            ],
            [
                "name_provinsi" => "Sulawesi Tenggara",
                "id" => 74,
                "code" => 74
            ],
            [
                "name_provinsi" => "Sulawesi Utara",
                "id" => 71,
                "code" => 71
            ],
            [
                "name_provinsi" => "Sumatera Barat",
                "id" => 13,
                "code" => 13
            ],
            [
                "name_provinsi" => "Sumatera Selatan",
                "id" => 16,
                "code" => 16
            ],
            [
                "name_provinsi" => "Sumatera Utara",
                "id" => 12,
                "code" => 12
            ]
        ];
        $this->db->table('provinsi')->insertBatch($Provinsi);
       
    }
}
