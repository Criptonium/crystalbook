<?php
ini_set('display_errors',0);
include('connect.php');
$email_login = $_POST['email_login'];
$password_login = $_POST['password_login'];
if(isset($_POST['autorization']))
{
  $login_user_sql = $pdo->prepare('select id,name,last_name,email,phone_number,password from user where email = ?');
  $login_user_sql->execute([$email_login]);
  $user = $login_user_sql->fetchAll();
  foreach ($user as $key)
  {
    if($password_login==$key['password'])
    {
      session_start();
      $email_login = $key['email'];
      $_SESSION['name_user'] = $key['name']." ".$key['last_name'];
      $_SESSION['email_user'] = $key['email'];
      $_SESSION['id_user'] = $key['id'];
      $_SESSION['phone_number_user'] = $key['phone_number'];
      header('Location: http://localhost');
    }
    else
    {
      ?>
      <script>alert('Вы вышли из своего аккаунта');</script>
      <?php
    }
  }
}
