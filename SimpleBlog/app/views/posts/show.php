{% extends "layout/main.php" %}

{% block title %}{{ title }} – {% endblock %}

{% block main %}
<a href="../">Back</a>
<span class="pull-right">
    <small><a href="{{ HTTP_ROOT ~ 'posts/edit/' ~ post.id }}" class="btn btn-default btn-xs">Edit</a></small>
    <small><a href="{{ HTTP_ROOT ~ 'posts/delete/' ~ post.id }}" class="btn btn-danger btn-xs">Delete</a></small>
</span>
<hr>

<h2>{{ post.title }}</h2>
<small>{{ post.pubDate() }}</small>

<p>{{ post.body }}</p>
{% endblock %}
