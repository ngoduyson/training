<?php

namespace Benlly\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class User extends Authenicatable implements Transformable
{
	use TransformableTrait;

	protected $fillable = [
		'oauth_client_id', 'login', 'status', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];
}
