<?php
//get domain query
$domain_inp = $_GET["domain"];
$options_pre1 = $_GET["opt1"];
$option_pre2 = $_GET["opt2"];
$options1 = htmlspecialchars($options_pre1, ENT_QUOTES);
$options2 = htmlspecialchars($options_pre2, ENT_QUOTES);
$domain = htmlspecialchars($domain_inp, ENT_QUOTES);
if (preg_match("/^[.A-Za-z0-9-]+$/", $domain)) {
    //execute shell command
    $shellexec = shell_exec("dig $options1 $domain $options2");
    echo '<pre>'.$shellexec.'</pre>';
} else {
    // does not contain only letters, numbers, and hyphens
    echo 'Invalid domain name provided!';
}
?>
