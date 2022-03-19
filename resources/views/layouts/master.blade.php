<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("head","Home")</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    @yield("style")
</head>
<body>


    @include("layouts.header")
    @yield("car")

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-10">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @yield("content")
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        @yield("whyChoiceCar")
    </div>

    <div class="container-fluid p-0">
        @include("layouts.footer")
    </div>

<script src="{{ asset("js/app.js") }}" defer></script>
@yield("foot")
</body>
</html>
