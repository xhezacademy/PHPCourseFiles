{% extends "layout/main.php" %}

{% block title %}Login{% endblock %}

{% block main %}
<div id="wrap">
    <form method="POST" action="{{ HTTP_ROOT ~ 'auth/postLogin' }}">
        <label for="email">Email</label>
        <input type="email" name="email">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password">

        <br>
        <input type="submit" name="submit" value="Login">
    </form>
</div>
{% endblock %}
