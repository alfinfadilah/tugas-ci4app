<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KategoribukuRelasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KategoriBukuID'=>[
                'type'  => 'INT',
                'constraint' => 11,
                'unsignet' => TRUE,
                'auto_increment'=> TRUE
            ],
            'KategoriID'       => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
            ],
        ]);
        $this->forge->addKey('KategoriBukuID', TRUE);
        $this->forge->createTable('Kategoribuku_Relasi');
    }

    public function down()
    {
        $this->forge->dropTable('Kategoribuku_Relasi');
    }
}
