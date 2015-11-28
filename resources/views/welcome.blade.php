<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
     
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                display: table-cell;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 16px;
            }
        </style>
    </head>
    <body>
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
