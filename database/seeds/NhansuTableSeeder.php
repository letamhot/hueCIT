<?php

use Illuminate\Database\Seeder;

class NhansuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nhansu')->delete();
        
        \DB::table('nhansu')->insert(array (
            0 => 
            array (
                'id' => 2,
                'Name' => 'Nguyễn Đức Huy',
                'BirthDay' => '1998-02-04',
                'StartDay' => '2014-07-04',
                'id_LoaiNS' => null,
                'id_csyt' => 3,
            ),
            1 => 
            array (
                'id' => 3,
                'Name' => 'Huỳnh Tâm',
                'BirthDay' => '1998-02-04',
                'StartDay' => '2015-07-04',
                'id_LoaiNS' => null,
                'id_csyt' => 9,
            ),
            2 => 
            array (
                'id' => 5,
                'Name' => 'Hoa Kim Dung',
                'BirthDay' => '1998-02-04',
                'StartDay' => '2017-07-04',
                'id_LoaiNS' => null,
                'id_csyt' => 4,
            ),
            3 => 
            array (
                'id' => 6,
                'Name' => 'Nhan Ngọc Tài',
                'BirthDay' => '1998-02-04',
                'StartDay' => '2018-07-04',
                'id_LoaiNS' => null,
                'id_csyt' => 3,
            ),
            4 => 
            array (
                'id' => 11,
                'Name' => 'Huỳnh Kim Cúc',
                'BirthDay' => '2000-02-02',
                'StartDay' => '2015-07-29',
                'id_LoaiNS' => null,
                'id_csyt' => 3,
            ),
            5 => 
            array (
                'id' => 14,
                'Name' => 'Lê Văn Hoàng',
                'BirthDay' => '1996-08-16',
                'StartDay' => '2016-06-03',
                'id_LoaiNS' => null,
                'id_csyt' => 12,
            ),
            6 => 
            array (
                'id' => 15,
                'Name' => 'Nguyễn Văn Cù',
                'BirthDay' => '1975-12-11',
                'StartDay' => '2010-12-11',
                'id_LoaiNS' => null,
                'id_csyt' => 5,
            ),
            7 => 
            array (
                'id' => 16,
                'Name' => 'Lê Na',
                'BirthDay' => '1976-10-16',
                'StartDay' => '2016-12-18',
                'id_LoaiNS' => null,
                'id_csyt' => 5,
            ),
            8 => 
            array (
                'id' => 17,
                'Name' => 'Khánh Linh',
                'BirthDay' => '1983-09-17',
                'StartDay' => '2015-09-23',
                'id_LoaiNS' => null,
                'id_csyt' => 12,
            ),
            9 => 
            array (
                'id' => 18,
                'Name' => 'Lê Kim',
                'BirthDay' => '1976-10-16',
                'StartDay' => '2016-12-18',
                'id_LoaiNS' => null,
                'id_csyt' => 4,
            ),
        ));
        
        
    }
}