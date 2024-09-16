<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UserID'    => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
                'auto_increment'=> TRUE
            ],
            'Username'       => [
                'type'          => 'varchar',
                'constraint'    => 255,
            ],
            'Password'       => [
                'type'          => 'varchar',
                'constraint'    => 255,
            ],
            'Email'       => [
                'type'          => 'varchar',
                'constraint'    => 255,
            ],
            'NamaLengkap'       => [
                'type'          => 'varchar',
                'constraint'    => 255,
            ],
            'Alamat'       => [
                'type'          => 'text',
            ],
        ]);
        $this->forge->addKey('UserID', TRUE);
        $this->forge->createTable('User'); 
    }

    public function down()
    {
        $this->forge->dropTable('User');
    
    }
}
