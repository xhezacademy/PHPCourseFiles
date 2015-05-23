{% extends "layout/main.php" %}

{% block title %}View All Posts – {% endblock %}

{% block main %}
<h2>Latest Blog Posts</h2>

<ol>
{% for post in posts %}
  <li>
    <h3><a href="{{ HTTP_ROOT ~ 'posts/show/' ~ post.id }}">{{ post.title }}</a>
      <small><a href="{{ HTTP_ROOT ~ 'posts/edit/' ~ post.id }}" class="btn btn-default btn-xs">Edit</a></small>
      <small><a href="{{ HTTP_ROOT ~ 'posts/delete/' ~ post.id }}" class="btn btn-danger btn-xs">Delete</a></small>
    </h3>
  </li>
{% endfor %}
</ol>
{% endblock %}
