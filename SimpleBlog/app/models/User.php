<?php
namespace SimpleBlog\Models;

use SimpleBlog\Interfaces\ModelInterface;

/**
 * User Model
 */
class User extends \Model implements ModelInterface
{
	public static $_table = 'users';
//    public static $_table_use_short_name = true;

	public function posts()
	{
        return $this->hasMany('SimpleBlog\Models\Post', 'user_id');
    }

    public static function isAuthenticated()
    {
        if (array_key_exists('user', $_SESSION) && !empty($_SESSION['user'])) {
            return self::where('email', $_SESSION['user'])->findOne();
        }

        return false;
    }

    public function storeAvatar($avatar)
    {
        $fileTarget = "public/uploads/" . $avatar['name'];
        // Image::configure(array('driver' => 'gd'));
        // $img = Image::make($_FILES['avatar']['tmp_name']);
        // $img->save($fileTarget);
        // var_dump($img);
        // die();
    }

    public function changePassword($oldPass, $newPass)
    {
        if (password_verify($oldPass, $this->user->password)) {
            $this->user->password = $newPass;

            if ($this->user->save()) {
                header('Location: ' . HTTP_ROOT);
            }
        } else {
            die('Wrong old password or empty new password.');
        }
    }
}
