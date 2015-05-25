<?php

use Intervention\Image\ImageManagerStatic as Image;

/**
 * Controller to handle User related routes
 */
class UsersController extends Controller
{
    /**
     * @var $user
     */
    protected $user = null;

    public function __construct()
    {
        $this->user = User::isAuthenticated();
    }

    public function index()
    {
        $users = User::findMany();

        $this->view('users/index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOne($id);

        $this->view('users/show', compact('user'));
    }

    public function account()
    {
        if ($this->user === null) {
            header('Location: ' . HTTP_ROOT . 'auth/login');
        }

        $this->view('users/account', null);
    }

    public function update()
    {
        if ($this->user === null) {
            header('Location: ' . HTTP_ROOT . 'auth/login');
        }

        if (Input::get('submit')) {
            $old_pass = Input::get('old_pass');
            $new_pass = password_hash(Input::get('new_pass'), PASSWORD_DEFAULT);

            if (isset($old_pass)) {
                if (empty($new_pass)) {
                    die('Please missing.');
                }

                $this->user->changePassword($old_pass, $new_pass);
            }

            $avatar = $_FILES['avatar'];
            if (isset($avatar)) {
                $this->user->saveAvatar($avatar);
            }
        }
    }
}
