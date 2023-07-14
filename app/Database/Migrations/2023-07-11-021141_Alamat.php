<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alamat extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'              => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name_provinsi'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'code'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('provinsi', true);

        $this->forge->addField([
            'id'              => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'id_provinsi'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'name_kabupaten'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'type'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'code'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_provinsi', 'provinsi', 'id');
        $this->forge->createTable('kabupaten', true);

        $this->forge->addField([
            'id'              => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'id_provinsi'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'id_kabupaten'              => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'name_kecamatan'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'code'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_provinsi', 'provinsi', 'id');
        $this->forge->addForeignKey('id_kabupaten', 'kabupaten', 'id');
        $this->forge->createTable('kecamatan', true);

        $this->forge->addField([
            'id'              => ['type' => 'bigint', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'id_provinsi'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'id_kecamatan'              => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'id_kabupaten'              => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'name_kelurahan'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
            'code'             => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_provinsi', 'provinsi', 'id');
        $this->forge->addForeignKey('id_kabupaten', 'kabupaten', 'id');
        $this->forge->addForeignKey('id_kecamatan', 'kecamatan', 'id');
        $this->forge->createTable('kelurahan', true);
    }

    public function down()
    {
        $this->forge->dropTable('kelurahan', true);
        $this->forge->dropTable('kecamatan', true);
        $this->forge->dropTable('kabupaten', true);
        $this->forge->dropTable('provinsi', true);
    }
}
