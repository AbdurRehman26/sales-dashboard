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
                'id' => 8,
                'name' => 'Kashif',
                'email' => 'elysiussales2019@gmail.com',
                'phone_number' => NULL,
                'fcm_id' => NULL,
                'password' => bcrypt('elysiussales2019'),
                'remember_token' => 'F8poPGkbyqQVMea9HiKE4BfERh1RRdvb4pvyL9nUEkQTAuTqHdEqe1xPOwSf',
                'created_at' => '2019-09-28 05:27:36',
                'updated_at' => '2019-09-28 05:27:36',
                'is_verified' => 'yes',
                'user_type' => 1,
                'plz' => NULL,
                'st_house' => NULL,
            ),
            1 => 
            array (
                'id' => 10,
                'name' => 'Hashim',
                'email' => 'hashim@hmail.com',
                'phone_number' => '090078701',
                'fcm_id' => NULL,
                'password' => bcrypt("1234"),
                'remember_token' => NULL,
                'created_at' => '2019-10-17 14:38:20',
                'updated_at' => '2019-10-17 14:39:11',
                'is_verified' => 'yes',
                'user_type' => 0,
                'plz' => 'llz',
                'st_house' => 'St',
            ),
            2 => 
            array (
                'id' => 13,
                'name' => 'Michael Thomas Smejkal',
                'email' => 'mts-berlin@gmx.de',
                'phone_number' => '017630145677',
                'fcm_id' => NULL,
                'password' => bcrypt("1234"),
                'remember_token' => NULL,
                'created_at' => '2019-11-06 06:18:39',
                'updated_at' => '2020-02-18 10:24:59',
                'is_verified' => 'no',
                'user_type' => 0,
                'plz' => '13125 Berlin',
                'st_house' => 'Lindenberger Weg 83',
            ),
            3 => 
            array (
                'id' => 14,
                'name' => 'William Pusch',
                'email' => 'fff@eu.xlm',
                'phone_number' => '0000',
                'fcm_id' => NULL,
                'password' => bcrypt("1234"),
                'remember_token' => NULL,
                'created_at' => '2019-11-20 18:41:39',
                'updated_at' => '2019-11-20 18:49:17',
                'is_verified' => 'yes',
                'user_type' => 0,
                'plz' => '00000 Gießen',
                'st_house' => 'Test 12',
            ),
            4 => 
            array (
                'id' => 15,
                'name' => 'Rudolf Pusch',
                'email' => 'rudolf.pusch@hotmail.de',
                'phone_number' => '015117876712',
                'fcm_id' => NULL,
                'password' => bcrypt("1234"),
                'remember_token' => NULL,
                'created_at' => '2019-11-21 11:33:12',
                'updated_at' => '2019-11-25 09:00:44',
                'is_verified' => 'yes',
                'user_type' => 0,
                'plz' => '35390 Gießen',
                'st_house' => 'Dürerstr. 9',
            ),
            5 => 
            array (
                'id' => 16,
                'name' => 'Abdul',
                'email' => 'hashim@gmail.com',
                'phone_number' => '03001234567',
                'fcm_id' => NULL,
                'password' => bcrypt("1234"),
                'remember_token' => NULL,
                'created_at' => '2019-11-23 19:50:39',
                'updated_at' => '2019-11-24 07:09:24',
                'is_verified' => 'yes',
                'user_type' => 0,
                'plz' => 'Lahore',
                'st_house' => 'main st',
            ),
            6 => 
            array (
                'id' => 17,
                'name' => 'Tanja Bader',
                'email' => 't.bader@elysius.eu',
                'phone_number' => '01746740231',
                'fcm_id' => NULL,
                'password' => bcrypt("1234"),
                'remember_token' => NULL,
                'created_at' => '2019-11-25 15:44:34',
                'updated_at' => '2019-11-25 15:45:05',
                'is_verified' => 'yes',
                'user_type' => 0,
                'plz' => '64546 Mörfelden-Walldorf',
                'st_house' => 'Soonwaldstr. 2',
            ),
            7 => 
            array (
                'id' => 18,
                'name' => 'kashif',
                'email' => 'ap@gmail.com',
                'phone_number' => '3764646',
                'fcm_id' => NULL,
                'password' => bcrypt("1234"),
                'remember_token' => NULL,
                'created_at' => '2020-01-19 15:14:07',
                'updated_at' => '2020-01-19 15:14:07',
                'is_verified' => 'no',
                'user_type' => 0,
                'plz' => 'hdhs',
                'st_house' => 'djdh',
            ),
            8 => 
            array (
                'id' => 21,
                'name' => 'Stephan Balling',
                'email' => 's.balling@elysius.eu',
                'phone_number' => '0176/21812485',
                'fcm_id' => NULL,
                'password' => bcrypt("1234"),
                'remember_token' => NULL,
                'created_at' => '2020-03-03 12:40:22',
                'updated_at' => '2020-03-03 12:40:28',
                'is_verified' => 'yes',
                'user_type' => 0,
                'plz' => '81929 München',
                'st_house' => 'Burgauerstr. 61',
            ),
            9 => 
            array (
                'id' => 22,
                'name' => 'yg',
                'email' => 'iftihussain4u@gmail.com',
                'phone_number' => '03005411085',
                'fcm_id' => NULL,
                'password' => bcrypt("1234"),
                'remember_token' => NULL,
                'created_at' => '2020-03-12 10:33:00',
                'updated_at' => '2020-03-12 10:33:00',
                'is_verified' => 'no',
                'user_type' => 0,
                'plz' => 'jinnah',
                'st_house' => 'garden',
            ),
        ));
        
        
    }
}