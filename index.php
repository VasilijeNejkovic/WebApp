<html>
<head>

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

    $u = $_POST['user'];
    $p = $_POST['psw'];

      if($u == "Vasilije" && $p=="Nejkovic")
        {
          $var=

        }

  }



?>

</div>


</body>
</html>
