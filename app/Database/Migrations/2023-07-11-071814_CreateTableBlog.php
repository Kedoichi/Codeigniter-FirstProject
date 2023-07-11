<?php

use CodeIgniter\Database\Migration;

class CreateBlogTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'item_order' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'is_featured' => [
                'type' => 'TINYINT',
                'constraint' => 1,
            ],
            'is_deleted' => [
                'type' => 'TINYINT',
                'constraint' => 1,
            ],
            'by_user' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'is_active' => [
                'type' => 'TINYINT',
                'constraint' => 1,
            ],
            'reg_time' => [
                'type' => 'TIMESTAMP',
            ],
            'featured' => [
                'type' => 'TINYINT',
                'constraint' => 1,
            ],
            'image_1' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'image_2' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'image_3' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'image_4' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'image_5' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'image_6' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'heading_1' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'paragraph_1' => [
                'type' => 'TEXT',
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'short_paragraph' => [
                'type' => 'TEXT',
            ],
            'updated_on' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'date_updated' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'date_published' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'tag_1' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'tag_2' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'tag_3' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'category_code' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'category_main' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
            ],
            'category_1' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
            ],
            'category_2' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
            ],
            'category_3' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
            ],
            'keywords' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'resource_title1' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'resource_link1' => [
                'type' => 'TEXT',
            ],
            'resource_title2' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'resource_link2' => [
                'type' => 'TEXT',
            ],
            'resource_title3' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'resource_link3' => [
                'type' => 'TEXT',
            ],
            'resource_title4' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'resource_link4' => [
                'type' => 'TEXT',
            ],
            'resource_title5' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
            ],
            'resource_link5' => [
                'type' => 'TEXT',
            ],
            'category_main_code' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'category_1_code' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'category_2_code' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'category_3_code' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('blog');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}