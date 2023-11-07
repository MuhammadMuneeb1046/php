<?php
    include("dbcon.php");
    if(isset($_POST["userData"])){
        $userName = $_POST["uName"];
        $userEmail = $_POST["uEmail"];
        $userPassword = $_POST["uPassword"];
        $query = $pdo->prepare("insert into users(name,email,password) values (:uName,:uEmail,:uPassword)");
        $query->bindParam("uName", $userName);
        $query->bindParam("uEmail", $userEmail);
        $query->bindParam("uPassword", $userPassword);
        $query->execute();
        echo "<script>alert('data insert successful')</script>";
    }
// edit user
    if(isset($_POST["edituser"])){
        $uId = $_POST["uId"];
        $uName = $_POST["uName"];
        $uEmail = $_POST["uEmail"];
        $uPassword = $_POST["uPassword"];
        $query = $pdo->prepare("update users set name = :userName, email = :userEmail, password = :userPassword where id = :userId");
        $query->bindParam("userId", $uId);
        $query->bindParam("userName", $uName);
        $query->bindParam("userEmail", $uEmail);
        $query->bindParam("userPassword", $uPassword);
        $query->execute();
        echo "<script>alert('data updated successfully');
        location.assign('selectuser.php');
        </script>";
    }
// delete user
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query=$pdo ->prepare(" delete from users where id=:uid");
    $query->bindParam('uid',$id);
    $query->execute();
    $res =$query->fetch(PDO::FETCH_ASSOC);
}
?>