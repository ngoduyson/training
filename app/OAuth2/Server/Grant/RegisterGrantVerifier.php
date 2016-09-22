<?php

namespace Benlly\OAuth2\Server\Grant;

use Benlly\Entities\User;
use Illuminate\Support\Facades\Auth;

class RegisterGrantVerifier
{
	public function verify($clientId, $username, $password) {
		try {
			$user = User::create([
				'oauth_client_id' => $clientId;
				'login' => $username;
				'password' => $password;
			]);
		} catch (\Exception $e) {
			return false;
		}

		return $user->id;
	}
}
