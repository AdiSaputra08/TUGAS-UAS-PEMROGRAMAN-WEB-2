<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin1',
            'nama'     => 'adi',
            'email'    => 'adisaputra@gmail.com',
            'password' => password_hash('admin123', PASSWORD_DEFAULT),
        ];

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}

