<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the edito.
-->
<!doctype html>
<html>
    <head>
        <base href="/cssServiceRequests/">
        <meta charset="utf-8"> 

        <!-- External Fonts-->
        <!-- Keep them internal right now in case they don't have internet
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Berkshire Swash">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Mrs Sheppards">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Simonetta">-->
        
        <!-- Styles-->
        <!--<link rel="stylesheet" type="text/css" href="styles/ui-lightness/jquery-ui-1.10.4.min.css" />-->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        
        <link rel="stylesheet" type="text/css" href="styles/main.css" />
        <?php 
            require_once 'includes/css_vars.php';       
            require "includes/init.php";
            include_once 'header.php';
            require "includes/users.php";
	?>
        <title><?php echo $countyName." "?> Service Requests</title>
    </head>

    <body>
        <div id="main_container">
            <?php 
                $useragent=strtolower($_SERVER['HTTP_USER_AGENT']);
                doHeader("ServiceRequest", $countyName);
                if (!userLoggedIn()){
                    include "LoginForm.php";
                }else {
                    include "ServiceRequest.html";
                }
            ?>
        </div>
    </body>
</html>
