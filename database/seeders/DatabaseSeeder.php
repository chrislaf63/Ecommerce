<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webkul\Installer\Database\Seeders\DatabaseSeeder as BagistoDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BagistoDatabaseSeeder::class);
        $password = password_hash('test1234', PASSWORD_BCRYPT, ['cost' => 10]);
        DB::table('admins')->updateOrInsert(
            ['id' => 1],
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => $password,
                'role_id' => 1,
                'status' => 1,
            ]
        );
    }
}
