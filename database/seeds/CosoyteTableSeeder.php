<?php

use Illuminate\Database\Seeder;

class CosoyteTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cosoyte')->delete();
        
        \DB::table('cosoyte')->insert(array (
            0 => 
            array (
                'id_csyt' => 3,
                'name' => 'Bệnh viện Đa Khoa Hoàng Việt Thắng',
                'diachi' => 'tp Huế',
                'sdt' => '0935425534',
                'loaiCS' => 'Bệnh viện',
                'NgayTL' => '2010-03-05',
            ),
            1 => 
            array (
                'id_csyt' => 4,
                'name' => 'Bệnh viện trung Ương Huế CS2',
                'diachi' => 'tp Huế',
                'sdt' => '0232425223',
                'loaiCS' => 'Bệnh viện',
                'NgayTL' => '2015-03-05',
            ),
            2 => 
            array (
                'id_csyt' => 5,
                'name' => 'Bệnh viện Quốc Tế-TW Huế',
                'diachi' => 'tp Huế',
                'sdt' => '0876787870',
                'loaiCS' => 'Trạm xá',
                'NgayTL' => '2014-03-05',
            ),
            3 => 
            array (
                'id_csyt' => 6,
                'name' => 'Trạm Xá phường An Cựu',
                'diachi' => 'tp Huế',
                'sdt' => '0232332332',
                'loaiCS' => 'Trạm xá',
                'NgayTL' => '2015-03-05',
            ),
            4 => 
            array (
                'id_csyt' => 7,
                'name' => 'Bệnh viện Ngoại Khoa Nguyễn Văn Thái',
                'diachi' => 'tp Huế',
                'sdt' => '0236766675',
                'loaiCS' => 'Bệnh viện',
                'NgayTL' => '2013-03-05',
            ),
            5 => 
            array (
                'id_csyt' => 8,
                'name' => 'Trạm Xá Phú Hòa',
                'diachi' => 'tp Huế',
                'sdt' => '0987878878',
                'loaiCS' => 'Trạm xá',
                'NgayTL' => '2013-03-05',
            ),
            6 => 
            array (
                'id_csyt' => 9,
                'name' => 'Trạm Xá Quân Đội',
                'diachi' => 'tp Huế',
                'sdt' => '0123235456',
                'loaiCS' => 'Trạm xá',
                'NgayTL' => '1992-03-05',
            ),
            7 => 
            array (
                'id_csyt' => 12,
                'name' => 'Bệnh Viện trung Ương Huế',
                'diachi' => 'tp Huế',
                'sdt' => '0957289875',
                'loaiCS' => 'Bệnh viện',
                'NgayTL' => '1890-05-19',
            ),
            8 => 
            array (
                'id_csyt' => 13,
                'name' => 'Trạm Xá Công An',
                'diachi' => 'tp Huế',
                'sdt' => '0957275295',
                'loaiCS' => 'Trạm xá',
                'NgayTL' => '2011-06-19',
            ),
            9 => 
            array (
                'id_csyt' => 14,
                'name' => 'Bệnh Viện Đại học Y Dược',
                'diachi' => 'tp Huế',
                'sdt' => '0957275295',
                'loaiCS' => 'Bệnh viện',
                'NgayTL' => '1959-05-19',
            ),
            10 => 
            array (
                'id_csyt' => 16,
                'name' => 'Trạm xá phường An Cựu',
                'diachi' => 'tp Huế',
                'sdt' => '0914813833',
                'loaiCS' => 'Trạm xá',
                'NgayTL' => '2015-04-23',
            ),
            11 => 
            array (
                'id_csyt' => 17,
                'name' => 'Trạm xá phường An Hòa',
                'diachi' => 'tp Huế',
                'sdt' => '0914818879',
                'loaiCS' => 'Trạm xá',
                'NgayTL' => '2015-04-23',
            ),
        ));
        
        
    }
}