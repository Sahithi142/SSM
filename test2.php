<?php
session_start();
print_r($_SESSION);
session_destroy();
session_unset($_SESSION);
print_r($_SESSION);
?>
