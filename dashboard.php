<?php
// include("libs/functions.php"); //the file to connect to database and use the  php functions

session_start(); // start session for current user
include("classes/Db.php"); // class contains database connection, query functions, etc
include("classes/User.php"); // class contains functions to do with the User
$oUser = new User(); // Create instance of User Object
$loggedUser = $oUser->checkLogin(); // $loggedUser contains all user details from database(id, username, email, etc)

$title = "Dashboard"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "dashboard"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets

include("snippets/navLinks.php"); //snippets
?>

<section>
    <div class="handle">
        <header>
            <h1>Dashboard</h1>
        </header>

        <article>
            <div>
                <a href="form_space.php">Create a new space</a> <!-- Check the file name -->
            </div>

            <div>
                <p>Default space here.</p>
            </div>

            <div>
                <p>Space list here.</p>
            </div>
            
            <div>
                <form action="dashboard.php" method="get">
                    <div class="fieldset">
                        <label>Sort by category</label>
                        <select name="sortByCategory" id="sortByCategory">
                            <option value="">- Select -</option>
                            <option value="Option 1">Option 1</option>
                            <option value="Option 2">Option 2</option>
                            <option value="Option 3">Option 3</option>
                            <option value="Option 4">Option 4</option>
                            <option value="Option 5">Option 5</option>
                        </select>
                    </div>
                </form>
            </div>
        </article>
        
    </div>
</section>



<?php
include("snippets/footer.php");
?>