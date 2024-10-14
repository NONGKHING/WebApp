<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BK MOVIES</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #111;
        }

        .row__poster {
            width: 100%;
            object-fit: contain;
            max-height: 100px;
            margin-right: 10px;
            transition: transform 450ms;
        }

        .row__posters {
            display: flex;
            overflow-y: hidden;
            overflow-x: scroll;
            padding: 20px;
        }

        .row__poster:hover {
            transform: scale(1.08);
        }

        .row__posters::-webkit-scrollbar {
            display: none;
        }

        .row__posterLarge {
            max-height: 250px;
        }

        .row__posterLarge:hover {
            transform: scale(1.09);
        }

        .row {
            color: white;
            margin-left: 20px;
        }

        /* banner */
        .banner {
            background-image: url('{{ 'Asset/frontend/images/banner.jpg' }}');
            background-size: cover;
            background-position: center center;
            color: white;
            object-fit: contain;
            height: 448px;
        }

        .banner__contents {
            margin-left: 30px;
            padding-top: 140px;
            height: 190px;
        }

        .banner__title {
            font-size: 3rem;
            font-weight: 800;
            padding-bottom: 0.3rem;
        }

        .banner__description {
            width: 45rem;
            line-height: 1.3;
            padding-top: 1rem;
            font-size: 0.8rem;
            max-width: 360px;
            height: 180px;
        }

        .banner__button {
            cursor: pointer;
            color: #fff;
            outline: none;
            border: none;
            font-weight: 700;
            border-radius: 0.2vw;
            padding-left: 2rem;
            padding-right: 2rem;
            margin-right: 1rem;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            background-color: rgba(51, 51, 51, 0.5);
        }

        .banner__button:hover {
            color: #000;
            background-color: #e6e6e6;
            transition: all 0.2s;
        }

        .banner--fadeBottom {
            margin-top: 145px;
            height: 7.4rem;
            background-image: linear-gradient(180deg, transparent, rgba(37, 37, 37, 0.61), #111);
        }

        /* nav */

        .nav__logo {
            width: 150px;
            object-fit: contain;
        }

        .nav__avatar {
            width: 30px;
            object-fit: contain;
        }

        .nav {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 20px;
            /* background-color: #111; */
            z-index: 1;
            transition-timing-function: ease-in;
            transition: all 0.5s;
        }

        .nav__black {
            background-color: #111;
        }

        button {
            background-color: #d81f26;
            /* สีแดงเข้มแบบ Netflix */
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button a {
            color: inherit;
            text-decoration: none;
        }

        button:hover {
            background-color: #b9090b;
            /* สีแดงเข้มขึ้นเมื่อ hover */
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <!-- nav -->
    <div id="nav" class="nav">
        <img class="nav__logo" src="{{ Asset('Asset/frontend/images/bk-logo.png') }}" alt="" />
        <button type="submit"><a href="{{ route('login') }}">Log In</a></button>
    </div>

    <!-- header -->
    <header class="banner">
        <div class="banner__contents">
            <h1 class="banner__title">Money Heist</h1>
            <div class="banner__buttons">
                <button class="banner__button">Play</button>
                <button class="banner__button">My List</button>
            </div>
            <h1 class="banner__description">
                To carry out the biggest heist in history, a mysterious man called The Professor recruits
                a band of eight robbers who have a single characteristic: n...
            </h1>
        </div>
        <div class="banner--fadeBottom"></div>
    </header>

    <!-- Netflix Originals -->
    <div class="row">
        <h2>BK MOVIES ORIGINALS</h2>
        <div class="row__posters">
            <img class="row__poster row__posterLarge" src="{{ Asset('Asset/frontend/images/large-movie1.jpg') }}"
                alt="" />

            <img class="row__poster row__posterLarge" src="{{ Asset('Asset/frontend/images/large-movie2.jpg') }}"
                alt="" />

            <img class="row__poster row__posterLarge" src="{{ Asset('Asset/frontend/images/large-movie3.jpg') }}"
                alt="" />

            <img class="row__poster row__posterLarge" src="{{ Asset('Asset/frontend/images/large-movie4.jpg') }}"
                alt="" />

            <img class="row__poster row__posterLarge" src="{{ Asset('Asset/frontend/images/large-movie5.jpg') }}"
                alt="" />

            <img class="row__poster row__posterLarge" src="{{ Asset('Asset/frontend/images/large-movie6.jpg') }}"
                alt="" />

            <img class="row__poster row__posterLarge" src="{{ Asset('Asset/frontend/images/large-movie7.jpg') }}"
                alt="" />

            <img class="row__poster row__posterLarge" src="{{ Asset('Asset/frontend/images/large-movie8.jpg') }}"
                alt="" />
        </div>
    </div>

    <!-- Trending Now -->
    <div class="row">
        <h2>K-Dramas</h2>
        <div class="row__posters">
            <img class="row__poster" src="{{ Asset('Asset/frontend/images/K1.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/K2.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/K3.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/K4.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/K5.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/K6.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/K7.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/K8.jpg') }}" alt="" />
        </div>
    </div>

    <!-- Top Rated -->
    <div class="row">
        <h2>Western TV Shows</h2>
        <div class="row__posters">
            <img class="row__poster" src="{{ Asset('Asset/frontend/images/w1.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/w2.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/w3.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/w4.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/w5.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/w6.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/w7.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/w8.jpg') }}" alt="" />
        </div>
    </div>

    <!-- Action Movies -->
    <div class="row">
        <h2>Action Movies</h2>
        <div class="row__posters">
            <img class="row__poster" src="{{ Asset('Asset/frontend/images/A1.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/A2.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/A3.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/A4.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/A5.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/A6.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/A7.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/A8.jpg') }}" alt="" />
        </div>
    </div>

    <!-- Horror Movies -->
    <div class="row">
        <h2>Horror Movies</h2>
        <div class="row__posters">
            <img class="row__poster" src="{{ Asset('Asset/frontend/images/H1.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/H2.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/H3.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/H4.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/H5.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/H6.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/H7.jpg') }}" alt="" />

            <img class="row__poster" src="{{ Asset('Asset/frontend/images/H8.jpg') }}" alt="" />
        </div>
    </div>


    <script>
        const nav = document.getElementById('nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY >= 100) {
                nav.classList.add('nav__black');
            } else {
                nav.classList.remove('nav__black');
            }
        });
    </script>
</body>

</html>
