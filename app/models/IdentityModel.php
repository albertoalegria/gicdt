<?php

class IdentityModel extends Eloquent
{
	
	protected $table='identidad';
	protected $primaryKey = 'id_user';
	public $timestamps = false;
}