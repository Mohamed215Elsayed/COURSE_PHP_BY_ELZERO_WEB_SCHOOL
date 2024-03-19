<?php 
Session_start();
echo "welcome " . $_SESSION['name'] ." and your id is " . $_SESSION['id'];