<?php

use Illuminate\Database\Seeder;

class GiuongbenhTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('giuongbenh')->delete();
        
        \DB::table('giuongbenh')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'A1',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'A2',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'B1',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'B2',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'C2',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'C3',
            ),
        ));
        
        
    }
}