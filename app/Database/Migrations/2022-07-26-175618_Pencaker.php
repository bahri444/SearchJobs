<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pencaker extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id_pencaker' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,

            ],
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'constraint' => 11,
            ],
            'nm_lkp' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'fas_foto' => [
                'type' => 'VARCHAR',
                'constraint' => 40,
            ],
            'tgl_lhr' => [
                'type' => 'DATE'
            ],
            'jk' => [
                'type' => 'ENUM',
                'constraint' => ['laki-laki', 'perempuan']
            ],
            'usia' => [
                'type' => 'INT',
                'constraint' => 2
            ],
            'tlp' => [
                'type' => 'CHAR',
                'constraint' => 14,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'pend_ter' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'peng_ker' => [
                'type' => 'TEXT',
            ],
            'bid_keahlian' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'sertifikat' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'created_at' => [
                'type' => 'DATETIME'

            ],
            'updated_at' => [
                'type' => 'DATETIME'

            ],
        ]);

        // create primary key
        $this->forge->addKey('id_pencaker', TRUE);
        $this->forge->addForeignKey('user_id', 'users', 'user_id', 'cascade', 'cascade');

        // create table perusahaan
        $this->forge->createTable('pencaker');
    }

    public function down()
    {
        //delete table
        $this->forge->dropTable('pencaker');
    }
}
