

<script src="/public/bootstrap/js/val.js"></script>
<div class="row">
    Sorry, but the email address already exists.  For your convenience I have placed sign up form below.
    <br />
    <br />
    <br />
    
    <form method="post" action ="/itdata/newuser/signup">
        <table class="table-hover table-striped">
            <tr><td width="150">First Name: </td><td><input type="text" name="fname"></td></tr>
            <tr><td width="150">Last Name: </td><td><input type="text" name="lname"></td></tr>
            <tr><td width="150">Company Name: </td><td><input type="text" name="company_name"></td></tr>
            <tr><td width="150">Email: </td><td><input type="email" name="email"></td></tr>
            <tr><td width="150">Password: </td><td><input type="password" name="pswd1" id="pw1"></td></tr>
            <tr><td width="150">Confirm Password: </td><td><input type="password" name="pswd2" id="pw2" onBlur="v();"></td></tr>
            <tr><td width="150">Address 1: </td><td><input type="text" name="address1"></td></tr>
            <tr><td width="150">Address 2: </td><td><input type="text" name="address2"></td></tr>
            <tr><td width="150">City: </td><td><input type="text" name="city"></td></tr>
            <tr><td width="150">State: </td><td><input type="text" name="state"></td></tr>
            <tr><td width="150">Zip Code: </td><td><input type="text" name="zip"></td></tr>
            <tr><td width="150">Work Number: </td><td><input type="text" name="wrknum"></td></tr>
            <tr><td width="150">Cell Number: </td><td><input type="text" name="cellnum"></td></tr>
            <tr><td width="150">Alt Number: </td><td><input type="text" name="altnum"></td></tr>
        </table>
        <button class="btn-primary" type="submit">Submit</button>
    </form>
</div>
        