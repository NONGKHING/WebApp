<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }

        body {
            background: #000;
            position: relative;
            min-height: 100vh;
        }

        body::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0.5;
            width: 100%;
            height: 100%;
            background: url("http://codingstella.com/wp-content/uploads/2024/01/download-4.jpeg");
            background-position: center;
            z-index: -1;
        }

        nav {
            position: fixed;
            padding: 25px 60px;
            z-index: 1;
        }

        nav a img {
            width: 167px;
        }

        .form-wrapper {
            position: absolute;
            left: 50%;
            top: 50%;
            border-radius: 4px;
            padding: 40px;
            width: 450px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.85);
        }

        .form-wrapper h2 {
            color: #fff;
            font-size: 2rem;
            text-align: center;
        }

        .form-control {
            margin: 25px 0;
        }

        .form-control label {
            display: block;
            margin-bottom: 5px;
            color: #8c8c8c;
            font-size: 1rem;
        }

        .form-control input {
            width: 100%;
            padding: 15px 20px;
            background: #333;
            border: 1px solid #444;
            outline: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
        }

        .form-control input:focus {
            background: #444;
            border-color: #e50914;
        }

        .form-wrapper button {
            width: 100%;
            padding: 16px 0;
            font-size: 1rem;
            background: #e50914;
            color: #fff;
            font-weight: 500;
            border-radius: 4px;
            border: none;
            outline: none;
            cursor: pointer;
            transition: background 0.2s;
        }

        .form-wrapper button:hover {
            background: #c40812;
        }

        .form-wrapper a {
            color: #0071eb;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .form-wrapper a:hover {
            text-decoration: underline;
        }

        @media (max-width: 740px) {
            nav,
            .form-wrapper {
                padding: 20px;
            }

            nav a img {
                width: 140px;
            }

            .form-wrapper {
                width: 100%;
                top: 43%;
                padding: 20px;
            }
        }

        /* สไตล์สำหรับกล่องแสดงข้อผิดพลาด */
        .alert-danger {
            background-color: #e50914;
            color: #fff;
            border-radius: 4px;
            padding: 15px;
            margin-top: 20px;
            text-align: left;
        }

        .alert-danger ul {
            list-style: none;
            padding-left: 0;
        }

        .alert-danger li {
            margin: 5px 0;
        }

        /* สไตล์สำหรับลิงก์ Register */
        .alert-danger a {
            color: #97c5f5;
            text-decoration: none;
            font-weight: 500;
        }

        .alert-danger a:hover {
            text-decoration: underline;
        }
    </style>


</head>

<body>

    <body>
        <nav>
            <a href="#"><img src="{{ asset('Asset/frontend/images/bk-logo.png') }}" alt="logo"></a>
        </nav>
        <div class="form-wrapper">
            <h2>Reset Password</h2><br>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="form-control">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                </div>

                <div class="form-control">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="form-control">
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button>
                        {{ __('Reset Password') }}
                    </x-button>
            </form>
        </div>
    </body>

</html>
