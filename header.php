<?php

/* 
 * Cascade Software Systems.
 * Copyright 2015
 */

function doHeader($title,$county){
    echo '<div id="main_header">';
    echo '<img id="logo" src="images/cnty_logo.png" height="98" alt="Home">';
    echo '<h1 id="Company">'.$county.'</h1>';
    echo '<h1 id="Application">'.$title.'s</h1>';
    if (userLoggedIn()){
        echo '<div id="user_nav">';
        echo '<ul>';
        echo '	    <li><a href="userProfile.php">Profile</a></li>';
        echo '	    <li><a href="includes/logout.php">Log out</a></li>';
        echo '</ul>';
        echo '</div>';
    }
    echo '</div>';
}
?>
