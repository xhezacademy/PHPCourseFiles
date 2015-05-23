{% extends "layout/main.php" %}

{% block title %}Viewing User Profile – {% endblock %}

{% block main %}
<a href="../">Back</a>
<span class="pull-right">
    <small><a href="edit/{{ user.id }}" class="btn btn-default btn-xs">Edit</a></small>
    <small><a href="delete/{{ user.id }}" class="btn btn-danger btn-xs">Delete</a></small>
</span>
<hr>

<h3>{{ user.name }}</h3>

<ul>
	{% for post in user.posts.findMany() %}
	<li><a href="{{ HTTP_ROOT ~ 'posts/show/' ~ post.id }} ">{{ post.title }}</a></li>
	{% endfor %}
</ul>
{% endblock %}
