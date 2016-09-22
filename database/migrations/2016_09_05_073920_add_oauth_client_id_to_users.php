<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOauthClientIdToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::drop('users');

		Schema::create('user', function($table) {
			$table->bigIncrements('id');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('users', function($table) {
			$table->dropForeign('users_oauth_client_id_foreign');
			$table->dropUnique('users_oauth_client_id_email_unique');
			$table->dropColumn('oauth_client_id');
			$table->unique('email');
		});
    }
}
