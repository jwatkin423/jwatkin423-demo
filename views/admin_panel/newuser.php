<script src="/public/bootstrap/js/val.js"></script>
<div class="row-fluid">
    <div class="span12">
        <h4>Create new User</h4>
        
        <form method="post" action="/itdata/adminpanel/add_user">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Email/User ID</td><td colspan="2"><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>First Name</td><td colspan="2"><input type="text" name="fname"></td>
                </tr>
                <tr>
                    <td>Last Name</td><td colspan="2"><input type="text" name="lname"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="password" name="password1" id="pw1" onKeyUp="passlen();"></td><td><label id="pw_label1"></label></td>
                </tr>
                <tr>
                    <td>Password</td><td colspan="2"><input type="password" name="password2" id="pw2" onBlur="v();"></td>
                </tr>
                <tr>
                    <td>Type</td><td><input type="radio" name="accnttype" value="SA">Administrator <input type="radio" name="accnttype" value="U">User</td>
                </tr>
            </table>
            <input type="hidden" name="company_id" value="<?=$coid['compid']?>"><br />
            <button class="btn-primary">Add a new User</button>
        </form>      
   </div>
</div>
