{% extends 'layout/main.php' %}

{% block title %}All Users - {% endblock %}

{% block main %}
	<dl>
{% for user in users %}
	<dt><a href="{{ HTTP_ROOT ~ 'users/show/' ~ user.id }}">{{ user.name }}</a></dt>
	<dd>{{ user.email }}</dd>
{% endfor %}
</dl>
{% endblock %}
