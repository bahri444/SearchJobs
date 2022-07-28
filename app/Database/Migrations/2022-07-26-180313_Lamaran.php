<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use PHPUnit\Framework\Constraint\Constraint;

class Lamaran extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_lamaran'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'id_pencaker'=>[
                'type'=>'INT',
                'constraint'=>11,                
            ],
            'id_loker'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'berkas'=>[
                'type'=>'VARCHAR',
                'constraint'=>20,

            ],
            'tgl_lamar'=>[
                'type'=>'DATE',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp',
        ]);
        // create primary key
        $this->forge->addKey('id_lamaran',TRUE);

        // create table perusahaan
        $this->forge->createTable('lamaran');
    }

    public function down()
    {
        //
        $this->forge->dropTable('lamaran');
    }
}
