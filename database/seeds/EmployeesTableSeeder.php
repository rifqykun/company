<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert(
            [
                'name' => 'Rifqy Kurniawan',
                'company_id' => 1,
                'email' => 'rifqykrn@gmail.com'
            ]
        );
    }
}
