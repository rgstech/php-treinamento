<?php

 if(isset($_POST['submit'])) {
      echo "<h4>dados do cliente</h4> <br>" . PHP_EOL;
      echo "dados do cliente: <br>" . PHP_EOL;
      echo "Nome: " . $_POST['name']. " <br>" . PHP_EOL;
      echo "E-mail: " . $_POST['email']. " <br>" . PHP_EOL;
      echo "<br>";
 }
 
?>


<html>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Name:   <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
                <input type="submit" name="submit">
    </form>

</body>
</html>