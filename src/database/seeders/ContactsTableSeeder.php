<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'fullname' => '田中一郎',
            'gender' => '1',
            'email' => 'sample1@sample.com',
            'postcode' => '123-4567',
            'address' => '東京都渋谷区あいうえお町1-2-3',
            'building_name' => 'あいうえマンション101',
            'opinion' => 'これはサンプルです。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'fullname' => '斉藤二郎',
            'gender' => '1',
            'email' => 'sample2@sample.com',
            'postcode' => '234-5678',
            'address' => '神奈川県横浜市かきく町1-2-3',
            'building_name' => 'かきくマンション201',
            'opinion' => 'これはサンプルです。'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'fullname' => '佐藤しょうこ',
            'gender' => '2',
            'email' => 'sample3@sample.com',
            'postcode' => '567-8912',
            'address' => '埼玉県さいたま市さしす区1-2-3',
            'building_name' => 'さしすマンション301',
            'opinion' => 'これはサンプルです。'
        ];
        DB::table('contacts')->insert($param);
    }
}
