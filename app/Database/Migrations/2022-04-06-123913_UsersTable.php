<?php

namespace User\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersTable extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'ip_address'       => [
        'type'       => 'VARCHAR',
        'constraint' => '45',
      ],
      'name'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'email'       => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
      ],
      'phone'       => [
        'type'       => 'VARCHAR',
        'constraint' => '20',
        'null' => true,
      ],
      'password'       => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
      ],
      'activation_code'       => [
        'type'       => 'VARCHAR',
        'constraint' => '255',
        'null' => true,
      ],
      'last_login'       => [
        'type'       => 'INT',
        'constraint' => '11',
        'unsigned' => true,
        'null' => true,
      ],
      'created_at' => [
        'type' => 'DATETIME',
      ],
      'updated_at' => [
        'type' => 'DATETIME',
      ],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('users');
  }

  public function down()
  {
    $this->forge->dropTable('users');
  }
}
