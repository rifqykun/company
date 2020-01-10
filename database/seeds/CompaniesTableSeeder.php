<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(
            [
                'company_name' => 'PT. Transisi Teknologi Mandiri',
                'company_email' => 'transisi@company.id',
                'website' => 'transisiteknologimandiri.com',
                'logo' => 'image'
            ]
        );
    }
}
