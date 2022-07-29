<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body{
            overflow-x:hidden;
        }
        nav{
            font-weight: bolder;
        }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body>
<header>
    <nav class="row text-center text-info">
        <button class="col-md-2 bg-light newDir">فولدر جدید</button>
        <input type="hidden" value='<?php echo"/d"; ?>'>
        <div class="col-md-2 bg-light">
            فایل جدید
        </div>
    </nav>

</header>

    






    <div class="row">



        <div class="col-md-12 ">
            <a href="/">
                <i class="bi bi-house-door-fill"></i>
            </a>

            <?php 
            foreach ($search as $item) {
            ?>
                <hr>
                <div class="bg-light text-white">
     
                        <a href="/home/<?php echo($item) ?>">
                            <i class="bi bi-file-earmark-fill"></i>
                            <?php echo ($item); ?> 
                        </a>

                </div>
                <?php
                }
                ?>

        </div>
    </div>




















<!-- JavaScript Bundle with Popper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.newDir').click(function () {

            let person = prompt("نام فولدر");
            var url = $('input').val();

            if (person != null || person != "") {
                window.location.href = "mkdir"+'?pach='+url+'/'+person;
            }
        });

        $('.deleteDir').click(function (){
            let dir = $(event.target).attr('dir');
            let url = '{{$pach}}';

            window.location.href = "/dldir?dir="+url+'/'+dir;
        });

    });
</script>
</body>
</html>

