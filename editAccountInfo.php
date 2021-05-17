<?php
session_start();
include("classes/Db.php");
include("classes/User.php");
include("classes/Space.php");
$title = "Edit Account Information"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "editAccountInfo"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"

$oUser = new User();
$loggedUser = $oUser->checkLogin();
include("snippets/header.php"); //snippets
include("snippets/headerNaviBar.php"); //snippets
?>

<section>
    <div class="handle">
        <header>
            <h1>Account Information</h1>
            <p>Something doesn't seem right? No worries! Scroll down to the bottom of the page and click edit to uodate your persona information. Once you've finished, click save and you're done!</p>
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
            <form id="form" method="post" action="#"> <!-- Check the file name -->
                <div class="fieldset required">
                    <label>Email Address:</label>
                    <input type="email" name="email" id="email" value="<?=$loggedUser["email"]?>"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>First Name:</label>
                    <input type="text" name="firstName" id="firstName" value="<?=$loggedUser["firstName"]?>"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Last Name:</label>
                    <input type="text" name="lastName" id="lastName" value="<?=$loggedUser["lastName"]?>"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required">
                    <label>Username:</label>
                    <input type="text" name="username" id="username" value="<?=$loggedUser["username"]?>"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Password:</label>
                    <input type="password" name="password" id="password" value="<?=$loggedUser["password"]?>"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Confirm Password:</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" value="<?=$loggedUser["password"]?>"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Birthday (YYYY/MM/DD):</label>
                    <input type="text" name="birthday" id="birthday" value="<?=$loggedUser["birthday"]?>"/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Gender:</label>
                        <select name="gender" id="gender">
                        <option value="">- Select -</option>
                        <option value="Male"<?= $loggedUser['gender'] != 'Male' ?: 'selected' ?>>Male</option>
                        <option value="Female"<?= $loggedUser['gender'] != 'Female' ?: 'selected' ?>>Female</option>
                        <option value="Non-Binary"<?= $loggedUser['gender'] != 'Non-Binary' ?: 'selected' ?>>Non-Binary</option>
                        <option value="Other"<?= $loggedUser['gender'] != 'Other' ?: 'selected' ?>>Other</option>
                    </select>
                    <div class="errorMsg">
                        <p>Please select one.</p>
                    </div>
                </div>
                <div class="fieldset submit">
                    <input type="submit" value="Save" class="btn-1"/>
                </div>
            </form>         
        </article>
    </div>
</section>

<script type="text/javascript" src="js/form_validator.js"></script>

<?php
include("snippets/naviFooter.php"); //snippets
?>