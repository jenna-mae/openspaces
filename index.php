<?php
// include("libs/functions.php"); //the file to connect to database and use the  php functions

$title = "Login Page"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "loginPage"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets
?>

<section>
    <div class="handle">

        <header>        
            <h1>Login to OpenSpace</h1>
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

        <form id="form" method="post" action="processLogin.php"> <!-- Check the file name -->
            <div class="fieldset">
                <label>User Name</label>
                <input type="text" name="userName"/>
            </div>
            <div class="fieldset">
                <label>Password</label>
                <input type="password" name="password"/>
            </div>
            <div class="fieldset submit">
                <input type="submit" value="Login Now" class="btn-1"/>
            </div>
        </form>
        <p>Don't Have An Account? <a href="register.php">Register now</a></p> <!-- Check the file name -->       

    </div>
</section>


<?php
include("snippets/footer.php"); //snippets
?>