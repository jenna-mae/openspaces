<?php
// include("libs/functions.php"); //the file to connect to database and use the  php functions

$title = "Login Page"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "loginPage"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets
?>

<header class="headerLogo">
    <div class="handle">
        <img src="imgs/OpenspacelogoColor.png" alt="Open space Logo"/>
    </div>
</header>

<section class="registerForm">
    <div class="handle">
        <header>
            <h1>Login</h1>
            <p>Please fill out your personal details and we’ll get you on your way!</p>
        </header>

        <!-- error message with php -->
        <!-- <?php
        // if(isset($_GET["error"])){
        //     ?>
        //     <div class="errorMsg">
        //         <p>ERROR: Check your user name and password.</p>
        //     </div>
        //     <?php
        // }
        ?> -->

        <article>
            <form id="form" method="post" action="processLogin.php"> <!-- Check the file name -->
                <div class="fieldset">
                    <label>Username</label>
                    <input type="text" name="username"/>
                </div>
                <div class="fieldset">
                    <label>Password</label>
                    <input type="password" name="password"/>
                </div>
                <div class="fieldset submit">
                    <input type="submit" value="Login Now" class="btn-1"/>
                </div>            
            </form>
            <div class="notice">
                <p><span>New Here?</span> Let's get you <a href="register.php">Registered </a></p> <!-- Check the file name -->
            </div>               
        </article>   

    </div>
</section>


<?php
include("snippets/footer.php"); //snippets
?>