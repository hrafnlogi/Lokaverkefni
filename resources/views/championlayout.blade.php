<!DOCTYPE html>
<html>
<head>
    <title>@yield('titill')</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/champstyle.css">

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
            color: powderblue;
        }

        .container {
            text-align: center;

            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
            float: left;
            background-color: #0a1827;
            border: maroon;
            border-style: outset;
            width: 45%;
            margin-left: 1em;
        }

        .title {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body background="@yield('splashart')">

<div class="container">
    <div id="championsbutton" class="">
        <a href='/champions.php' class='button'>Back</a>
    </div>
    <h1 style="font-size: 4.6em">@yield('champname')</h1>
    <div class="content">
        <div class="title">@yield('content')</div>

    </div>
</div>
@yield('footer')
</body>
</html>