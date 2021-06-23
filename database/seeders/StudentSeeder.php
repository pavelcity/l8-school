<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
					[
						'name' => 'Василий',
						'slug' => 'vasya',
						'email' => 'vasya@me.me',
						'phone' => '8 900 000-00-00',
						'password' => bcrypt('0000')
					],
					[
						'name' => 'Анна',
						'slug' => 'anny',
						'email' => 'anna@me.me',
						'phone' => '8 900 000-00-00',
						'password' => bcrypt('0000')
					],
					[
						'name' => 'Вилли',
						'slug' => 'villy',
						'email' => 'villi@me.me',
						'phone' => '8 900 999-99-99',
						'password' => bcrypt('0000')
					],
				]);
    }
}
