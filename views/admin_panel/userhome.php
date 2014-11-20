<div class="row" onload="disablebutton();">
    <h3>Sign up and fill out the form below:</h3>
    <br />
    <label id="pw_label1"></label>
    <form method="post" action ="/itdata/adminpanel/update_pro">
        <table class="table table-hover table-striped table-bordered">
            <tr><td width="150">First Name: </td><td colspan="2"><input type="text" name="fname" value="<?=$userprf['fname']?>"></td></tr>
            <tr><td width="150">Last Name: </td><td colspan="2"><input type="text" name="lname" value="<?=$userprf['lname']?>"></td></tr>
            <tr><td width="150">Email: </td><td colspan="2"><input type="email" name="email" value="<?=$userprf['user_login']?>"></td></tr>
            <tr><td width="150">Work Number: </td><td colspan="2"><input type="text" name="wrknum" value="<?=$userprf['worknum']?>"></td></tr>
            <tr><td width="150">Cell Number: </td><td colspan="2"><input type="text" name="cellnum" value="<?=$userprf['cellnum']?>"></td></tr>
            <tr><td width="150">Alt Number: </td><td colspan="2"><input type="text" name="altnum" value="<?=$userprf['altnum']?>"></td></tr>
        </table>
        <button class="btn-primary" type="submit" id="subbtn">Edit Profile</button>
    </form>
</div>
        