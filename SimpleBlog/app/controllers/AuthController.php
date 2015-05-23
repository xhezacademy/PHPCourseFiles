<?php

/**
 * Authentication Class
 */
class AuthController extends Controller
{
    public function login()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ../');
        }

        $this->view('auth/login', null);
    }

    public function postLogin()
    {
        if (Input::get('submit')) {
            $email = Input::get('email');
            $pass = Input::get('password');

            $user = DB::table('users')
                ->where('email', '=', $email)
                // ->asObject('User', [])
                ->first();

            if ($user) {
                $checkPassword = password_verify($pass, $user->password);

                if (!$checkPassword) {
                    die('Password did not match.');
                }

                $_SESSION['user'] = $user->email;
                header('Location: ../');
            } else {
                die('There is no user with that email.');
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: ../');
    }

    public function register()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . HTTP_ROOT);
        }

        $this->view('auth/register', null);
    }

    public function postRegister()
    {
        if (Input::get('submit')) {
            $name  = Input::get('name');
            $email = Input::get('email');
            $pass  = Input::get('password');
            $pass1 = Input::get('confirm_password');

            if ($pass !== $pass1) die('Password does not match.');
            if (!isset($email)) die('Email must be set.');

            $encrypt = password_hash($pass, PASSWORD_DEFAULT);
            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $encrypt,
            );

            $insertId = DB::table('users')
                ->insert($data);

            if (isset($insertId)) {
                header('Location: ' . HTTP_ROOT);
            }
        }
    }
}
