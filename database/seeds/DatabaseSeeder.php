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
        $this->call(NhansuTableSeeder::class);
        $this->call(BenhnhanTableSeeder::class);
        $this->call(CosoyteTableSeeder::class);
        $this->call(GiuongbenhTableSeeder::class);
    }
}
