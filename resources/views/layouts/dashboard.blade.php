<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name') }}</title>

    @stack('before-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        body {
            background: #ebf1f3;
        }

        #side_nav {
            background: #24312c;
            min-width: 225px;
            max-width: 225px;
            transition: all 0.3s;
        }

        .content {
            min-height: 100vh;
            width: 100%;
        }

        hr.h-color {
            background: #eee;
        }

        .sidebar li.active {
            background: #69aa90;
            border-radius: 8px;
        }

        .sidebar li.active a,
        .sidebar li.active a:hover {
            color: #031220;
        }

        .sidebar li a {
            color: #fff;
        }

        @media(max-width: 767px) {
            #side_nav {
                margin-left: -250px;
                position: absolute;
                min-height: 100vh;
                z-index: 1;

            }

            #side_nav.active {
                margin-left: 0;
            }
        }
    </style>
    @stack('after-style')
</head>

<body>
    <div class="main-container d-flex">
        @include('includes.sidebar')

        <div class="content">
            @include('includes.navbar')

            <div class="dashboard-content px-3 pt-4">
               @yield('content')
            </div>
        </div>
    </div>


    @stack('before-script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"></script>

    <script>
        $('.open-btn').on('click', function() {
            $('.sidebar').addClass('active');

        });


        $('.close-btn').on('click', function() {
            $('.sidebar').removeClass('active');

        })
    </script>

    @stack('after-script')
</body>

</html>
