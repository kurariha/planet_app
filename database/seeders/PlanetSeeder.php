<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // paramに配列を代入
        $param = [
            [
                'name_ja' => '水星',
                'name_en' => 'MERCURY',
                'radius' => 2439,
                'weight' => 3310,
            ],
            [
                'name_ja' => '金星',
                'name_en' => 'VENUS',
                'radius' => 6052,
                'weight' => 48700,
            ],
            [
                'name_ja' => '地球',
                'name_en' => 'EARTH',
                'radius' => 6378,
                'weight' => 59760,
            ],
            [
                'name_ja' => '火星',
                'name_en' => 'MARS',
                'radius' => 3397,
                'weight' => 6420,
            ],
            [
                'name_ja' => '木星',
                'name_en' => 'JUPITER',
                'radius' => 71492,
                'weight' => 18993500,
            ],
            [
                'name_ja' => '土星',
                'name_en' => 'SATURN',
                'radius' => 60268,
                'weight' => 5685980,
            ],
            [
                'name_ja' => '天王星',
                'name_en' => 'URANUS',
                'radius' => 25559,
                'weight' => 868910,
            ],
            [
                'name_ja' => '海王星',
                'name_en' => 'NEPTUNE',
                'radius' => 24764,
                'weight' => 1029660,
            ],

        ];
        // DB::table->insertでレコードの登録
        DB::table('planets')->insert($param);
    }
}
