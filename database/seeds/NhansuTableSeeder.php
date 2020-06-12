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
                'BirthDay' => '1975-09-16',
                'StartDay' => '2017-09-09',
                'id_LoaiNS' => 1,
                'id_csyt' => 2,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Nguyễn Đức Huy',
                'BirthDay' => '1998-02-04',
                'StartDay' => '2014-07-04',
                'id_LoaiNS' => 2,
                'id_csyt' => 3,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Huỳnh Tâm',
                'BirthDay' => '1998-02-04',
                'StartDay' => '2015-07-04',
                'id_LoaiNS' => 2,
                'id_csyt' => 9,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dung Thị Tố Nga',
                'BirthDay' => '1998-02-04',
                'StartDay' => '2016-07-04',
                'id_LoaiNS' => 4,
                'id_csyt' => 15,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Hoa Kim Dung',
                'BirthDay' => '1998-02-04',
                'StartDay' => '2017-07-04',
                'id_LoaiNS' => 1,
                'id_csyt' => 4,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Nhan Ngọc Tài',
                'BirthDay' => '1998-02-04',
                'StartDay' => '2018-07-04',
                'id_LoaiNS' => 2,
                'id_csyt' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Nguyễn Thanh',
                'BirthDay' => '2009-04-03',
                'StartDay' => '2018-03-04',
                'id_LoaiNS' => 2,
                'id_csyt' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Trần Thùy Thu',
                'BirthDay' => '2000-02-02',
                'StartDay' => '2016-04-05',
                'id_LoaiNS' => 4,
                'id_csyt' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Lý Thị Hồng Hà',
                'BirthDay' => '2000-02-02',
                'StartDay' => '2014-07-17',
                'id_LoaiNS' => 3,
                'id_csyt' => 18,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Mã Như Huệ',
                'BirthDay' => '2000-02-02',
                'StartDay' => '2017-05-19',
                'id_LoaiNS' => 1,
                'id_csyt' => 18,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Huỳnh Kim Cúc',
                'BirthDay' => '2000-02-02',
                'StartDay' => '2015-07-29',
                'id_LoaiNS' => 2,
                'id_csyt' => 3,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Chế Thị Xin ',
                'BirthDay' => '2000-02-02',
                'StartDay' => '2018-04-17',
                'id_LoaiNS' => 3,
                'id_csyt' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Trần Kim Chinh',
                'BirthDay' => '2000-01-01',
                'StartDay' => '2016-05-04',
                'id_LoaiNS' => 3,
                'id_csyt' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Lê Văn Hoàng',
                'BirthDay' => '1996-08-16',
                'StartDay' => '2016-06-03',
                'id_LoaiNS' => 3,
                'id_csyt' => 12,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Nguyễn Văn Cù',
                'BirthDay' => '1975-12-11',
                'StartDay' => '2010-12-11',
                'id_LoaiNS' => 4,
                'id_csyt' => 5,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Lê Na',
                'BirthDay' => '1976-10-16',
                'StartDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 5,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Khánh Linh',
                'BirthDay' => '1983-09-17',
                'StartDay' => '2015-09-23',
                'id_LoaiNS' => 2,
                'id_csyt' => 12,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Lê Kim',
                'BirthDay' => '1976-10-16',
                'StartDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 4,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Trần Hoàng',
                'BirthDay' => '1983-09-17',
                'StartDay' => '2015-09-23',
                'id_LoaiNS' => 2,
                'id_csyt' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Văn Hoàng',
                'BirthDay' => '1976-10-16',
                'StartDay' => '2016-12-18',
                'id_LoaiNS' => 4,
                'id_csyt' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Lê Thủy',
                'BirthDay' => '1983-09-17',
                'StartDay' => '2015-09-23',
                'id_LoaiNS' => 1,
                'id_csyt' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Lê Mão',
                'BirthDay' => '1976-10-16',
                'StartDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 10,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Hoàng Thùy',
                'BirthDay' => '1983-09-17',
                'StartDay' => '2015-09-23',
                'id_LoaiNS' => 2,
                'id_csyt' => 10,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Hoàng Tấm',
                'BirthDay' => '1976-10-16',
                'StartDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 11,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Nguyễn Nga',
                'BirthDay' => '1983-09-17',
                'StartDay' => '2015-09-23',
                'id_LoaiNS' => 2,
                'id_csyt' => 11,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Lê Na',
                'BirthDay' => '1976-10-16',
                'StartDay' => '2016-12-18',
                'id_LoaiNS' => 3,
                'id_csyt' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Lê Thủy',
                'BirthDay' => '1983-09-17',
                'StartDay' => '2015-09-23',
                'id_LoaiNS' => 2,
                'id_csyt' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'LÊ VĂN TÁM',
                'BirthDay' => '1996-08-16',
                'StartDay' => '2016-01-02',
                'id_LoaiNS' => 2,
                'id_csyt' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Vũ Trọng Hùng',
                'BirthDay' => '1983-12-17',
                'StartDay' => '2017-07-08',
                'id_LoaiNS' => 2,
                'id_csyt' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Huỳnh Văn Phú',
                'BirthDay' => '1975-09-17',
                'StartDay' => '2015-06-10',
                'id_LoaiNS' => 1,
                'id_csyt' => 2,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Vũ Trọng Hùng',
                'BirthDay' => '1983-12-17',
                'StartDay' => '2017-07-08',
                'id_LoaiNS' => 2,
                'id_csyt' => 2,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Huỳnh Văn Phú',
                'BirthDay' => '1975-09-17',
                'StartDay' => '2015-06-10',
                'id_LoaiNS' => 3,
                'id_csyt' => 2,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Nguyễn Hoàng Tài',
                'BirthDay' => '1983-12-17',
                'StartDay' => '2017-07-08',
                'id_LoaiNS' => 1,
                'id_csyt' => 2,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Trần Phi Hùng',
                'BirthDay' => '1975-09-17',
                'StartDay' => '2015-06-10',
                'id_LoaiNS' => 3,
                'id_csyt' => 2,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Văn Tiến Hải',
                'BirthDay' => '1983-12-17',
                'StartDay' => '2017-07-08',
                'id_LoaiNS' => 3,
                'id_csyt' => 2,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Huỳnh Văn Phú',
                'BirthDay' => '1975-09-17',
                'StartDay' => '2015-06-10',
                'id_LoaiNS' => 1,
                'id_csyt' => 2,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Lê Thị Thủy',
                'BirthDay' => '1983-12-17',
                'StartDay' => '2017-07-08',
                'id_LoaiNS' => 2,
                'id_csyt' => 2,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Võ Văn Nguyên',
                'BirthDay' => '1975-09-17',
                'StartDay' => '2015-06-10',
                'id_LoaiNS' => 2,
                'id_csyt' => 2,
            ),
        ));
        
        
    }
}