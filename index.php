<?php
require 'function.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Fredoka One', cursive;
        }

        .top_title {
            font-size: 35px;
            margin-top: 50px;
        }

        .sub_title {
            font-size: 20px;
            color: gray;
        }

        .form-control {
            display: block;
            margin: auto;
        }
    </style>

    <title>Hello, world!</title>
</head>

<body>
    <div class="container text-center">
        <div class="title">
            <h1 class="top_title">Mainkuy Get Video Instagram</h1>
            <h3 class="sub_title">Also can get photos, IGTV. hehehe</h3>
        </div>

        <div class="form mt-5">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Input Your Url's Instagram Post</label>
                    <input type="url" class="form-control" id="url" aria-describedby="urlIg" style="width : 50%" name="url">
                    <small id="urlIg" class="form-text text-muted">We'll never share your email with anyone else.</small>

                    <button type="sumbit" class="btn btn-dark mt-2" style="width: 150px" name="submit">Download Now! </button>
                </div>
            </form>
        </div>

        <div class="hasil">
            <?php if (isset($_POST["submit"])) {
                echo input($_POST["url"]);
                // var_dump($_POST["url"]);
            } ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>