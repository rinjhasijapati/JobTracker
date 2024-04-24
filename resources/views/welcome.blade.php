<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@637&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&family=Oswald:wght@637&family=Roboto:wght@400;500;700;900&display=swap');

        * {
            overflow: hidden;
            background-color: #4296F8;

        }

        h1 {
            color: #E9EDDE;
            font-family: "Roboto", sans-serif;
            font-size: 5.5rem;
            display: flex;
            justify-content: start;
            padding-left: 70px;
            padding-top: 40px;
        }

        p {
            color: #E9EDDE;
            font-family: "Roboto", sans-serif;
            font-size: 1.1rem;
            display: flex;
            justify-content: start;
            padding-left: 70px;
            padding-bottom: 10px;
        }

        a {
            text-decoration: none;
            background-color: #E9EDDE;
        }

        /* a:hover {
            background-color: #4296F8;
            transition: all 0.3s ease 0s;
        } */

        button {
            padding: 1em 2em;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 600;
            color: #4296F8;
            background-color: #E9EDDE;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }

        /* button:hover {
            background-color: #4296F8;
            box-shadow: 0px 15px 20px #E9EDDE;
            color: #E9EDDE;
            transform: translateY(-7px);
        }

        button:active {
            transform: translateY(-1px);
        } */

        .btn-container {
            display: flex;
            justify-content: start;
            padding-left: 70px;
            margin-top: 20px;
        }

        .btn-container button {
            margin-right: 20px;
        }
    </style>


</head>

<body class="antialiased">
    <div>
        <div class="head">
            <h1>JobTrack:<br> Navigating careers, <br>one step at a time.</h1>
            <p>Are you tired of losing track of your job applications? Look no further than JobTrack!<br> Our user-friendly platform simplifies the entire process from submitting applications<br> to tracking their status.Take control of your job search journey today!
            </p>
            <div class="btn-container">
                @if (Route::has('login'))
                @auth
                <button><a href="{{ url('/dashboard') }}">Dashboard</a></button>
                @else
                <button><a href="{{ route('login') }}" class="btn1">Log in</a></button>
                @if (Route::has('register'))
                <button><a href="{{ route('register') }}" class="btn2">Register</a></button>
                @endif
                @endauth

                @endif
            </div>
        </div>
    </div>
    </div>
</body>

</html>