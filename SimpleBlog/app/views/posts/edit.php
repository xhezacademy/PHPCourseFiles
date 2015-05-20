{% extends "layout/main.php" %}

{% block title %}Editing Post – {% endblock %}

{% block main %}
<h1>Editing "{{ post.title }}"</h1>

{% include 'posts/_form.php' %}
{% endblock %}
