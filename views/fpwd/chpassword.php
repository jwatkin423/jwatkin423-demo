<script src="/public/bootstrap/js/val.js"></script>
<div class="row-fluid">
    <div class="span12">
        <h4>Reset your password</h4>
        <br />
        <label id="pw_label1"></label>
        <form method="post" action="/itdata/adminpanel/uppwd">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Password</td><td><input type="password" name="pw1" id="pw1" onKeyUp="passlen();"></td>
                </tr>
                <tr>
                    <td>Confirm Password</td><td><input type="password" name="pw2" id="pw2" onBlur="v();"></td>
                </tr>
            </table>
            <input type="hidden" name="monochrome" value="<?=$uid*767676?>">
            <button class="btn btn-primary">Reset Password</button>
        </form>
     </div>
 </div>