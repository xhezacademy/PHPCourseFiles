{% extends "layout/main.php" %}

{% block title %}{{ title }} – {% endblock %}

{% block main %}
<a href="../">Back</a>
<span class="pull-right">
    <small><a href="edit/{{ post.id }}" class="btn btn-default btn-xs">Edit</a></small>
    <small><a href="delete/{{ post.id }}" class="btn btn-danger btn-xs">Delete</a></small>
</span>
<hr>

<h1>{{ title }}</h1>

<p>{{ body }}</p>
{% endblock %}
