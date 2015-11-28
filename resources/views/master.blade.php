<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
       
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Laravel Project</a>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/projects">Projects</a></li>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5 - Project Management System</div>
                @section('content')
                This is the master sidebar.
                @show
            </div>
        </div>
    </body>
</html>
