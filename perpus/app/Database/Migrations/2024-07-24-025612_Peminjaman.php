<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'PinjamanID'    => [
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
            'TanggalPeminjaman'       => [
                'type'          => 'date',
            ],
            'TanggalPembalian'       => [
                'type'          => 'date',
            ],
            'Rating'       => [
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
        ]);
        $this->forge->addKey('PinjamanID', TRUE);
        $this->forge->createTable('Pinjaman');
    }

    public function down()
    {
        $this->forge->dropTable('Pinjaman');
    }
}
