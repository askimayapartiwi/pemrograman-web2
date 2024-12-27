<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHijabsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
            ],
            'merk' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'jenis' => [
                'type'  => 'VARCHAR',
                'constraint' => 150,
            ],
            'bahan' => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'contoh'    => [
                'type' => 'VARCHAR',
                'constraint' => 150,
            ],
            'harga'    => [
                'type' => 'VARCHAR',
                'constraint' => 16,
            ],
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('hijabs');
    }

    public function down()
    {
        $this->forge->dropTable('hijabs');
    }
}
