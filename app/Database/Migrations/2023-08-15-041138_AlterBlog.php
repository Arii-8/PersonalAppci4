<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterBlog extends Migration
{
    protected $DBGroup = 'other1'; // Set the database connection group
    public function up()
    {
        // menambahkan kolom pada tabel blog
        $this->forge->addColumn('blog', [
			'slug VARCHAR(100) UNIQUE'
		]);
    }

    public function down()
    {
        $this->forge->dropColumn('blog', 'slug');
    }
}
