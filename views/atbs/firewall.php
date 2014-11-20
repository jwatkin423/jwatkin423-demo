<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$clientd['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/admin/cl_firewall">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Firewall Name/Type</td><td><input type="text" name="fwname"></td>
                </tr>
                <tr>
                    <td>Internal IP Address</td><td><input type="text" name="fwipa"></td>
                </tr>
                <tr>
                    <td>External IP Address</td><td><input type="text" name="fwepa"></td>
                </tr>
                <tr>
                    <td>Default Gateway</td><td><input type="test" name="fwdfg"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="fwusername"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="text" name="fwpassword"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$clientd['clnum']?>" name="fw_num"><br />
            <button class="btn-primary">Add a Firewall</button>
        </form>      
   </div>
</div>