<?php
session_start();
include("classes/Db.php");
include("classes/User.php");
include("classes/Space.php");
$title = "Profile"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "profile"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets

include("snippets/headerNaviBar.php"); //snippets
?>

<section class="registerForm">
    <div class="handle">
        <header>
            <h1>Your Profile</h1>
        </header>

        <article>
            <form id="form" method="post" action="#"> <!-- Check the file name -->
                <div class="fieldset">
                    <label>Email Address:</label>
                    <input type="email" name="email" id="email" value 
                    ="Email Address" readonly/>
                </div>
                <div class="fieldset half">
                    <label>First Name:</label>
                    <input type="text" name="firstName" id="firstName" value 
                    ="First Name" readonly/>
                </div>
                <div class="fieldset half">
                    <label>Last Name:</label>
                    <input type="text" name="lastName" id="lastName" value 
                    ="Last Name" readonly/>
                </div>
                <div class="fieldset">
                    <label>Username:</label>
                    <input type="text" name="username" id="username" value 
                    ="Username" readonly/>
                </div>
                <div class="fieldset half">
                    <label>Birthday:</label>
                    <input type="text" name="birthday" id="birthday" value 
                    ="YYYY/MM/DD" readonly/>
                </div>
                <div class="fieldset half">
                    <label>Gender:</label>
                    <input type="text" name="gender" id="gender" value 
                    ="Gender" readonly/>
                </div>
                <!-- <div class="fieldset submit">
                    <input type="submit" value="Edit Profile" class="btn-1"/>
                </div> -->
            </form>       
        </article>
    </div>
</section>



<?php
include("snippets/naviFooter.php"); //snippets
?>