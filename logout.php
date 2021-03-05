<?php 
session_start();
session_destroy();
header('Location: login.php?id=245456');
?>