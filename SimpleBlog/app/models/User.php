<?php
/**
 * User Model
 */
class User extends Model
{
	public static $_table = 'users';

	public function posts()
	{
        return $this->hasMany('Post', 'user_id');
    }

    public static function isAuthenticated()
    {
        if (array_key_exists('user', $_SESSION) && !empty($_SESSION['user'])) {
            return self::where('email', $_SESSION['user'])->findOne();
        }
    }
}
