<html>
<head>

<?php
spl_autoload_register(function($class){
require_once "classes/{$class}.php";
});
 ?>

<h1>Moj sajt</h1>
<hr>

</head>
<body>

  <form class="" action="index.php" method="post">
      <input type="text" name="user" value="username">
      <input type="text" name="psw" value="password">
      <button type="SUBMIT" name="submit" value="submit"> SUBMIT </button>
  </form>
<hr>


<div class="">

<?php
 if(isset($_POST['submit']))
  {

    $user = new user ($_POST['user'],$_POST['psw']);
    echo $user->name;

  }



?>

</div>


</body>
</html>
