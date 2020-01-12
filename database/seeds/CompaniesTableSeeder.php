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
                'website' => 'www.ransisiteknologimandiri.com',
                'logo' => '20200111333.png'
            ]
        );
        DB::table('companies')->insert(
            [
                'company_name' => 'PT. Pertamina',
                'company_email' => 'pertamina@company.co.id',
                'website' => 'www.pertamina.co.id',
                'logo' => '20200111444.png'
            ]
        );
        DB::table('companies')->insert(
            [
                'company_name' => 'PT. POS INDONESIA',
                'company_email' => 'pos@company.co.id',
                'website' => 'www.pos.co.id',
                'logo' => '20200111666.png'
            ]
        );
        DB::table('companies')->insert(
            [
                'company_name' => 'PT. PPA',
                'company_email' => 'ppa@company.co.id',
                'website' => 'www.ppa.co.id',
                'logo' => '20200111555.png'
            ]
        );
        DB::table('companies')->insert(
            [
                'company_name' => 'PT. VADS',
                'company_email' => 'vads@company.co.id',
                'website' => 'www.vads.co.id',
                'logo' => '20200111888.jpg'
            ]
        );
        DB::table('companies')->insert(
            [
                'company_name' => 'PT. ANGKASA PURA',
                'company_email' => 'angkasapura@company.co.id',
                'website' => 'www.angkasa.co.id',
                'logo' => '20200111777.png'
            ]
        );
    }
}
