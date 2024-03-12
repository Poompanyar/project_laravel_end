<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopulationData extends Seeder
{

    public function run(): void
    {
        // สร้างข้อมูลตั้งต้นสำหรับตาราง populations โดยใช้การวนลูป
        for ($i = 1; $i <= 5; $i++) {
            DB::table('populations')->insert([
                'pu_country' => 'Country ' . $i,
                'pu_total_all' => rand(10, 300),
                'pu_density' => rand(10, 100) / 10, // ความหน้าแน่นของประชากร (50.0 - 500.0)
                'pu_median_age' => rand(20, 60) / 10, // อายุเฉลี่ย (2.0 - 6.0)
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
