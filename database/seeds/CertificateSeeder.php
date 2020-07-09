<?php

use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Certificate::class, 2)->create();
    }
}