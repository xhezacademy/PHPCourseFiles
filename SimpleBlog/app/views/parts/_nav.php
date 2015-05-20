<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <span class="glyphicon glyphicon-home" aria-hidden="true"> SimpleApp</span>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ 'posts/' }}">Posts <span class="sr-only">(current)</span></a></li>
                <li><a href="#">About</a></li>
              </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{% if auth %}Signed in as {{ auth }} {% endif %}<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        {% if not auth %}
                        <li><a href="{{ 'auth/login'}}">Login</a></li>
                        <li><a href="{{ 'auth/register'}}">Register</a></li>
                        {% else %}
                        <li><a href="#"><span class="glyphicon glyphicon-cog" aria-hidden="true"> Settings</span></a></li>
                        <li class="divider"></li>
                        <li><a href="{{ 'auth/logout' }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Out</a></li>
                        {% endif %}
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
