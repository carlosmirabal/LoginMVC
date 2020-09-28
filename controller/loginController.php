<?php
  include '../model/user.php';
  include '../model/connection.php';
  $mail=$_POST['femail'];
  $passwd=$_POST['fpasswd'];

  // echo "El email es {$mail} y la contraseña es {$passwd}";
  $user=new User($mail,$passwd);
  echo $user->getEmail();
  echo $user->getPasswd();

  $sql="SELECT * FROM tbl_user WHERE email=? AND passwd=?";
  $smt=$conn->prepare($sql);
  $smt->bindParam(1,$mail);
  $smt->bindParam(2,$passwd);
  $smt->execute();
  $numUser=$smt->rowCount();
  echo $numUser;
  if ($numUser == 1) {
    header("Location: ../view/login_correcto.php");
  }else {
    echo "alert('Login erroneo')";
    header("Location: ../view/vista_login.html");
  }
?>