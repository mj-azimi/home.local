<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            overflow-x: hidden;
        }

        nav {
            font-weight: bolder;
        }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
    <header>
        <nav class="row text-center text-info">
            <button class="col-md-2 bg-light newDir">فولدر جدید</button>
            <input type="hidden" value='{{ $pach }}'>
            <div class="col-md-4"></div>
            <div class="col-md-2 bg-light newfile">
                <form action="/mkfiledn" method="post">
                    @csrf
                    <input type="text" name="url" placeholder="url">
                    <input type="text" name="name" placeholder="نام فایل به همراه پسوند">
                    <input type="submit" value="شروع دانلود">
                </form>
            </div>
        </nav>

    </header>
