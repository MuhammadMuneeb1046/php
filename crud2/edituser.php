<?php
include('query.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query=$pdo ->prepare(" select *from users where id=:uid");
    $query->bindParam('uid',$id);
    $query->execute();
    $res =$query->fetch(PDO::FETCH_ASSOC);
  ?>

      <form action="" class="container" method="post">
        <div class="form-group">
          <label for="">NAME</label>
          <input type="hidden" name="uId" value="<?php echo $res['id']?>">
          <input type="text" name="uName" value="<?php echo $res['Name']?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">EMAIL</label>
          <input type="text" name="uEmail"   value="<?php echo $res['Email']?>" id="" class="form-control" placeholder="" a`ria-describedby="helpId">
          <div class="form-group">
          <label for="">password</label>
          <input type="text" name="uPassword"   value="<?php echo $res['Password']?>"  id="" class="form-control" placeholder="" aria-describedby="helpId">
          <button name="edituser" type="submit"> updateUser</button>
         
        </div>
      </form>


  <?php
  }
  ?>
  </body>
</html>