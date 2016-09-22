<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
			'id' => '1',
			'oauth_client_id' => '16782dcddf12476e3ea749f92ad44c4dc2f00f7f',
			'login' => 'ozawa',
			'email' => 'ozawa@curations.jp',
			'password' => Hash::make('password'),
			'created_at' => '2016-04-11 23:47:00',
			'updated_at' => '2016-04-11 23:47:00'
		]);

		DB::table('users')->insert([
			'id' => '1',
			'oauth_client_id' => '61fe5d497fdcbc81f8df76ff034fb0d9a5349eb2',
			'login' => 'ozawa',
			'password' => Hash::make('password'),
			'created_at' => '2016-04-11 23:47:00',
			'updated_at' => '2016-04-11 23:47:00'
		]);
    }
}
