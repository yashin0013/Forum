<?php
session_start();

echo "you are logging out";
session_destroy();
header("location: /forums" )


?>