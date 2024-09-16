<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategoribuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KategoriID'    =>[
                'type'              => 'INT',
                'constraint'        => 11,
                'unsignet'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'NamaKategori'       => [
                'type'          => 'varchar',
                'constraint'    => 255,
            ],
        ]);
        $this->forge->addKey('KategoriID', TRUE);
        $this->forge->createTable('Kategoribuku');
    }

    public function down()
    {
        $this->forge->dropTable('Kategoribuku');
    }
}
