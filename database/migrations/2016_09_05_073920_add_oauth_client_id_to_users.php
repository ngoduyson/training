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
		Schema::table('users', function($table) {
			$table->string('oauth_client_id', 40)->after('id');
			$table->dropUnique('users_email_unique');
			$table->unique(['oauth_client_id', 'email']);
			$table->foreign('oauth_client_id')->references('id')->on('oauth_clients');
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
