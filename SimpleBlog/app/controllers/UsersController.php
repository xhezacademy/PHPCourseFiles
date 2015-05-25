<?php

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

            if (empty($new_pass) || empty($old_pass)) {
                die('Please missing.');
            }

            if (password_verify($old_pass, $this->user->password)) {
                $this->user->password = $new_pass;

                if ($this->user->save()) {
                    header('Location: ' . HTTP_ROOT);
                }
            } else {
                die('Wrong old password or empty new password.');
            }
        }
    }
}
