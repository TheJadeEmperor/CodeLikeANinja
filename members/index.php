<?php
$dir = '../';
include($dir.'include/functions.php');
include($dir.'include/config.php');
include($dir.'include/spmSettings.php');
session_start();

if(isset($_POST['dl']))
    if($_POST['dl']) {
        downloadLink($_POST['url']); exit;
    }

if(is_int(strpos(__FILE__, 'C:\\'))) {//localhost
    error_reporting(E_ALL ^ E_NOTICE);
}
else { //live website
    error_reporting(0);
}

//values from spmSettings
$templateHeader = $val['memHeader'];
$templateFooter = $val['memFooter'];
$membersContent = $val['memAreaContent'];


if($_POST['login']) {
    //verify username/password
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(empty($username)) {
        $_SESSION['error'] = 'Please enter a valid username!';
    }

    if(empty($password)) {
        $_SESSION['error'] = 'Please enter a valid password!';
    }

    $selU = 'SELECT * FROM users where USERNAME="'.$username.'" || email="'.$username.'"';
    $resU = $conn->query($selU);

    $u = $resU->fetch_array();

    if(mysqli_num_rows($resU) == 0) { //no user found 
        $_SESSION['error'] = 'The username '.$username.' does not exist!';
    }
    else { //user is found 
        if($u['password'] != $password) {
            $_SESSION['error'] = 'The password is invalid!';
        }
        else {
            if(empty($u['email']))
                $u['email'] = 'N / A';
                
            if(empty($u['paypal']))
                $u['paypal'] = 'N / A';
                    
            $_SESSION['login'] = $u;
          
            if($u['status'] == 'B') { //check if user is banned
                $_SESSION['error'] = 'Unable to login - You have been banned from our system <br />
                If you feel this is in error, please contact our support desk';    
            }
            else { //login successful
            	unset($_SESSION['error']); //remove the error message
               	header('Location: ./?action=affcenter');                
            }
        }
    }
}

$msg = $_SESSION['error'];

//user info 
$u = $_SESSION['login'];

//skip the upsell this session
if($_POST['skipUpsell']) {
    $_SESSION['login']['skipUpsell'] = true;
}



if(isset($u['id'])) {	//logged in

    switch($_GET['action']) {
        default:
        case 'dojo':         
            $fileName = 'dojo.php';
           break;
        case 'details': //update profile details 
            $fileName = 'details.php';
            break; 
        case 'logout':
            $fileName = 'logout.html';
            break;	 
    }
}
else { //not logged in
    
    $fileName = 'login.html';

}


$templateHeader = 'memHeader.html';
$templateFooter = 'memHeader.html';

if(file_exists($templateHeader))
include($templateHeader);

include($fileName);

if(file_exists($templateFooter))
include($templateFooter);

?>