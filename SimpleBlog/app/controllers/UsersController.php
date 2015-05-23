<?php

/**
 * Controller to handle User related routes
 */
class UsersController extends Controller
{
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
}
