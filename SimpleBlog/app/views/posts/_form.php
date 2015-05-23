<form action="{{ HTTP_ROOT }}posts/update" method="post">
  <p>
    <label for="title">Title</label>
    <br>
    <input type="text" name="title" value="{% if post.title %}{{ post.title }}{% endif %}">
  </p>

  <p>
    <label for="body">Body</label>
    <br>
    <textarea name="body" cols="30" rows="10">
{% if post.body %}
{{ post.body|trim }}{% endif %}
    </textarea>
  </p>

  <input type="hidden" name="post.id" value="{{ post.id }}">
  <input type="submit" name="publish" value="Submit">
</form>
