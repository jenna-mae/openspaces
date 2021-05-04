<?php
session_start(); // start session for current user
include("classes/Db.php"); // class contains database connection, query functions, etc
include("classes/User.php"); // class contains functions to do with the User
include("classes/Space.php");
$oUser = new User(); // Create instance of User Object
$loggedUser = $oUser->checkLogin(); // $loggedUser contains all user details from database(id, username, email, etc)

$title = "Dashboard"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "dashboard"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets

// include("snippets/dashboardHeaderNaviBar.php"); //show this snippets after Sort by category functiion is created
include("snippets/headerNaviBar.php"); //snippets
?>

<section class="page defaultPage">
    <div class="handle">

        <article class="createOwnSpace">
            <div class="container">
                <h2>Welcome</h2>
                <p>To get started, scroll down the page and click Join Now to join one of the our spaces that interest you. If the Join Now button is grey, it means the space hasn’t started yet.</p>
                <p>Can’t find what you’re looking for?</p>
                <a href="createSpace.php" class="btn-2">Create a Space</a> <!-- Check the file name -->
            </div>
        </article>

        <article class="spaceList">
            <?php
                $oSpace = new Space;
                $spaces = $oSpace->display("SELECT categories.name as categoryName, users.username, spaces.* FROM spaces LEFT JOIN categories on spaces.category = categories.id LEFT JOIN users on users.id = spaces.host WHERE isactive=1 ORDER BY id DESC");
                foreach($spaces as $space) {
            ?>
            <div class="spaceCard">
                <div class="title">
                    <h3><?=$space["name"]?></h3>
                    <p><?=$space["categoryName"]?></p>
                </div>
                <div class="description">
                    <p><?=$space["description"]?></p>
                </div>
                <div class="info">
                    <div class="text">
                        <h4>Hosted By: <?=$space["username"]?></h4>
                        <p>Date: <?=$space["date"]?></p>                    
                        <div class="time">
                        <!-- https://stackoverflow.com/questions/17098158/how-do-i-convert-date-time-from-24-hour-format-to-12-hour-am-pm/51515814 -->
                            <p>Start time: <?=date("g:i a", strtotime($space["startTime"]));?></p>
                            <p>End time: <?=date("g:i a", strtotime($space["endTime"]));?></p>
                        </div>
                    </div>
                    <?php
                        // This is checking to see if the current time is within the time of the Space. Right now I have it as only showing the button when the timing is correct.
                        if(Space::checkTime($space["date"], $space["startTime"], $space["endTime"])){
                            ?>
                                <div class="button">
                                    <a href="<?=$space["link"]?>" class="btn-1">Join Now</a>
                                </div>
                            <?php
                        } else {
                            // This is where you can output html to show the button that is not active.
                            ?>
                                <div class="button">
                                    <a href="<?=$space["link"]?>" class="btn-inactive">Join Now</a>
                                </div>
                            <?php
                        }
                    ?>                    
                </div>
            </div>
                <?php
                    }
                ?>
        </article>
        
        <article class="createSpaceIcon">
            <div class="container">
                <a href="createSpace.php">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path></svg>
                </a>
            </div>
        </article>

        <!-- <article class="categoryForm">
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
        </article> -->

    </div>
</section>

<?php
include("snippets/naviFooter.php"); //snippets
?>