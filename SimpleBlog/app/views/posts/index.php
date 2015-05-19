<h1>Latest Blog Posts</h1>

<ol>
{% for post in posts %}
  <li>
    <h2><a href="posts/show/{{ post.id }}">{{ post.title }}</a>
      <small><a href="posts/edit/{{ post.id }}">Edit</a></small>
    </h2>
  </li>
{% endfor %}
</ol>
