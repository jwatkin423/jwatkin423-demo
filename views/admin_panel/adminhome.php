<div class="row" onload="disablebutton();">
    <h3>Sign up and fill out the form below:</h3>
    <br />
    <label id="pw_label1"></label>
    <form method="post" action ="/itdata/adminpanel/update_pro">
        <table class="table table-hover table-striped table-bordered">
            <tr><td width="150">First Name: </td><td colspan="2"><input type="text" name="fname" value="<?=$userprf['fname']?>"></td></tr>
            <tr><td width="150">Last Name: </td><td colspan="2"><input type="text" name="lname" value="<?=$userprf['lname']?>"></td></tr>
            <tr><td width="150">Email: </td><td colspan="2"><input type="email" name="email" value="<?=$userprf['user_login']?>"></td></tr>
            <tr><td width="150">Company Name: </td><td colspan="2"><input type="text" name="company_name" value="<?=$compinfo['compname']?>"></td></tr>
            <tr><td width="150">Address 1: </td><td colspan="2"><input type="text" name="address1" value="<?=$compinfo['compaddress1']?>"></td></tr>
            <tr><td width="150">Address 2: </td><td colspan="2"><input type="text" name="address2" value="<?=$compinfo['compaddress2']?>"></td></tr>
            <tr><td width="150">City: </td><td colspan="2"><input type="text" name="city" value="<?=$compinfo['compcity']?>"></td></tr>
            <tr><td width="150">State: </td><td colspan="2"><input type="text" name="state" value="<?=$compinfo['compstate']?>"></td></tr>
            <tr><td width="150">Zip Code: </td><td colspan="2"><input type="text" name="zip" value="<?=$compinfo['compzip']?>"></td></tr>
            <tr><td width="150">Work Number: </td><td colspan="2"><input type="text" name="wrknum" value="<?=$userprf['worknum']?>"></td></tr>
            <tr><td width="150">Cell Number: </td><td colspan="2"><input type="text" name="cellnum" value="<?=$userprf['cellnum']?>"></td></tr>
            <tr><td width="150">Alt Number: </td><td colspan="2"><input type="text" name="altnum" value="<?=$userprf['altnum']?>"></td></tr>
        </table>
        <input type="hidden" name="monochrome" value="<?=$userprf['user_id']?>">
        <input type="hidden" name="biodome" value="<?=$userprf['usertype']?>">
        <button class="btn-primary" type="submit" id="subbtn">Edit Profile</button>
    </form>
</div>
        