<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Perusahaan extends Migration
{
    public function up()
    {
        //table perusahaan
        $this->forge->addField([
            'id_prshn' => [
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
            'nm_prshn' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'tlp' => [
                'type' => 'CHAR',
                'constraint' => 14,
            ],
            'logo' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'srt_izin' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'strk_organis' => [
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
        $this->forge->addKey('id_prshn', TRUE);
        $this->forge->addForeignKey('user_id', "users", "user_id", "cascade", "cascade");

        // create table perusahaan
        $this->forge->createTable('perusahaan');
    }

    public function down()
    {
        //delete table perusahaan
        $this->forge->dropTable('perusahaan');
    }
}
