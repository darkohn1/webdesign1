<?php
$selectedNavPoint = 'contact';

include('../head.php');

?>
<div class=main-content">
    <div class="container" style="padding: 100px 0">

    <div id="frmContact">
    
    <div>
        <label style="padding-top:20px;">Name</label><span id="userName-info" class="info"></span><br/>
        <input type="text" name="userName" id="userName" class="demoInputBox">
    </div>
    <div>
        <label>Email</label><span id="userEmail-info" class="info"></span><br/>
        <input type="text" name="userEmail" id="userEmail" class="demoInputBox">
    </div>
    <div>
        <label>Phone</label><span id="userPhone-info" class="info"></span><br/>
        <input type="text" name="userPhone" id="userPhone" class="demoInputBox">
    </div>


    <div>
        <label>Subject</label><span id="subject-info" class="info"></span><br/>
        <input type="text" name="subject" id="subject" class="demoInputBox">
    </div>
    <div>
        <label>Content</label><span id="content-info" class="info"></span><br/>
        <textarea name="content" id="content" class="demoInputBox" cols="60" rows="6"></textarea>
    </div>
    <div>
        <button name="submit" class="btnAction" onClick="sendContact();">Send</button>
        <div id="mail-status"></div>
    </div>
</div>
    </div>
</div>





<?php include('../footer.php'); ?>



<!-- 
    Ime
Prezime
E-mail
Mob tel
Grad (select)

 -->
