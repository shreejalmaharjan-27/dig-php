<?php
//get domain query
$domain_inp = $_GET["domain"];
$domain = htmlspecialchars($domain_inp, ENT_QUOTES);
if (preg_match("/^[.A-Za-z0-9-]+$/", $domain)) {
    //execute shell command
    $shellexec = shell_exec("dig $domain ANY");
    echo '<pre>'.$shellexec.'</pre>';
} else {
    // does not contain only letters, numbers, and hyphens
    echo 'Invalid domain name provided!';
}
?>
