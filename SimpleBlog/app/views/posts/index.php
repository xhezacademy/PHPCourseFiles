{% extends "layout/main.php" %}

{% block title %}View All Posts – {% endblock %}

{% block main %}
<h1>Latest Blog Posts</h1>

<ol>
{% for post in posts %}
  <li>
    <h2><a href="{{ 'show/' ~ post.id }}">{{ post.title }}</a>
      <small><a href="edit/{{ post.id }}" class="btn btn-default btn-xs">Edit</a></small>
      <small><a href="delete/{{ post.id }}" class="btn btn-danger btn-xs">Delete</a></small>
    </h2>
  </li>
{% endfor %}
</ol>
{% endblock %}
