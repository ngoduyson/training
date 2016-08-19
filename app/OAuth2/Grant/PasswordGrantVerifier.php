<?php

namespace Benlly\OAuth2\Server\Grant;

use Illuminate\Support\Facades\Auth;

class PasswordGrantVerifier
{
	public function verify ($clientId, $username, $password) {
		$credentials = [
			'oauth_client_id' => $clientId,
			'email' => $username,
			'password' => $password,
		];

		if (Auth::one($credentials)) {
			return Auth::user()->id;
		}

		return false;
	}
}
