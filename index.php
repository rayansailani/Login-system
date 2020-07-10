<?php
 include "header.php";
 ?>
  <main>
    <?php
    if(isset($_SESSION['userId'])){
      echo "<p>You are logged in! Congratulations</p>".$_SESSION['userUid'];
     
    }
    else{
      echo "<p>You  are logged in!BOOOOO!</p>";
    }
    ?>
  </main>

  <?php
  include "footer.php";
  ?>