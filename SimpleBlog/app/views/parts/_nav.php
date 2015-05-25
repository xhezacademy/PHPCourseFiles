<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ HTTP_ROOT }}">
                <span class="glyphicon glyphicon-home" aria-hidden="true"> SimpleApp</span>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ HTTP_ROOT ~ 'posts' }}">Posts <span class="sr-only">(current)</span></a></li>
                {% if help.logged_in %}<li><a href="{{ HTTP_ROOT ~ 'users/show/' ~ help.current_user }}">Profile</a></li>{% endif %}
              </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {% if help.logged_in %}Signed in as {{ help.auth() }} {% endif %}<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        {% if not help.auth() %}
                        <li><a href="{{ HTTP_ROOT ~ 'auth/login'}}">Login</a></li>
                        <li><a href="{{ HTTP_ROOT ~ 'auth/register'}}">Register</a></li>
                        {% else %}
                        <li><a href="{{ HTTP_ROOT ~ 'users/account'}}"><span class="glyphicon glyphicon-cog" aria-hidden="true"> Settings</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{ HTTP_ROOT ~ 'auth/logout' }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a></li>
                        {% endif %}
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
