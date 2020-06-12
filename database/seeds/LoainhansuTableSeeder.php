<?php

use Illuminate\Database\Seeder;

class LoainhansuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('loainhansu')->delete();
        
        \DB::table('loainhansu')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Bác sĩ',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Y tá',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Điều dưỡng',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Cán bộ',
            ),
        ));
        
        
    }
}