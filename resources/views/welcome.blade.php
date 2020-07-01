<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AFM Heritage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
            }

            .links > a {
                color: #636b6f;
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

            .btn {
                padding: 30px;
            }

            .card-header {
                font-weight: bolder;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">AFM CONTENT APPLICATION</div>

                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <a href="/tracts" type="button" class="btn btn-outline-primary btn-block btn-lg">Tracts</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <a href="/bstudies" type="button" class="btn btn-outline-secondary btn-block btn-lg">Bible Study Outlines</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <a href="/cgs" type="button" class="btn btn-outline-success btn-block btn-lg">Collected Gospel Songs</a>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4">
                                                <a href="/sunsch" type="button" class="btn btn-outline-danger btn-block btn-lg">Sunday School Lessons</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <a href="" type="button" class="btn btn-outline-warning btn-block btn-lg">Marriage Seminars</a>
                                            </div>
                                            <div class="col-sm-6 col-md-4">
                                                <a href="/std" type="button" class="btn btn-outline-info btn-block btn-lg">Steps To Deliverance</a>
                                            </div>
                                        </div>
                                        <!-- <a href="/tracts" type="button" class="btn btn-outline-primary btn-block">Tracts</a>
                                        <a href="" type="button" class="btn btn-outline-secondary btn-block">Bible Study Outlines</a>
                                        <a href="" type="button" class="btn btn-outline-success btn-block">Collected Gospel Songs</a>
                                        <a href="" type="button" class="btn btn-outline-danger btn-block">Sunday School Lessons</a>
                                        <a href="" type="button" class="btn btn-outline-warning btn-block">Marriage Seminars</a>
                                        <a href="" type="button" class="btn btn-outline-info btn-block">Steps To Deliverance</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </body>
</html>
