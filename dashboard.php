<?php
// include("libs/functions.php"); //the file to connect to database and use the  php functions

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
                <p>Default space here.</p>
            </div>

            <div>
                <p>Space list here.</p>
            </div>
        </article>
        
    </div>
</section>



<?php
include("snippets/footer.php");
?>