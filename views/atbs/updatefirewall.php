<div class="row-fluid">
    <div class="span12">
        <a href="/itdata/admin/dc/<?=$fws['clnum']*6111988?>">Back to Client<? echo " ".$clientd['clientname']?></a>
        <h4>Fill out the form to add a Primary ISP for <? echo $clientd['clientname']; ?></h4>
        <form method="post" action="/itdata/edit/update_firewall">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <td>Firewall Name/Type</td><td><input type="text" name="fwname" value="<?=$fws['firewall']?>"></td>
                </tr>
                <tr>
                    <td>Internal IP Address</td><td><input type="text" name="fwipa" value="<?=$fws['fwintipaddress']?>"></td>
                </tr>
                <tr>
                    <td>External IP Address</td><td><input type="text" name="fwepa" value="<?=$fws['fwexntipaddress']?>"></td>
                </tr>
                <tr>
                    <td>Default Gateway</td><td><input type="test" name="fwdfg" value="<?=$fws['fwdefgateway']?>"></td>
                </tr>
                <tr>
                    <td>Username</td><td><input type="text" name="fwusername" value="<?=$fws['fwusername']?>"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="text" name="fwpassword" value="<?=$fws['fwpassword']?>"></td>
                </tr>
            </table>
            <input type="hidden" value="<?=$fws['fwid']?>" name="fw_id"><br />
            <input type="hidden" value="<?=$fws['clnum']?>" name="fw_num"><br />
            <button class="btn-primary">Edit Firewall</button>
        </form>      
   </div>
</div>