<?php
session_start(); // start session for current user
include("classes/Db.php"); // class contains database connection, query functions, etc
include("classes/User.php"); // class contains functions to do with the User
$oUser = new User(); // Create instance of User Object
$loggedUser = $oUser->checkLogin(); // $loggedUser contains all user details from database(id, username, email, etc)

$title = "Dashboard"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "dashboard"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets
include("snippets/headerNaviBar.php"); //snippets
?>

<section class="page defaultPage">
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

        <article class="createOwnSpace">
            <div class="container">
                <h2>Want to create your own Space?</h2>
                <a href="form_space.php" class="btn-2">Let's get started</a> <!-- Check the file name -->
            </div>
        </article>

        <article class="spaceList">
            <div class="spaceCard">
                <div class="title">
                    <h2>Lorem ipsum dolor sit</h2>
                    <p>Category: Lorem ipsum</p>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In metus vulputate eu scelerisque felis imperdiet. Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Turpis tincidunt id aliquet risus feugiat in ante metus dictum. Vulputate sapien nec sagittis aliquam malesuada bibendum.</p>
                </div>
                <div class="info">
                    <div class="text">
                        <h3>Hosted By: Host's Name</h3>
                        <p>Date: yyyy/mm/dd</p>                    
                        <div class="time">
                            <p>Start time: 00:00</p>
                            <p>End time: 00:00</p>
                        </div>
                    </div>
                    <div class="button">
                        <a href="#" class="btn-1">Join Now</a>
                    </div>                    
                </div>
            </div>

            <div class="spaceCard">
                <div class="title">
                    <h2>Lorem ipsum dolor sit</h2>
                    <p>Category: Lorem ipsum</p>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In metus vulputate eu scelerisque felis imperdiet. Amet volutpat consequat mauris nunc congue nisi vitae suscipit. Turpis tincidunt id aliquet risus feugiat in ante metus dictum. Vulputate sapien nec sagittis aliquam malesuada bibendum.</p>
                </div>
                <div class="info">
                    <div class="text">
                        <h3>Hosted By: Host's Name</h3>
                        <p>Date: yyyy/mm/dd</p>                    
                        <div class="time">
                            <p>Start time: 00:00</p>
                            <p>End time: 00:00</p>
                        </div>
                    </div>                    
                    <div class="button">
                        <a href="#" class="btn-1">Join Now</a>
                    </div>                    
                </div>
            </div>
        </article>
        
        <article class="createSpaceIcon">
            <a href="createSpace.php">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path></svg>
            </a>
        </article>

        <article class="footerCategoryForm">
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
        </article>

    </div>
</section>

<?php
include("snippets/naviFooter.php"); //snippets
?>