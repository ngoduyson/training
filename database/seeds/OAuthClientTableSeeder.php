<?php

use Illuminate\Database\Seeder;

class OAuthClientTableSeeder extends Seeder
{
	public function run() {
		DB::table('oauth_clients')->insert([
			'id' => '16782dcddf12476e3ea749f92ad44c4dc2f00f7f',
			'secret' => '12f2d1524db9ea4e80217bf9af70b429903605f9',
			'name' => 'Daysee',
			'created_at' => '2016-04-11 23:47:00',
			'updated_at' => '2016-04-11 23:47:00'
		]);

		DB::table('oauth_clients')->insert([
			'id' => '61fe5d497fdcbc81f8df76ff034fb0d9a5349eb2',
			'secret' => '3bc1c46abd1581f890d0570c8d87ca1181193025',
			'name' => 'マルチリモコン',
			'created_at' => '2016-04-11 23:47:00',
			'updated_at' => '2016-04-11 23:47:00'
		]);
	}
}
