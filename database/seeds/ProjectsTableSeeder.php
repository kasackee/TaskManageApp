<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * テスト用シーダー
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 10; $i++) {
            DB::table('projects')->insert([
                'name' => Str::random(10),
                'description' => Str::random(30) . '詳細',
                'create_user_id' => rand(1, 10),
            ]);
        }
    }
}
