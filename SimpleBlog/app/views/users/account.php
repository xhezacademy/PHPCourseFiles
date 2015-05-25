{% extends "layout/main.php" %}

{% block title %}Account Settings - {% endblock %}

{% block main %}
    <h2>Account Page</h2>

    <div class="col-md-6">
        <form method="post" action="{{ HTTP_ROOT }}users/update">
            <div class="form-control">
                <label for="old_pass">Old Password</label>
                <input type="password" name="old_pass">
            </div>
            <br>
            <div class="form-control">
                <label for="new_pass">New Password</label>
                <input type="password" name="new_pass">
            </div>
            <br>
            <input type="submit" name="submit" value="Save">
        </form>
    </div>
{% endblock %}
