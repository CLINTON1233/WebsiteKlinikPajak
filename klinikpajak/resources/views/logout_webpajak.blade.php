<div>
    <!-- An unexamined life is not worth living. - Socrates -->
</div>
<?php
   session_start();
   
   if(session_destroy()) {
      header("location: login.php");
   }
?>