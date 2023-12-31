<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Posts extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks(); // desabilita llave foraneas
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '120',
                'null'       => false,
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '140',
                'null'       => false,
                'unique'     => true,
            ],
            'body' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'cover' => [
                'type'       => 'TEXT',
                'constraint' => '40',
                'null'       => false,
            ],
            'author' => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'null'           => true,
            ],
            'published_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('author', 'users', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('posts');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('posts');
    }
}
