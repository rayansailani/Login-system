<?php
 include "header.php";
 ?>
  <main>
    <form action="includes/signup.inc.php" method="post" id="signup-form">
    <h3>Signup</h3>
        <input type="text" name="uid" placeholder="username..">
        <input type="email" name="mail" placeholder="E-mail..">
        <input type="password" name="pwd" placeholder="password..">
         <input type="password" name="pwd-repeat" placeholder="confirm password..">
         <button type="submit" name="signup-submit" >Sign up</button>
    </form>
  </main>

  <?php
  include "footer.php";
  ?>