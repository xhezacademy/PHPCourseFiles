<h1>Latest Blog Posts</h1>

<ol>
{% for post in posts %}
  <li>
    <h2><a href="{{ post.showUrl() }}">{{ post.title }}</a>
      <small><a href="edit/{{ post.id }}">Edit</a></small>
      <small><a href="delete/{{ post.id }}">Delete</a></small>
    </h2>
  </li>
{% endfor %}
</ol>
