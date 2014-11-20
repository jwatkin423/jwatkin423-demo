<script src="/public/bootstrap/js/val.js"></script>
<div class="row" onload="disablebutton();">
    <h3>Sign up and fill out the form below:</h3>
    <br />
    <label id="pw_label1"></label>
    <form method="post" action ="/itdata/newuser/signup">
        <table class="table table-hover table-striped table-bordered">
            <tr><td width="150">First Name: </td><td colspan="2"><input type="text" name="fname"></td></tr>
            <tr><td width="150">Last Name: </td><td colspan="2"><input type="text" name="lname"></td></tr>
            <tr><td width="150">Company Name: </td><td colspan="2"><input type="text" name="company_name"></td></tr>
            <tr><td width="150">Email: </td><td colspan="2"><input type="email" name="email"></td></tr>
            <tr><td width="150">Password: </td>
                <td><input type="password" name="pswd1" id="pw1" onKeyUp="passlen();"></td>
                <td id="pwlength1"></td>
            </tr>
            <tr>
                    <td width="150">Confirm Password: </td>
                    <td><input type="password" name="pswd2" id="pw2" onBlur="v();"></td>
                    
            </tr>
            <tr><td width="150">Address 1: </td><td colspan="2"><input type="text" name="address1"></td></tr>
            <tr><td width="150">Address 2: </td><td colspan="2"><input type="text" name="address2"></td></tr>
            <tr><td width="150">City: </td><td colspan="2"><input type="text" name="city"></td></tr>
            <tr><td width="150">State: </td><td colspan="2"><input type="text" name="state"></td></tr>
            <tr><td width="150">Zip Code: </td><td colspan="2"><input type="text" name="zip"></td></tr>
            <tr><td width="150">Work Number: </td><td colspan="2"><input type="text" name="wrknum"></td></tr>
            <tr><td width="150">Cell Number: </td><td colspan="2"><input type="text" name="cellnum"></td></tr>
            <tr><td width="150">Alt Number: </td><td colspan="2"><input type="text" name="altnum"></td></tr>
        </table>
        <button class="btn-primary" type="submit" id="subbtn">Sign Up</button>
    </form>
</div>
        