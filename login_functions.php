<?php
/*
* FILE: login_functions.php
*/
  
function check_login_correct($user, $pass) {
  /**
  * This function is for you to fill in.
  * Typically, you would compare the user's password 
  * to the password stored in the database, and then return
  * either true or false, depending on the result.
  */
 
 
  if (strtolower($user) == 'admin' && $pass == 'password') { return true; }
  
  return false;
}
  
function login_user($user) {
  session_regenerate_id();
  
  //set the user session variable, for later app use
  $_SESSION['user'] = $user;
  
  //set the hash session variable
  $_SESSION['hash'] = calculate_secure_hash($user);
}
  
//function sends the user to a page. Note this must be called 
//in the header, before any page output (echo's, html, print, etc) 
function send_to_page($page) {
  header("Location: $page");
  die("Redirect Failed");
}
  
//clears login state (logs you out) by unsetting login variables
//must be called in header, before any page output (echo's, html, print, etc) 
function clear_login_state() {
  session_unset();
   
}
  
function calculate_secure_hash($user) {
  //the security of your system is based on the hash seed below - change often
  $hash_seed = 'this_is_a_secret';  
  return md5($_SERVER['HTTP_USER_AGENT'] . $hash_seed . $user);
}
  
function check_logged_in() {
  
  //retrieve session vars
  $found_hash = $_SESSION['hash'];
  $user = $_SESSION['user'];
  
  //must not be empty
  if (!empty($found_hash) && !empty($user)) {
  
    //recalculate the hash
    $calculated_hash = calculate_secure_hash($user);
  
    //if recalculated hash matches, we have a logged in user
    if ($calculated_hash != $found_hash) {
      send_to_page('login.php');
    }
  }
  else {
    send_to_page('login.php');
  }
}
  
?>