<?php
session_start();
unset($_SESSION[$name_email]);
session_destroy();

header("Location: login.html");
exit;
?>