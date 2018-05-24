<?php
/*
* FILE: check_login.php
*/
  
session_start();
  
//include our login functions.
require('login_functions.php');
  
//retrieve post data
$user = trim($_POST['user']);
$pass = trim($_POST['pass']);
  
  
/*
* Basic Login Logic
*/
  
clear_login_state();

if (!empty($user) && !empty($pass)) {
 
  if (check_login_correct($user, $pass)) {
  
    //set appropiate session vars
    login_user($user);
  
    //redirect to secured page
    send_to_page('index.php');
  }
  else {
    //wrong user or password supplied, send back to login
    send_to_page('login.php');
  }
}
else {
  //no user or password supplied, send back to login
  send_to_page('login.php');
}
?>