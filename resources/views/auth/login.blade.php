<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BK Login</title>
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
    <nav>
        <a href="#"><img src="{{ Asset('Asset/frontend/images/bk-logo.png') }}" alt="logo"></a>
    </nav>
    <div class="form-wrapper">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}" class="login-form row">
            @csrf
            <div class="form-control">
                <div class="form-group">
                    <input type="text" id="loginemail" class="form-control" name="email"  required>
                        <label for="loginemail">Email</label>

                </div>
            </div>
            <div class="form-control">
                <div class="form-group">
                    <input type="password" id="loginPassword" class="form-control" name="password"
                        required>
                        <label for="loginPassword">Password</label>

                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Login</button>

                <!-- แสดงข้อความหากมีข้อผิดพลาด -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $errors)
                                <li>{{ $errors }}</li>
                            @endforeach
                        </ul>
                        <p class="mt-4 mb-0">Not a member yet? <a href="{{ route('register') }}">Register Here</a></p>
                    </div>
                @endif

                <div class="form-help">
                    <label class="remember-me">
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                </div>
            </div>

        </form>

    </div>
</body>

</html>
    