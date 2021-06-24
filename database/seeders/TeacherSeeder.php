<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
					[
						'name' => 'Игорь Иванович',
						'slug' => 'ii',
						'sheduler_id' => 1,
						'phone' => '+7 555 55-55-55',
						'email' => 'ii@me.me',
						'tema' => 'Математика',
						'password' => bcrypt('114477')
					],
					[
						'name' => 'Светлана Михайловна',
						'slug' => 'sm',
						'sheduler_id' => 1,
						'phone' => '+7 555 55-55-00',
						'email' => 'sm@me.me',
						'tema' => 'Физика',
						'password' => bcrypt('114477')
					],
					[
						'name' => 'Виталий Александрович',
						'slug' => 'va',
						'sheduler_id' => 1,
						'phone' => '+7 555 00-55-00',
						'email' => 'va@me.me',
						'tema' => 'География',
						'password' => bcrypt('114477')
					],
					[
						'name' => 'Виолета Владиленовна',
						'slug' => 'vva',
						'sheduler_id' => 1,
						'phone' => '+7 555 00-77-11',
						'email' => 'vv@me.me',
						'tema' => 'Пение',
						'password' => bcrypt('114477')
					],
				]);
    }
}
