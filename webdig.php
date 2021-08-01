<?php
$domain_inp = $_GET["domain"];
$shellexec = shell_exec("dig $domain_inp");
echo '<pre>'.$shellexec.'</pre>';
?>
