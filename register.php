<?php
// include("libs/functions.php"); //the file to connect to database and use the  php functions

$title = "Register Page"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "registerPage"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
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
            <h1>Looking to register?</h1>
            <p>Please fill out our registration form and we’ll get you on your way!</p>
        </header>


        <!-- error message with php -->
        <?php
        if(isset($_GET["error"])){
            ?>
            <div class="loginErrorMsg">
                <p>ERROR: Username or Email already exists.</p>
            </div>
            <?php
        }
        ?>

        <article>
            <form id="form" method="post" action="processRegister.php"> <!-- Check the file name -->
                <div class="fieldset required">
                    <label>Emai Address</label>
                    <input type="email" name="email" id="email"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>First Name</label>
                    <input type="text" name="firstName" id="firstName"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Last Name</label>
                    <input type="text" name="lastName" id="lastName"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required">
                    <label>Username</label>
                    <input type="text" name="username" id="username"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Password</label>
                    <input type="password" name="password" id="password"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Birthday (YYYY/MM/DD)</label>
                    <input type="text" name="birthday" id="birthday"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Gender</label>
                        <select name="gender" id="gender">
                        <option value="">- Select -</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        <option value="NA">NA</option>
                    </select>
                    <div class="errorMsg">
                        <p>Please select one.</p>
                    </div>
                </div>
                <div class="fieldset submit">
                    <input type="submit" value="Register Now" class="btn-1"/>
                </div>
            </form>
            <div class="notice">
                <p><span>Already Registered?</span> Head back to <a href="index.php">Login </a></p> <!-- Check the file name -->
            </div>            
        </article>
    </div>
</section>

<script type="text/javascript" src="js/form_validator.js"></script>
<!-- Create error indication with CSS later -->
<script>
    function checkSubmit() {
        return confirm("Register for OpenSpace?");
    }
</script>




<?php
include("snippets/footer.php");
?>