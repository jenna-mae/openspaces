<?php
session_start();
include("classes/Db.php");
include("classes/User.php");
include("classes/Space.php");
$title = "Create a New Space"; //The title name displayed in the browser tab. It's connected to "header.php"
$bodyId = "createSpace"; //The ID name given to the html body of each page for CSS. It's connected to "header.php"
include("snippets/header.php"); //snippets

include("snippets/headerNaviBar.php"); //snippets
?>


<section>
    <div class="handle">
        <header>
            <h1>Create a Space</h1>
            <!-- the title should be chenge to "Edit your space" when the page receives GET or POST id with PHP -->
        </header>

        <article>
            <form id="form" method="post" action="processSpace.php"><!-- Check the file name -->
                <div class="fieldset required">
                    <label>Name of Space<span> *</span></label>
                    <input type="text" name="spaceName" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Category<span> *</span></label>
                    <select name="category">
                        <option value="">- Select -</option>
                        <?php
                            $oSpace = new Space;
                            $options = $oSpace->dropDown("SELECT * FROM categories");
                            foreach($options as $option){
                        ?>
                            <option value="<?=$option["id"]?>"><?=$option["name"]?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <div class="errorMsg">
                        <p>Please select one.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Date<span> *</span></label>
                    <input type="date" name="date" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Start time<span> *</span></label>
                    <input type="time" name="startTime" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>  
                <div class="fieldset required half">
                    <label>End time<span> *</span></label>
                    <input type="time" name="endTime" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required">
                    <label>Meeting URL<span> *</span></label>
                    <input type="url" name="meetingURL" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
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

<?php
include("snippets/naviFooter.php"); //snippets
?>