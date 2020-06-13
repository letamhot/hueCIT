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
                'id' => 1,
                'name' => 'Trần Thị Trang',
                'birthDay' => '1975-09-16',
                'startDay' => '2017-09-09',
                'id_LoaiNS' => 3,
                'id_csyt' => 4,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Nguyễn Đức Huy',
                'birthDay' => '1998-02-04',
                'startDay' => '2014-07-04',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Huỳnh Tâm',
                'birthDay' => '1998-02-04',
                'startDay' => '2015-07-04',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dung Thị Tố Nga',
                'birthDay' => '1998-02-04',
                'startDay' => '2016-07-04',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Hoa Kim Dung',
                'birthDay' => '1998-02-04',
                'startDay' => '2017-07-04',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Nhan Ngọc Tài',
                'birthDay' => '1998-02-04',
                'startDay' => '2018-07-04',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Nguyễn Thanh',
                'birthDay' => '2009-04-03',
                'startDay' => '2018-03-04',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Trần Thùy Thu',
                'birthDay' => '2000-02-02',
                'startDay' => '2016-04-05',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Lý Thị Hồng Hà',
                'birthDay' => '2000-02-02',
                'startDay' => '2014-07-17',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Mã Như Huệ',
                'birthDay' => '2000-02-02',
                'startDay' => '2017-05-19',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Huỳnh Kim Cúc',
                'birthDay' => '2000-02-02',
                'startDay' => '2015-07-29',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Chế Thị Xin ',
                'birthDay' => '2000-02-02',
                'startDay' => '2018-04-17',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Trần Kim Chinh',
                'birthDay' => '2000-01-01',
                'startDay' => '2016-05-04',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Lê Văn Hoàng',
                'birthDay' => '1996-08-16',
                'startDay' => '2016-06-03',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Nguyễn Văn Cù',
                'birthDay' => '1975-12-11',
                'startDay' => '2010-12-11',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Lê Na',
                'birthDay' => '1976-10-16',
                'startDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Khánh Linh',
                'birthDay' => '1983-09-17',
                'startDay' => '2015-09-23',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Lê Kim',
                'birthDay' => '1976-10-16',
                'startDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Trần Hoàng',
                'birthDay' => '1983-09-17',
                'startDay' => '2015-09-23',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Văn Hoàng',
                'birthDay' => '1976-10-16',
                'startDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Lê Thủy',
                'birthDay' => '1983-09-17',
                'startDay' => '2015-09-23',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Lê Mão',
                'birthDay' => '1976-10-16',
                'startDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Hoàng Thùy',
                'birthDay' => '1983-09-17',
                'startDay' => '2015-09-23',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Hoàng Tấm',
                'birthDay' => '1976-10-16',
                'startDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Nguyễn Nga',
                'birthDay' => '1983-09-17',
                'startDay' => '2015-09-23',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Lê Na',
                'birthDay' => '1976-10-16',
                'startDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Lê Thủy',
                'birthDay' => '1983-09-17',
                'startDay' => '2015-09-23',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'LÊ VĂN TÁM',
                'birthDay' => '1996-08-16',
                'startDay' => '2016-01-02',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Vũ Trọng Hùng',
                'birthDay' => '1983-12-17',
                'startDay' => '2017-07-08',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Huỳnh Văn Phú',
                'birthDay' => '1975-09-17',
                'startDay' => '2015-06-10',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Vũ Trọng Hùng',
                'birthDay' => '1983-12-17',
                'startDay' => '2017-07-08',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Huỳnh Văn Phú',
                'birthDay' => '1975-09-17',
                'startDay' => '2015-06-10',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Nguyễn Hoàng Tài',
                'birthDay' => '1983-12-17',
                'startDay' => '2017-07-08',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Trần Phi Hùng',
                'birthDay' => '1975-09-17',
                'startDay' => '2015-06-10',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Văn Tiến Hải',
                'birthDay' => '1983-12-17',
                'startDay' => '2017-07-08',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Huỳnh Văn Phú',
                'birthDay' => '1975-09-17',
                'startDay' => '2015-06-10',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Lê Thị Thủy',
                'birthDay' => '1983-12-17',
                'startDay' => '2017-07-08',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Võ Văn Nguyên',
                'birthDay' => '1975-09-17',
                'startDay' => '2015-06-10',
                'id_LoaiNS' => 3,
                'id_csyt' => 3,
            ),
        ));
        
        
    }
}