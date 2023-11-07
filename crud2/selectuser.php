<?php
include('Query.php');
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <div class="container mt-5">
        <table class="table table-bordered ">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
$query = $pdo ->Query("select * from users");
 $allusers= $query->fetchAll(PDO :: FETCH_ASSOC);   
   foreach($allusers as $singleuser){
   ?>
    <tr>
     
      <td><?php echo $singleuser['Name']?></td>
      <td><?php echo $singleuser['Email']?></td>
      <td><?php echo $singleuser['Password']?></td>
      <th><a href="edituser.php?id=<?php echo $singleuser['id']?>" class="btn btn-outline-dark">Edit</a></th>
      <td><a href="?id=<?php echo $singleuser['id']?>" class="btn btn-outline-dark">Delete</a></td>
    </tr>
<?php
   }
?>
  </tbody>
</table>
</div>
    </body>
    </html>