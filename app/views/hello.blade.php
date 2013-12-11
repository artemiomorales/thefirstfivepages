<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The First Five Pages - Coming Soon</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
        @import url(//fonts.googleapis.com/css?family=Lato:300,400,700);

        body {
            margin:0;
            font-family:'Lato', sans-serif;
            text-align:center;
            color: #999;
        }

        h1 {
            font-size: 2.1em;
            font-weight: bold;
            margin-top: .67em;
            margin-bottom: .67em;
        }

        .welcome {
           width: 505px;
           height: 300px;
           position: relative;
           top: 150px;
           margin: 0 auto;
        }

        a, a:visited {.5
            color:#FF5949;
            text-decoration:none;
        }

        a:hover {
            text-decoration:underline;
        }

        ul li {
            display:inline;
            margin:0 1.2em;
        }

        p {
            margin:2em 0;
            color:#555;
        }

        .submit-button {
            width: 250px;
            height: 29px;
            border-radius: 5px;
        }

        .btn {
            padding: 4px 12px !important;
        }
    </style>
</head>
<body>
    <div class="welcome">
        <img src="assets/img/ffp_logo.png" />

        <form action="{{ url('/email') }}" method="POST" accept-charset="UTF-8">
            <input name="_token" type="hidden" value="83KCsmJF1Z2LMZfhb17ihvt9ks5NEcAwFoRFTq6u">
        </form>
        <h1>An app for discovering new fiction</h1>
        <h1>Coming soon</h1>

        <p></p>
        {{ Form::open(array('url' => 'submit')) }}
            {{ Form::text('email', 'Enter an email address...', array('class' => 'submit-button' )) }}
            <button class="btn btn-default" type="submit">Sign Up</button>
        {{ Form::close() }}
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
