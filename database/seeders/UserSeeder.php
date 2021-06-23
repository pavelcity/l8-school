<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
					[
						'name' => 'Учитель физики',
						'email' => 'fizika@me.me',
						'password' => bcrypt('001122'),
						'is_teacher' => 1,
						'is_student' => 0
					],
					[
						'name' => 'Студент Вилли',
						'email' => 'villi@me.me',
						'password' => bcrypt('221100'),
						'is_teacher' => 0,
						'is_student' => 1
					],
				]); 
    }
}
