<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCreatedAtToAbsensi extends Migration
{
    public function up()
    {
        $this->forge->addColumn('absensi', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('absensi', 'created_at');
    }
}
