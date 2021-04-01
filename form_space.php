<?php
// include("libs/functions.php"); //the file to connect to database and use the  php functions

$title = "Space Form"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "spaceForm"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets

include("snippets/navLinks.php"); //snippets
?>


<section>
    <div class="handle">
        <header>
            <h1>Create a New Space</h1>
            <!-- the title should be chenge to "Edit your space" when the page receives GET or POST id with PHP -->
        </header>

        <article>
            <form id="form" method="post" action="save_space.php"><!-- Check the file name -->
                <div class="fieldset required">
                    <label>Space Name<span> *</span></label>
                    <input type="text" name="spaceName" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required">
                    <label>Category<span> *</span></label>
                    <select name="category">
                        <option value="">- Select -</option>
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                        <option value="Option 4">Option 4</option>
                        <option value="Option 5">Option 5</option>
                    </select>
                    <div class="errorMsg">
                        <p>Please select one.</p>
                    </div>
                </div>
                <div class="fieldset required">
                    <label>Privacy Option<span> *</span></label>
                    <div class="privacy">
                        <div class="option">
                            <input type="radio" name="privacyOption" value="Public"/>Public
                        </div>
                        <div class="option">
                            <input type="radio" name="privacyOption" value="Private"/>Private
                        </div>
                    </div>
                    <div class="errorMsg">
                        <p>Please select one.</p>
                    </div>
                </div>
                <div class="fieldset required">
                    <label>Description<span> *</span></label>
                    <textarea name="description"></textarea>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset submit">
                    <input type="submit" value="Submit" class="btn-1">
                </div><!-- fieldset -->
            </form>     
        </article>
        
    </div>
</section>

<script type="text/javascript" src="js/form_validator.js"></script>
<!-- Create error indication with CSS later -->
<script>
    function checkSubmit() {
        return confirm("Submit the form?");
    }
</script>



<?php
include("snippets/footer.php");
?>