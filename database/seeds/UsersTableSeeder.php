<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Huy',
                'email' => 'letamhot1@gmail.com',
                'password' => '$2y$10$tp7Wg3ehrH.kG.7gF90bB.SRpg7IZ2GrSRVpbKt/8StUyhxrgRSfi',
                'created_at' => '2019-11-24 03:20:26',
                'updated_at' => '2019-12-10 05:31:24',
                'remember_token' => 'token1',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Tám',
                'email' => 'tam@gmail.com',
                'password' => '$2y$10$JPDZ.mfJMHJq0pMpxacFkepcEL0kDO1J9Oup13SRdNv.F9QJ55kse',
                'created_at' => '2019-11-24 03:28:06',
                'updated_at' => '2019-11-24 03:28:06',
                'remember_token' => 'token2',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Mão',
                'email' => 'meomeo@meomeo.com',
                'password' => '$2y$10$uH3uzCW5OAikuyv.6OPw4eoZ4ml7qRNg95RvitzQ4PW2Dv6DkEbSG',
                'created_at' => '2019-11-24 08:51:10',
                'updated_at' => '2019-11-24 08:51:10',
                'remember_token' => 'token3',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'admin',
                'email' => 'admin1@admin.com',
                'password' => '$2y$10$yE78IhyfshstdUWc64vgIOFB/N8Nx/jQUYONcqKxfls5GGGuMWR0e',
                'created_at' => '2019-11-25 02:09:09',
                'updated_at' => '2019-11-25 02:09:09',
                'remember_token' => 'token4',
            ),
        ));
        
        
    }
}