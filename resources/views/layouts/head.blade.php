<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            background-color: #4d4d4d;
            font-family: 'Nunito', sans-serif;
        }

        .container {
            width: 1200px;
            margin: auto;
        }

        nav {
            height: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav img {
            height: 70px;
        }

        a {
            text-decoration: none;
            color: white;
            margin-left: 20px;
        }

        footer {
            display: flex;
            justify-content: space-between;
        }

        footer>div {
            width: 23%;
            display: flex;
            flex-direction: column;
        }

        footer>div >a{
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="container">
            <div>
                <img src="https://it.freelogodesign.org/Content/img/logo-samples/flooop.png" alt="">
            </div>
            <div>
                <a href="/">Home</a>
                <a href="doc">Doc</a>
            </div>
        </nav>
    </header>