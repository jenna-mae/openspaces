<?php
session_start(); // start session for current user
include("classes/Db.php"); // class contains database connection, query functions, etc
include("classes/User.php"); // class contains functions to do with the User
$oUser = new User(); // Create instance of User Object
$loggedUser = $oUser->checkLogin(); // $loggedUser contains all user details from database(id, username, email, etc)

$title = "Dashboard"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "dashboard"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets
include("snippets/headerLogo.php"); //snippets
?>

<section id="dashboard" class="page defaultPage">
    <div class="handle">
        <form action="dashboard.php" method="get" class="selectCategory">
            <div class="fieldset">
                <select name="sortByCategory" id="sortByCategory">
                    <option value="">- Sort by category -</option>
                    <option value="Recently Added">Recently Added</option>
                    <option value="Hangout">Hangout</option>
                    <option value="Art">Art</option>
                    <option value="Sports">Sports</option>
                    <option value="Books">Books</option>
                    <option value="Games">Games</option>
                    <option value="Ted Talk">Ted Talk</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </form>

        <article>
            <div>
                <a href="form_space.php">Create a new space</a> <!-- Check the file name -->
            </div>

          

        </article>
        
    </div>
</section>



<?php
include("snippets/naviBar.php"); //snippets
?>