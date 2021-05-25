<?php
session_start();
include("classes/Db.php");
include("classes/User.php");
include("classes/Space.php");
$title = "Account Information"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "accountInfo"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"

$oUser = new User();
$loggedUser = $oUser->checkLogin();
include("snippets/header.php"); //snippets
include("snippets/headerNaviBar.php"); //snippets
?>

<section>
    <div class="handle">
        <header>
            <h1>Account Information</h1>
            <p>Something doesn't seem right? No worries! Scroll down to the bottom of the page and click edit to update your personal information. Once you've finished, click save and you're done!</p>
        </header>

        <article>
            <form id="form" method="post" action="editAccountInfo.php"> <!-- Check the file name -->
                <div class="fieldset required">
                    <label>Email Address:</label>
                    <input type="email" name="email" id="email" value="<?=$loggedUser["email"]?>" readonly />
                </div>
                <div class="fieldset required half">
                    <label>First Name:</label>
                    <input type="text" name="firstName" id="firstName" value="<?=$loggedUser["firstName"]?>" readonly />
                </div>
                <div class="fieldset required half">
                    <label>Last Name:</label>
                    <input type="text" name="lastName" id="lastName" value="<?=$loggedUser["lastName"]?>" readonly />
                </div>
                <div class="fieldset required">
                    <label>Username:</label>
                    <input type="text" name="username" id="username" value="<?=$loggedUser["username"]?>" readonly />
                </div>
                <!-- Password is commented out for now. -->
                <!-- <div class="fieldset required half">
                    <label>Password:</label>
                    <input type="password" name="password" id="password" value="12345678" readonly />
                </div> -->
                <div class="fieldset required half">
                    <label>Birthday (YYYY/MM/DD):</label>
                    <input type="text" name="birthday" id="birthday" value="<?=$loggedUser["birthday"]?>" readonly />
                </div>
                <div class="fieldset required half">
                    <label>Gender:</label>
                    <input type="text" name="gender" id="gender" value 
                    ="<?=$loggedUser["gender"]?>" readonly/>
                </div>
                <div class="fieldset submit">
                    <input type="submit" value="Edit" class="btn-1"/>
                </div>
            </form>       
        </article>
    </div>
</section>



<?php
include("snippets/naviFooter.php"); //snippets
?>