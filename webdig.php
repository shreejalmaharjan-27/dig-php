<?php
//get domain query
$actions = array(      // Array of actions
    'v4' => '-4',
    'v6' => '-6',
    'getall' => 'ANY +noall +answer',
    'getansonly' => '+nocomments +noquestion +noauthority +noadditional +nostats',
    'getmx' => 'MX +noall +answer',
    'getns' => 'NS +noall +answer',
    'getsoa' => '+nssearch',
    'getsmx' => 'mx +short',
    'getsns' => 'ns +short',
    'getshort' => '+short',
    'trace' => '+trace'
);
if (isset($_POST['ipversion']))
{   
    //get domain from input

    $domain = $_POST['domain'];
    
    // disallow connection if domain has other than letters, numbers, and hyphens
    if (preg_match("/^[.A-Za-z0-9-]+$/", $domain)) {
        if(isset($_POST['ipversion']) && array_key_exists($_POST['ipversion'], $actions)) {
         if(isset($_POST['ipversion1']) && array_key_exists($_POST['ipversion1'], $actions)) {
            if(isset($_POST['ipversion1']) && array_key_exists($_POST['ipversion2'], $actions)) {
            
                //connect ipv4/v6
                $ipv = $actions[$_POST['ipversion']];
                $ipv1 = $actions[$_POST['ipversion1']];
                $ipv2 = $actions[$_POST['ipversion2']];

                echo "<strong>Command Sample:</strong>";
                echo "<code> $domain $ipv $ipv1 $ipv2</code>";
                
                //execute shell command
                $shellexec = shell_exec("dig $domain $ipv $ipv1 $ipv2");
                echo '<pre>'.$shellexec.'</pre>';
        }
            } else {
            die('Unknown Message');  // Otherwise, display and error and end execution
            }
        }
    } else {
    // display error
    echo 'Invalid domain name provided!';
    }
}
?>
