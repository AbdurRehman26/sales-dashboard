<?php

use Illuminate\Database\Seeder;

class MarketTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('market_types')->delete();
        
        \DB::table('market_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pharmacy',
                'created_at' => '2019-09-29 16:34:32',
                'updated_at' => '2019-09-29 16:34:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Beauty Salon',
                'created_at' => '2019-09-29 16:34:47',
                'updated_at' => '2019-09-29 16:34:32',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Hair Stylist',
                'created_at' => '2019-09-29 16:34:57',
                'updated_at' => '2019-09-29 16:34:32',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Naturopath',
                'created_at' => '2019-09-29 16:35:06',
                'updated_at' => '2019-09-29 16:34:32',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bio-Market',
                'created_at' => '2019-09-29 16:35:19',
                'updated_at' => '2019-09-29 16:34:32',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'store chain',
                'created_at' => '2019-09-29 16:35:32',
                'updated_at' => '2019-09-29 16:34:32',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'other',
                'created_at' => '2019-09-29 16:35:40',
                'updated_at' => '2019-09-29 16:34:32',
            ),
        ));
        
        
    }
}