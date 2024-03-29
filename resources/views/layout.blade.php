<!DOCTYPE html>
<html>
<head>
    <title>Champions</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/style.css">

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
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            font-weight: bold;
        }
    </style>
</head>
<body background="img/background2.jpg">
<div class="container">
    <div class="content">
        <div class="title">@yield('content')</div>

    </div>
</div>
@yield('footer')
</body>
</html>