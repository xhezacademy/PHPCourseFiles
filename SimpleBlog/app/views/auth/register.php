{% extends 'layout/main.php' %}

{% block title %}Register - {% endblock %}

{% block main %}
    <form method="POST" action="{{ HTTP_ROOT ~ 'auth/postRegister' }}">
      <label for="name">Name</label>
      <input type="text" name="name"><br>

      <label for="email">Email</label>
      <input type="email" name="email"><br>

      <label for="password">Password</label>
      <input type="password" name="password"><br>

      <label for="confirm_password">Confirm Password</label>
      <input type="password" name="confirm_password"><br>

      <input type="submit" name="submit" value="Register">
    </form>
{% endblock %}
