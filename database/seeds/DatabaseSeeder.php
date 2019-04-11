<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'nama' => 'Developer',
            'email' => 'sys_dev',
            'password' => bcrypt('qazwsx123'),
            'peranan' => 'Developer'
        ]);
    }
}
