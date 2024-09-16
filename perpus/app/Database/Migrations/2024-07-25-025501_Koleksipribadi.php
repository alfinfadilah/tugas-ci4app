<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Koleksipribadi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KoleksiID'    => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
                'auto_increment'=> TRUE
            ],
            'UserID'       => [
                'type'          => 'INT',
                'constraint'    => 11,
                // 'unsigned'      => TRUE,
            ],
            'BukuID'       => [
                'type'          => 'INT',
                'constraint'    => 11,
                // 'unsigned'      => TRUE,
            ],
        ]);
        $this->forge->addKey('KoleksiID', TRUE);
        $this->forge->createTable('Koleksipribadi');
    }

    public function down()
    {
        $this->forge->dropTable('Koleksipribadi');
    }
}
