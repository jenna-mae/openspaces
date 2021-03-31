<?php
// include("libs/functions.php"); //the file to connect to database and use the  php functions

$title = "Register Page"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "registerPage"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets
?>

<section>
    <div class="handle">
        <header>
            <h1>Register for OpenSpace account</h1>
            <p>Please fill in the form below to create your account.</p>
        </header>


        <!-- error message with php -->
        <!-- <?php
        // if(isset($_GET["error"])){
        //     ?>
        //     <div class="errorMsg">
        //         <p>The email address already exists</p>
        //     </div>
        //     <?php
        // }
        ?> -->


        <form id="form" method="post" action="processRegister.php"> <!-- Check the file name -->
            <div class="fieldset required">
                <label>Emai Address</label>
                <input type="email" name="email" id="email"/>
                <div class="errorMsg">
                    <p>This field is required.</p>
                </div>
            </div>
            <div class="fieldset required">
                <label>User Name</label>
                <input type="text" name="userName" id="userName"/>
                <div class="errorMsg">
                    <p>This field is required.</p>
                </div>
            </div>
            <div class="fieldset required">
                <label>Password</label>
                <input type="password" name="password" id="password"/>
                <div class="errorMsg">
                    <p>This field is required.</p>
                </div>
            </div>
            <div class="fieldset required">
                <label>Confirm Password</label>
                <input type="password" name="confirmPassword" id="confirmPassword"/>
                <div class="errorMsg">
                    <p>This field is required.</p>
                </div>
            </div>
            <div class="fieldset submit">
                <input type="submit" value="Register Now" class="btn-1"/>
            </div>
        </form>
        <p>Already Registered? <a href="index.php">Login now</a></p> <!-- Check the file name -->
        
    </div>
</section>

<script type="text/javascript" src="js/form_validator.js"></script>
<!-- Create error indication with CSS later -->




<?php
include("snippets/footer.php");
?>