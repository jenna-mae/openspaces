<?php
$title = "Space"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "space"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets

include("snippets/navLinks.php"); //snippets
?>


<!-- The contents should be changed by php -->
<section>
    <div class="handle">
        <header>
            <h1>Space Name</h1>            
        </header>

        <article>
            <div>
                <h2>Category</h2>
                <p>Something</p>
            </div>
            <div>
                <h2>Privacy setting</h2>
                <p>Public or private</p> 
            </div>
            <div>
                <h2>Description</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis tellus id interdum velit. Montes nascetur ridiculus mus mauris. Velit egestas dui id ornare arcu odio ut. Vestibulum lorem sed risus ultricies tristique.</p> 
            </div>
        </article>
        
    </div>
</section>




<?php
include("snippets/footer.php");
?>