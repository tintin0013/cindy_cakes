<?php
session_start();
session_destroy();
echo "la session est kill";
header("location: ./index.php");