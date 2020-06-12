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
        $this->call(CosoyteTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(NhansuTableSeeder::class);
        $this->call(GiuongbenhTableSeeder::class);
        $this->call(BenhnhanTableSeeder::class);
    }
}
