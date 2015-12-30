<div id="login_form" class="css_form">
    <div id="login-floater">
        <img id="css_logo" src="images/logo.png" width="320" height="120" alt="Home">
        <img id="css_logo" src="images/Cascade.png" width="320" height="21" alt="Cascade Software Systems">
    </div>
    <form action="includes/login.php" method="post">
    	<ul>
            <?php		
                if (isset($_SESSION["login_error"])){
                    echo '<li>';
                    echo '<label class="error">'.$_SESSION["login_error"].' </label>';
                    echo '</li>'; 
                    unset($_SESSION["login_error"]);     
                }
            ?>
            <li>
                <label> Username: </label>
                <input type="text" name="userid" size="30">
            </li>
            <li>
                <label>Password:</label>
                <input type="password" name="password" size="30">
            </li>
            <li>
                <input type="submit" value="Log in">
            </li>
        </ul>
    </form>
</div>
