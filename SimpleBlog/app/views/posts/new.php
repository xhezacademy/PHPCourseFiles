{% extends "layout/main.php" %}

{% block title %}New Post – {% endblock %}

{% block main %}
<h1>New Post</h1>

{% include 'posts/_form.php' %}
{% endblock %}
