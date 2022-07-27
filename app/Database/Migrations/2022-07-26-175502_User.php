<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //

        $this->forge->addField([
            'id_user'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>true,
                'auto_increment'=>true,

            ],
            'username'=>[
                'type'=>'VARCHAR',
                'constraint'=>50,
            ],
            'password'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'level'=>[
                'type'=>'ENUM',
                'constraint'=>['admin','perusahaan','pencaker'],
            ],
            'created_at'=>[
                'type'=>'TIMESTAMP'
            ],
            'updated_at'=>[
                'type'=>'TIMESTAMP'
            ],
        ]);

        // create primary key
        $this->forge->addKey('id_user',TRUE);

        // create table perusahaan
        $this->forge->createTable('user');
    }


    public function down()
    {
        //delete
        $this->forge->dropTable('user');
    }
}
