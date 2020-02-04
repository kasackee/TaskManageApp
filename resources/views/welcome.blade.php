<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>課題管理システム</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f3f3f3;
                color: #f6993f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .content {
                text-align: center;
                width: 100%;
                height: 400px;
                margin-top: 200px;
            }

            .content > .window {
                height: 400px;
            }

            .title {
                font-size: 64px;
                font-weight: bold;
                font-family: 'Hiragino Maru Gothic ProN', 'Nunito', sans-serif;
            }

            .title-message {
                color: #636b6f;
                font-size: 28px;
                font-family: 'Hiragino Maru Gothic ProN', 'Nunito', sans-serif;
            }

            .header {
                text-align: right;
                padding: 20px;
            }

            .header > .button {
                display: inline;
                background-color: #f6993f;
                border-radius: 20px;
                padding: 8px;
                margin: 8px;
            }

            .header > .button > a {
                color: #f3f3f3;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="lp-wrapper">
            @if (Route::has('login'))
                <div class="header">
                    @auth
                        <div class="button">
                            <a href="{{ url('/home') }}">ダッシュボード</a>
                        </div>
                    @else
                        <div class="button">
                            <a href="{{ route('login') }}">ログイン</a>
                        </div>

                        @if (Route::has('register'))
                            <div class="button">
                                <a href="{{ route('register') }}">いますぐ始める</a>
                            </div>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="window">
                    <div class="window-header">

                    </div>
                    <div class="window-body">
                        <div class="title-message">
                            あなたの個人開発をサポート。
                        </div>
                        <div class="title m-b-md">
                            プロジェクト管理システムα
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
