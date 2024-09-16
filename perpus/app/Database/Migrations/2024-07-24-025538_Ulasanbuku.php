<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ulasanbuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UlasanID'    => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
                'auto_increment'=> TRUE
            ],
            'UserID'       => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsignet'      => TRUE,
            ],
            'BukuID'       => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsignet'      => TRUE,
            ],
            'Ulasan'       => [
                'type'          => 'text',
            ],
            'Rating'       => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsignet'      => TRUE,
            ],
        ]);
        $this->forge->addKey('UlasanID', TRUE);
        $this->forge->createTable('Ulasanbuku');
    }

    public function down()
    {
        $this->forge->dropTable('Ulasanbuku');
    }
}
