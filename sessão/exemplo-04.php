<?php 

session_id('idd4nroaca3s269d6ssg336bg4');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
 ?>