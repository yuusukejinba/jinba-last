<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Weight_logsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'date' => '2025-01-01',
            'weight' => 70,
            'calories' => 300,
            'exercise_time' =>'01:00:00',
            'exercise_content' => 'run',
          ];
          
  DB::table('weight_logs')->insert($param);
    }
}
