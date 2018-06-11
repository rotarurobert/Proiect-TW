<?php
session_start();
session_destroy();
header('Location:http://localhost/ProiectTW/MVC/public');
exit();
?>
