<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Rifqy',
                'email' => 'admin@transisi.id',
                'status' => 'admin',
                'password' => bcrypt ('transisi')
            ]
        );
    }
}
