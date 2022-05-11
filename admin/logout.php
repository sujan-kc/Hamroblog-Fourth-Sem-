

<?php

include "config.php";

session_start();

session_unset();

session_destroy();


header("Location: http://localhost/project/admin/");
echo '<div class="alert alert-danger">Come back soon hai !</div>';

?>
