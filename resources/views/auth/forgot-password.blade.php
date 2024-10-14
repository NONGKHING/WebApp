<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BK Forgot Password</title>
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
            padding: 70px;
            width: 450px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.75);
        }

        .form-wrapper h2 {
            color: #fff;
            font-size: 2rem;
        }

        .form-wrapper form {
            margin: 25px 0 65px;
        }

        .form-control {
            height: 50px;
            position: relative;
            margin-bottom: 16px;
        }

        .form-control input {
            height: 100%;
            width: 100%;
            background: #333;
            border: none;
            outline: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
            padding: 0 20px;
        }

        .form-control input:is(:focus, :valid) {
            background: #444;
            padding: 16px 20px 0;
        }

        .form-control label {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1rem;
            pointer-events: none;
            color: #8c8c8c;
            transition: all 0.1s ease;
        }

        .form-control input:is(:focus, :valid)~label {
            font-size: 0.75rem;
            transform: translateY(-130%);
        }

        form button {
            width: 100%;
            padding: 16px 0;
            font-size: 1rem;
            background: #e50914;
            color: #fff;
            font-weight: 500;
            border-radius: 4px;
            border: none;
            outline: none;
            margin: 25px 0 10px;
            cursor: pointer;
            transition: 0.1s ease;
        }

        form button:hover {
            background: #c40812;
        }

        .form-wrapper a {
            text-decoration: none;
        }

        .form-wrapper a:hover {
            text-decoration: underline;
        }

        .form-wrapper :where(label, p, small, a) {
            color: #b3b3b3;
        }

        .form-help {
            display: flex;
            justify-content: space-between;
        }

        .remember-me {
            display: flex;
        }

        .remember-me input {
            margin-right: 5px;
            accent-color: #b3b3b3;
        }

        .form-help :where(label, a) {
            font-size: 0.9rem;
        }

        .form-wrapper small {
            display: block;
            margin-top: 15px;
            color: #b3b3b3;
        }

        .form-wrapper small a {
            color: #0071eb;
        }

        @media (max-width: 740px) {
            body::before {
                display: none;
            }

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
            }

            .form-wrapper form {
                margin: 25px 0 40px;
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
            <h2>Forgot Password</h2><br>
            <div class="mb-4 text-sm" style="color: gray;">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
            <div class="mb-4 font-medium text-sm" style="color: #28a745;">
                {{ session('status') }}
            </div>
        @endif


            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-control">
                    <div class="form-group">
                        <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                        <label for="email">{{ __('Email') }}</label>
                    </div>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-primary" type="submit">{{ __('Email Password Reset Link') }}</button>
                </div>
            </form>
        </div>
    </body>

    </html>
