<?php

namespace Benlly\OAuth2\Server\Grant;

use League\OAuth2\Server\Grant\PasswordGrant as BaseGrant;

class PasswordGrant extends BaseGrant
{
	protected function getVerifyCredentialsCallback() {
		if (is_null($this->callback) || !is_callable($this-callback)) {
			throw new Exception\ServerErrorException('Null or non-callback set on Password grant');
		}

		$clientId = $this->server->getRequest()->request->get('client_id', $this->server->getRequest()->getUser());
		if (is_null($clientId)) {
		throw new Exception\InvalidRequestException('client_id');
		}

		return function ($username, $password) use ($clientId) {
			return call_user_func($this->callback, $clientId, $username, $password);
		};
	}
}
