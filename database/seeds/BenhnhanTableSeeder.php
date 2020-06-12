<?php

use Illuminate\Database\Seeder;

class BenhnhanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('benhnhan')->delete();
        
        \DB::table('benhnhan')->insert(array (
            0 => 
            array (
                'id' => 2,
                'hoten' => 'Lê Hoàng Phú',
                'diachi' => 'Quảng Nam',
                'SDT' => '0837272947',
                'BirthDay' => '2006-09-16',
                'StartDay' => '2018-12-24',
                'tenbenh' => 'Bệnh U Bướu',
                'id_giuong' => null,
                'id_csyt' => 12,
            ),
            1 => 
            array (
                'id' => 4,
                'hoten' => 'Lê Thi Hoàng Cầm',
                'diachi' => 'Quảng Bình',
                'SDT' => '029393833',
                'BirthDay' => '1976-12-04',
                'StartDay' => '2016-12-23',
                'tenbenh' => 'Bệnh Lao',
                'id_giuong' => null,
                'id_csyt' => 9,
            ),
            2 => 
            array (
                'id' => 6,
                'hoten' => 'Hoàng Thị Thơ',
                'diachi' => 'Quảng Trị',
                'SDT' => '0938340311',
                'BirthDay' => '1975-06-15',
                'StartDay' => '2017-09-02',
                'tenbenh' => 'Bệnh Da Liễu',
                'id_giuong' => null,
                'id_csyt' => 12,
            ),
            3 => 
            array (
                'id' => 7,
                'hoten' => 'Hoàng Cầm',
                'diachi' => 'Quảng Bình',
                'SDT' => '029393833',
                'BirthDay' => '1976-12-04',
                'StartDay' => '2016-12-23',
                'tenbenh' => 'Bệnh Lao',
                'id_giuong' => null,
                'id_csyt' => 12,
            ),
            4 => 
            array (
                'id' => 8,
                'hoten' => 'Lê thị Thu Thủy',
                'diachi' => 'Quảng Ngãi',
                'SDT' => '09348938384',
                'BirthDay' => '1983-12-16',
                'StartDay' => '2018-12-17',
                'tenbenh' => 'Bệnh Thủy Đậu',
                'id_giuong' => null,
                'id_csyt' => 14,
            ),
            5 => 
            array (
                'id' => 9,
                'hoten' => 'Lê Thi Hoàng Cầm',
                'diachi' => 'Quảng Bình',
                'SDT' => '029393833',
                'BirthDay' => '1976-12-04',
                'StartDay' => '2016-12-23',
                'tenbenh' => 'Bệnh Lao',
                'id_giuong' => null,
                'id_csyt' => 9,
            ),
            6 => 
            array (
                'id' => 11,
                'hoten' => 'Lê Thi Hoàng Cầm',
                'diachi' => 'Quảng Bình',
                'SDT' => '029393833',
                'BirthDay' => '1976-12-04',
                'StartDay' => '2016-12-23',
                'tenbenh' => 'Bệnh Lao',
                'id_giuong' => null,
                'id_csyt' => 16,
            ),
            7 => 
            array (
                'id' => 12,
                'hoten' => 'Lê thị Thu Thủy',
                'diachi' => 'Quảng Ngãi',
                'SDT' => '09348938384',
                'BirthDay' => '1983-12-16',
                'StartDay' => '2018-12-17',
                'tenbenh' => 'Bệnh Thủy Đậu',
                'id_giuong' => null,
                'id_csyt' => 17,
            ),
            8 => 
            array (
                'id' => 14,
                'hoten' => 'Đoàn Văn Hậu',
                'diachi' => 'Hà Tĩnh',
                'SDT' => '09348938384',
                'BirthDay' => '1983-12-16',
                'StartDay' => '2018-12-17',
                'tenbenh' => 'Bệnh Căng Thẳng Thần Kinh',
                'id_giuong' => null,
                'id_csyt' => 12,
            ),
            9 => 
            array (
                'id' => 15,
                'hoten' => 'Trần Phong',
                'diachi' => 'Quảng Ngãi',
                'SDT' => '098412941',
                'BirthDay' => '1999-07-08',
                'StartDay' => '2016-07-23',
                'tenbenh' => 'Bệnh hô hấp',
                'id_giuong' => null,
                'id_csyt' => 5,
            ),
            10 => 
            array (
                'id' => 16,
                'hoten' => 'Yến Nhi',
                'diachi' => 'Hà Tĩnh',
                'SDT' => '0393853232',
                'BirthDay' => '2000-04-23',
                'StartDay' => '2017-07-15',
                'tenbenh' => 'Bệnh Sởi',
                'id_giuong' => null,
                'id_csyt' => 13,
            ),
            11 => 
            array (
                'id' => 17,
                'hoten' => 'Hồ Đắc Tuân',
                'diachi' => 'Quảng Ngãi',
                'SDT' => '098412941',
                'BirthDay' => '1999-07-08',
                'StartDay' => '2016-07-23',
                'tenbenh' => 'Bệnh hô hấp',
                'id_giuong' => null,
                'id_csyt' => 5,
            ),
            12 => 
            array (
                'id' => 18,
                'hoten' => 'Phạm Tiến Dũng',
                'diachi' => 'Hà Tĩnh',
                'SDT' => '0393853232',
                'BirthDay' => '2000-04-23',
                'StartDay' => '2017-07-15',
                'tenbenh' => 'Bệnh Sởi',
                'id_giuong' => null,
                'id_csyt' => 14,
            ),
            13 => 
            array (
                'id' => 19,
                'hoten' => 'Hà Đức Chinh',
                'diachi' => 'Quảng Ngãi',
                'SDT' => '098412941',
                'BirthDay' => '1999-07-08',
                'StartDay' => '2016-07-23',
                'tenbenh' => 'Bệnh hô hấp',
                'id_giuong' => null,
                'id_csyt' => 6,
            ),
            14 => 
            array (
                'id' => 20,
                'hoten' => 'Nguyễn Quang Hải',
                'diachi' => 'Hà Tĩnh',
                'SDT' => '0393853232',
                'BirthDay' => '2000-04-23',
                'StartDay' => '2017-07-15',
                'tenbenh' => 'Bệnh Sởi',
                'id_giuong' => null,
                'id_csyt' => 4,
            ),
            15 => 
            array (
                'id' => 21,
                'hoten' => 'Nguyễn Hoàng Nam',
                'diachi' => 'Thanh Hóa',
                'SDT' => '0949394433',
                'BirthDay' => '1997-08-12',
                'StartDay' => '2016-11-16',
                'tenbenh' => 'Bệnh Da Liễu',
                'id_giuong' => null,
                'id_csyt' => 4,
            ),
            16 => 
            array (
                'id' => 22,
                'hoten' => 'Lý Hoàng Phú',
                'diachi' => 'Quảng Ngãi',
                'SDT' => '0855849453',
                'BirthDay' => '1985-03-17',
                'StartDay' => '2017-08-12',
                'tenbenh' => 'Bệnh U Bướu',
                'id_giuong' => null,
                'id_csyt' => 4,
            ),
            17 => 
            array (
                'id' => 24,
                'hoten' => 'Lý Nhí',
                'diachi' => 'Đà Nẵng',
                'SDT' => '0838989878',
                'BirthDay' => '1985-03-17',
                'StartDay' => '2018-02-22',
                'tenbenh' => 'Bệnh Lao',
                'id_giuong' => 2,
                'id_csyt' => 14,
            ),
            18 => 
            array (
                'id' => 25,
                'hoten' => 'Lý Hải',
                'diachi' => 'Đà Nẵng',
                'SDT' => '0948843432',
                'BirthDay' => '1997-08-12',
                'StartDay' => '2016-09-17',
                'tenbenh' => 'Bệnh Viên Răng',
                'id_giuong' => null,
                'id_csyt' => 8,
            ),
        ));
        
        
    }
}