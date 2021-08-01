<?php
$domain_inp = $_POST["domain"];
$shellexec = shell_exec('dig $domain_inp');
echo '<pre>'.$shellexec.'</pre>;
?>
