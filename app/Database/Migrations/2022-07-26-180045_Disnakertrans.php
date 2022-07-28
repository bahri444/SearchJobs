<?php

namespace App\Database\Migrations;


namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Disnakertrans extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
            'id_peg'=>[
                'type'=>'INT',
                'constraint'=>10,
                'unsigned'=>true,
                'auto_increment'=>true

            ],
            'nip'=>[
                'type'=>'CHAR',
                'constraint'=>20,

            ],
            'nama'=>[
                'type'=>'VARCHAR',
                'constraint'=>50,
            ],
            'jk'=>[
                'type'=>'ENUM',
                'constraint'=>['laki-laki','perempuan']
            ],
            'alamat'=>[
                'type'=>'VARCHAR',
                'constraint'=>50,
            ],
            'jabatan'=>[
                'type'=>'VARCHAR',
                'constraint'=>20,
            ],
            'sertifikat'=>[
                'type'=>'VARCHAR',
                'constraint'=>20,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);

        // create primary key
        $this->forge->addKey('id_peg',TRUE);

        // create table perusahaan
        $this->forge->createTable('disnakertrans');
    }

    public function down()
    {
        //delete table
        $this->forge->dropTable('disnakertrans');
    }
}
