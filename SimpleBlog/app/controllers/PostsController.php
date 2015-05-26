<?php
namespace SimpleBlog\controllers;

use SimpleBlog\Core\Controller;
use SimpleBlog\Models\Post;
/**
 * Posts Controller
 */
class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::findMany();

        $this->view('posts/index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOne($id);
        $user = $post->user()->findOne();

        // if ($post === null) {
        //   die('There is no post with that ID.');
        // }

        $this->view('posts/show', compact('post', 'user'));
    }

    public function create()
    {
        return $this->view('posts/new', null);
    }

    public function postCreate()
    {
        $title = Input::get('title');
        $body  = Input::get('body');

        if (empty($title) || empty($body)) {
            die('Title and/or body cannot be empty.');
        }

        $slug = strtolower(str_replace(' ', '-', $title));
        $pub_date = Carbon\Carbon::now();

        $user = User::where('email', $_SESSION['user'])->findOne();

        $data = array(
            'title' => $title,
            'slug'  => $slug,
            'body'  => $body,
            'user_id' => $user->id,
            'created_at' => $pub_date,
            'updated_at' => $pub_date,
        );

        $post = Post::create();
        // $post->title = $title;
        $post->set($data);
        $post->save();

        if (!empty($insertId)) {
            header('Location: show/' . $insertId);
        }
    }

    public function edit($id)
    {
        $post = Post::findOne($id);

        return $this->view('posts/edit', compact('post'));
    }

    public function update()
    {
        $id = Input::get('post_id');

        $data = array(
            'title' => Input::get('title'),
            'body'  => Input::get('body'),
        );

        $post = Post::findOne($id)->set($data);

        if ($post->save()) {
            header('Location: ' . HTTP_ROOT . 'posts/show/' . $id);
        }
    }

    /**
     * Delete a Post
     * @param  (int) $id Post ID.
     * @return (void)
     */
    public function delete($id)
    {
        if (empty($id)) {
            die('Empty ID');
        }

        $post = Post::findOne($id);

        if ($post->delete()) {
            header('Location: ' . HTTP_ROOT . 'posts/');
        }
    }

    protected function setBaseLayout($name) {}
}
