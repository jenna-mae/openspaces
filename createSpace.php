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
                    <label>Name your Space:<span> *</span></label>
                    <p>Pick a name that best describes the space you’re wanting to create.</p>
                    <input type="text" name="spaceName" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Category:<span> *</span></label>
                    <p>Choose one of our topics that best identifies with your space.</p>
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
                    <label>Date:<span> *</span></label>
                    <p>Time to set a date for your space!</p>
                    <input type="date" name="date" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required half">
                    <label>Start time<span> *</span></label>
                    <p>What time would you like your space to begin?</p>
                    <input type="time" name="startTime" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>  
                <div class="fieldset required half">
                    <label>End time:<span> *</span></label>
                    <p>When will the party end?</p>
                    <input type="time" name="endTime" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>
                <div class="fieldset required">
                    <label>Meeting URL:<span> *</span></label>
                    <p>This is how people will be able to join your space! Please visit <a href="https://zoom.us/" target="_blank">Zoom</a>/<a href="https://hangouts.google.com/" target="_blank">Google Hangouts</a> to create a meeting. Once you have created a meeting, you will be provided a URL that you will need to copy and paste into here.</p>
                    <input type="url" name="meetingURL" value=""/>
                    <div class="errorMsg">
                        <p>This field is required.</p>
                    </div>
                </div>  
                <div class="fieldset required">
                    <label>Description:<span> *</span></label>
                    <p>Let’s get people excited, tell us a bit about your space!</p>
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