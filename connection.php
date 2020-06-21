<?php
/*
Arquivo de conexão com o banco de dados
*/

/* credenciais do banco*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'toor');
define('DB_NAME', 'gestao');
/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'footer.php');

/* conecta com o banco MySQL */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Checa a conexão
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
