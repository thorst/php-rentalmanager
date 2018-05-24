<?php
session_start();

//include our login functions.
require('login_functions.php');

clear_login_state();
send_to_page('login.php');

?>