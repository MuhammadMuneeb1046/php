<?php
    include("query.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Bootstrap 5!</title>
    </head>
    <body>
        <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="uName" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                <label for="">Email</label>
                <input type="email" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                <label for="">Password</label>
                <input type="password" name="uPassword" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                <button name="userData" type="submit" class="btn btn-outline-dark ">Submit</button>
            </div>
        </form>
        </div>
    </body>
</html>