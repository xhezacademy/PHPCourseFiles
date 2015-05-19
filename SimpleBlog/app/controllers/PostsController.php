<?php
// namespace SimpleBlog\Controllers;

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

  public function create()
  {
    echo 'posts/new';
  }

  public function postCreate()
  {
    return;
  }
}

?>