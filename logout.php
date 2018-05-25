<?php
session_start();

//include our login functions.
require('lib/login.php');

clear_login_state();
send_to_page('login.php');

?>