


<!-- JavaScript Bundle with Popper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('.newDir').click(function () {

            let person = prompt("نام فولدر");
            if (person == null) {
                return 1;
            }
            var url = $('input').val();

            if (person != null || person != "") {
                window.location.href = "mkdir"+'?pach='+url+'/'+person;
            }
        });

        $('.deleteDir').click(function (){
            let dir = $(event.target).attr('dir');
            let url = '{{$pach}}';

            console.log(dir);
            return 1;
            window.location.href = "/dldir?dir="+url+'/'+dir;
        });

    });
</script>
</body>
</html>
