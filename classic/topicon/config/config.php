<?php

define('BD_HOSTNAME', 'localhost'); 
define('BD_USERNAME', 'root'); 
define('BD_PASSWORD', ''); 
define('BD_DATABASE', 'ciaw'); 

//$conn= mysqli_connect(BD_HOSTNAME, BD_USERNAME, BD_PASSWORD,BD_DATABASE)or die("Não foi possível a conexão com o Banco");

$conn= mysqli_connect(BD_HOSTNAME, BD_USERNAME, BD_PASSWORD,BD_DATABASE) or die("Impossível conectar ao banco.");

?>