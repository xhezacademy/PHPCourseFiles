<?php
/**
 * User Model
 */
class User extends Model
{
	public static $_table = 'users';

	public function posts()
	{
        return $this->hasMany('Post');
    }
}
