<?php
// namespace SimpleBlog\Controllers;

// use SimpleBlog\Core\Controller;

/**
* Posts Controller
*/
class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        return $this->view('posts/index', compact('posts'));
    }

    public function show($id)
    {
        $post = DB::table('posts')->find($id);

        // if ($post === null) {
        //   die('There is no post with that ID.');
        // }

        return $this->view('posts/show', [
            'title' => $post->title,
            'body'  => $post->body,
        ]);
    }

    public function create()
    {
        return $this->view('posts/new', null);
    }

    public function postCreate()
    {
        $title = Input::get('title');
        $body = Input::get('body');

        if (empty($title) || empty($body)) {
            die('Title and/or body cannot be empty.');
        }

        $slug = strtolower(str_replace(' ', '-', $title));
        $pub_date = Carbon\Carbon::now();

        $data = array(
            'title' => $title,
            'slug'  => $slug,
            'body'  => $body,
            'created_at' => $pub_date,
            'updated_at' => $pub_date,
        );

        $insertId = DB::table('posts')->insert($data);

        if (!empty($insertId)) {
            header('Location: show/'.$insertId);
        }
    }

    public function edit($id)
    {
        $post = DB::table('posts')->find($id);

        return $this->view('posts/edit', compact('post'));
    }

    public function update()
    {
        $id = $_POST['post_id'];
        $data = array(
            'title' => $_POST['title'],
            'body'  => $_POST['body'],
        );

        $post = DB::table('posts')->where('id', $id)->update($data);

        if ($post === null) {
            header('Location: show/'.$id);
        }
    }

    public function delete($id)
    {
        if (empty($id)) {
            die('Empty ID');
        }

        DB::table('posts')->where('id', '=', $id)->delete();

        $post = DB::table('posts')->find($id);

        if ($post === null) {
            header('Location: ../');
        }
    }
}
